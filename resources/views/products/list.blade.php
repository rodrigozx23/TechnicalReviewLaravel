@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <div class="container">
        <h1 class="text-center">Products</h1>
        <div id="products-container" class="d-flex flex-wrap justify-content-center">

        </div>
        <div id="pagination-links" class="d-flex justify-content-center mt-4">
         
        </div>
    </div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        loadProducts();

        function loadProducts(page = 1) {
            $.ajax({
                url: '/products/list?page=' + page,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#products-container').html(response.html);
                    $('#pagination-links').html(response.pagination);
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

        $(document).on('click', '#pagination-links a', function(e) {
            e.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            loadProducts(page);
        });
    });
</script>
@stop