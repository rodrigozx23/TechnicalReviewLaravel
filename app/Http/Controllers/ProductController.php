<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('products.list');
    }

    public function indexcomposerview(Request $request)
    {
        $products = Product::select('id', 'title', 'category')->paginate(10);

        $html = view('products', compact('products'))->render();

        $pagination = $products->links()->toHtml();

        return response()->json([
            'html' => $html,
            'pagination' => $pagination
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->category = $request->category;
        $product->save();

        return response()->json(['success' => true, 'message' => 'Product created successfully']);
    }

    public function create(Request $request)
    {
        return view('products.create')->render();
    }
}