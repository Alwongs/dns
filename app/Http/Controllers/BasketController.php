<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Classes\Basket;

class BasketController extends Controller
{

    public function basket() {

        $order = (new Basket())->getOrder();

        return view('pages.shop.basket.index', compact('order'));
    }

    public function basketConfirm(Request $request) {

        if ((new Basket())->saveOrder($request->name, $request->phone)) {
            session()->flash('success', 'Ваш заказ принят в обработку');
        } else {
            session()->flash('warning', 'Товар недоступен для заказа в полном объеме');            
        }

        Order::eraseOrderSum();

        return redirect()->route('products');
    }
    
    public function basketPlace() {

        $basket = new Basket();

        $order = $basket->getOrder();
        if (!$basket->countAvailable()) {
            session()->flash('warning', 'Товар недоступен для заказа в полном объеме');   
            return redirect()->route('basket');
        }
        return view('pages.shop.basket.order', compact('order'));
    }

    public function basketAdd(Product $product) {

        $result = (new Basket(true))->addProduct($product);



        if ($result) {
            session()->flash('success', 'Добавлен товар ' . $product->name);            
        } else {
            session()->flash('warning', 'Товар ' . $product->name . ' в большем кол-ве недоступен для заказа');
        }

        return redirect()->route('basket');
    }


    public function basketRemove(Product $product) {

        (new Basket())->removeProduct($product);
        session()->flash('warning', 'Удален товар ' . $product->name);            

        return redirect()->route('basket');
    }
}
