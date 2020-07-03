@if(session('success'))

<script>
    Swal.fire(
        '{{ session("success") }}',
        '',
        'success'
    );
</script>
@endif

@if($message = Session::get('error'))
<script>
    Swal.fire(
        '{{ $message }}',
        '',
        'success'
    );
</script>

@endif