@if ($message = session('swal-success'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                icon: 'Success',
                title: 'Successful',
                text: '{{ $message }}',
                confirmButtonText: 'Ok'
            })
        });
    </script>
@endif
