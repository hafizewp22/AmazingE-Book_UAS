<?php

namespace App\Http\Controllers;

use App\Models\EBooks;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function cart()
    {
        if (!Auth::user()->role_id)
            $cart = Order::with('ebook', 'ebook')->has('ebook')->where('account_id', Auth::id())->get();
        else  $cart = Order::with('ebook', 'ebook')->has('ebook')->where('account_id', Auth::id())->get();
        return view('cart', compact('cart'));
    }

    public function addToCart($id)
    {
        $cart = Order::where('account_id', auth()->user()->id)->where('ebook_id', $id)->first();

        if ($cart != null){
            $cart->save();

            return redirect('/cart');
        }

        Order::create([
            'account_id' => auth()->user()->id,
            'ebook_id' => $id,
            'order_date' => date('Y-m-d'),
        ]);

        return redirect('/cart');
    }

    public function delete_cart(Request $request, $id){
        Order::find($id)->delete();
        return redirect('/cart');
    }
}
