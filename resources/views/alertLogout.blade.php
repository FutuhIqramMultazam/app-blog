<script>
    document.querySelectorAll('.logout-button').forEach(function(button) {
    button.addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah form logout terkirim langsung

    Swal.fire({
        title: 'Are you sure you want to leave?',
        text: "You will exit this application!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Logout!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit(); // Kirim form jika user mengonfirmasi
        }
    });
});
});

function confirmDelete(slug) {
        Swal.fire({
            title: 'Are you sure?',
            text: "you will delete this data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form dengan slug yang dikirim
                document.getElementById('delete-form-' + slug).submit();
            }
        })
    }
</script>