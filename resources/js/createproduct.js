$(document).ready(function() {
    alert("0")
    $('#create-product-form').submit(function(event) {
        event.preventDefault(); // Prevent form submission
        alert("1")
        // Serialize form data
        var formData = $(this).serialize();
        console.log(formData)
        // Send AJAX request
        $.ajax({
            url: '{{ route("products.store") }}',
            method: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Handle success response
                alert("2")
                console.log(response.message);
            },
            error: function(xhr, status, error) {
                alert("3")
                // Handle validation errors
                var errors = xhr.responseJSON.errors;
                $.each(errors, function(key, value) {
                    console.log(value[0]); // Display the first error message for each field
                });
            }
        });
    });
});