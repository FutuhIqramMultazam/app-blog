<script>
    document.querySelectorAll('.logout-button').forEach(function(button) {
    button.addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah form logout terkirim langsung

    Swal.fire({
        title: 'Are you sure you want to leave?',
        text: "You will exit this application!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, Logout!',
        cancelButtonText: 'Cancel',
        iconHtml: `<i class="fa-solid fa-triangle-exclamation"></i>`,
        iconColor:'orange',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout-form').submit(); // Kirim form jika user mengonfirmasi
        }else{
                Swal.fire({
                    title:'Cancel exit!',
                    icon:'error',
                    timer: 1000,
                    showConfirmButton: false,
                    iconColor:'red',
                })
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
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
        iconHtml: `<i class="fa-solid fa-triangle-exclamation"></i>`,
            iconColor:'orange',
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit form dengan slug yang dikirim
                document.getElementById('delete-form-' + slug).submit();
            }else{
                Swal.fire({
                    title:'Cancel delete!',
                    icon:'error',
                    timer: 1000,
                    showConfirmButton: false,
                    iconColor:'red',
                })
            }
        })
    }

    document.getElementById('setting').addEventListener('click',function () {
        Swal.fire({
        title: 'Mohon Maaf ',
        text: "Fitur setting masih dalam perbaikan",
        icon: 'error',
        showConfirmButton:false,
        iconColor:'red',
        imageUrl:"https://unsplash.it/1200/400",
        iconHtml: `<i class="fa-solid fa-triangle-exclamation"></i>`,
        showCloseButton: true
    })
    })
</script>