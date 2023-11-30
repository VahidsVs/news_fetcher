@if ($message = session('swal-success'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'success',
                title: 'موفقبت آمیز',
                text: '{{ $message }}',
                confirmButtonText: 'باشه'
            })
        });
    </script>
@endif
