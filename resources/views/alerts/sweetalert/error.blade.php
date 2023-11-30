@if ($message = session('swal-error'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'error',
                title: 'خطا!',
                text: '{{ $message }}',
                confirmButtonText: 'باشه'
            })
        });
    </script>
@endif
