<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\ProductsFilterRequest;
use Illuminate\Support\Facades\Log;

class MainController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function categories() {
        $categories = Category::get();
        return view('pages.shop.category.index', compact('categories'));
    }

    public function category(ProductsFilterRequest $request, $code) {

        $category = Category::where('code', $code)->first();

        $productQuery = $category->products();      

        if ($request->filled('price_from')) {
            $productQuery->where('price', '>=', $request->price_from);
        }
        if ($request->filled('price_to')) {
            $productQuery->where('price', '<=', $request->price_to);
        }
        foreach (['hit', 'new', 'recommend'] as $field) {
            if ($request->has($field)) {
                $productQuery->$field();
            }
        }
        $products = $productQuery->paginate(3)->withPath('?' . $request->getQueryString());

        return view('pages.shop.category.show', compact('category', 'products'));
    }
    
    public function product($category, $productCode) {
        $product = Product::withTrashed()->byCode($productCode)->first();
        return view('pages.shop.product.show', compact('product'));
    }

    public function products(ProductsFilterRequest $request) {

        $productQuery = Product::with('category');

        if ($request->filled('price_from')) {
            $productQuery->where('price', '>=', $request->price_from);
        }
        if ($request->filled('price_to')) {
            $productQuery->where('price', '<=', $request->price_to);
        }
        foreach (['hit', 'new', 'recommend'] as $field) {
            if ($request->has($field)) {
                $productQuery->$field();
            }
        }
        $products = $productQuery->paginate(5)->withPath('?' . $request->getQueryString());
        return view('pages.shop.product.index', compact('products'));
    }    
}
