<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Order;

class BasketIsNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $orderId = session('orderId') ? session('orderId') : null;
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
            if ($order->products->count() == 0) {
                session()->flash('warning', 'Ваша корзина пуста!');
                return redirect()->route('welcome');
            }
        }

        return $next($request);
    }
}
