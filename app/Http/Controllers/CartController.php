<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $userId = auth()->id();

        CartItem::create([
            'user_id' => $userId,
            'product_name' => $validated['name'],
            'product_price' => $validated['price'],
            'quantity' => 1, // O podrías hacer que se pase como parámetro
        ]);

        return response()->json(['success' => true]);
    }
}
