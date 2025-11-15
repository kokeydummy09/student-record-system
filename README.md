# Student Record System (Laravel CRUD)

A simple Student Record System built with Laravel and MySQL implementing full CRUD for student records. This repository was created as part of an assessment for Goldplan Insurance Services.

---

## Features

- Student CRUD: Create, Read, Update, Delete student records.
- Validation: Unique validation for Student ID and Email.
- List & Profile Views: List shows Student ID, Name, Email, Course, Year Level; profile shows full details.
- Confirm Delete: Deletions require confirmation.

---

## Tech Stack

- Laravel 11
- PHP 8+
- MySQL (Aiven used in this project)
- Blade templates
- Vite / Tailwind (optional)
- Render.com (example deployment)

---

## Installation (Local Setup)

Prerequisites:
- PHP 8.1+
- Composer
- Node.js (16+) and npm (or yarn/pnpm)
- MySQL or MariaDB
- Git

1. Clone repository:
```bash
git clone https://github.com/kokeydummy09/student-record-system-.git
cd student-record-system
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install frontend dependencies and build:
```bash
npm ci
npm run build   # production build: generates public/build/manifest.json
```

4. Copy `.env.example` to `.env` and set values:
```bash
cp .env.example .env
php artisan key:generate
```
Edit `.env` to set your `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`. Do not commit secrets.

5. Run migrations and seeders:
```bash
php artisan migrate
php artisan db:seed   # optional if seeders exist
```

6. Start local server:
```bash
php artisan serve
# open http://localhost:8000
