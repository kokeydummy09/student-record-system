# Stage 1: build frontend
FROM node:18-alpine AS node-build
WORKDIR /app
COPY package*.json vite.config.js ./
COPY resources resources
RUN npm ci
RUN npm run build

# Stage 2: php/nginx runtime
FROM richarvey/nginx-php-fpm:latest
WORKDIR /var/www/html
# copy built assets
COPY --from=node-build /app/public/build /var/www/html/public/build
# copy application
COPY . .
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
# install php deps at image build (optional)
RUN composer install --no-dev --working-dir=/var/www/html --optimize-autoloader
CMD ["/start.sh"]