<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class MainController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function categories() {
        $categories = Category::get();
        return view('shop.category.index', compact('categories'));
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view('shop.category.show', compact('category'));
    }
    
    public function product($category, $productCode = null) {
        $product = Product::where('code', $productCode)->first();
        return view('shop.product.show', ['product' => $product]);
    }

    public function products() {
        $products = Product::get();
        return view('shop.product.index', compact('products'));
    }    
}
