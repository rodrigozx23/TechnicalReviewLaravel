@foreach($products as $product)
    <div class="product">
        <h2>{{ $product->title }}</h2>
        <p>Category: {{ $product->category }}</p>
        <p>ID: {{ $product->id }}</p>
    </div>
@endforeach