<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index() {
        $orders = Auth::user()->orders()->active()->paginate(4);
        return view('pages.auth.orders.index', compact('orders'));
    }

    public function show(Order $order) {
        if (!Auth::user()->orders->contains($order)) {
            return back();
        }
        return view('pages.auth.orders.show', compact('order'));
    }
}
