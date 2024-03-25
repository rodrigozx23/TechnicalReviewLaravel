<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <div class="container">
        <h1>Welcome to our Products Page</h1>
        <div id="products-container">
            @include('products.list')
        </div>
    </div>
@endsection