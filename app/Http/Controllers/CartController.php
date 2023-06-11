<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function store(Request $request){
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image' => 'required|string',
        ]);

        $cart = Cart::create($validatedData);

        return response()->json($cart, 201);
    }

    function show($id){

        $cart=cart::findOrFail($id);

        return response()->json($cart);
    }

    function destroy($id){

        $cart=cart::findOrFail($id);

        $cart->delete();

        return response()->json(['message' => 'Cart item deleted successfully']);
    }

    function update(Request $request, cart $cart){

        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image' => 'required|string',
        ]);

        $cart->update($validatedData);

        return response()->json($cart);
    }

    function index($customer_id) {

        $cart = Cart::where('customer_id', $customer_id)->get();

        return response()->json($cart);
    }
}
