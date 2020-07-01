@if($message = Session::get('success'))
<script>
    Swal.fire(
        '{{ $message }}',
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