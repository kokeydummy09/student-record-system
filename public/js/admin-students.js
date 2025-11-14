document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('click', function (e) {
        const el = e.target.closest('.js-delete-student');
        if (!el) return;
        e.preventDefault();

        const id = el.dataset.studentId;
        if (!id) return;

        const form = document.getElementById('delete-student-' + id);
        if (!form) return;

        if (confirm('Delete this student?')) {
            form.submit();
        }
    });
});
