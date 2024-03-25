@extends('layouts.app')

@section('title', 'Create')

@section('content')
    <div class="container">
        <form id="create-product-form">
            <div>
                <label>Title:</label>
                <input type="text" name="title" required>
            </div>
            <div>
                <label>Category:</label>
                <input type="text" name="category" required>
            </div>
            <button type="submit">Create Product</button>
        </form>
    </div>
@endsection



@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#create-product-form').submit(function(event) {
            event.preventDefault(); // Prevent form submission
            // Serialize form data
            var formData = $(this).serialize();

            // Add CSRF token to form data
            formData += '&_token=' + $('meta[name="csrf-token"]').attr('content');

            // Send AJAX request
            $.ajax({
                url: '{{ route("products.store") }}',
                method: 'POST',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    // Handle success response
                    console.log(response.message);
                    window.location.href = '/';
                },
                error: function(xhr, status, error) {
                    // Handle validation errors
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        console.log(value[0]); // Display the first error message for each field
                    });
                }
            });
        });
    });
</script>
@stop