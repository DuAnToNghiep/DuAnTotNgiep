<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use Illuminate\Http\Request;

class CartDetailsController extends Controller
{
    public function index()
    {
        $cartDetails = CartDetail::all();
        return view('cart_details.index', compact('cartDetails'));
    }

    public function create()
    {
        return view('cart_details.create');
    }

    public function store(Request $request)
    {
        $cartDetail = CartDetail::create($request->all());
        return redirect()->route('cart_details.index');
    }

    public function show(CartDetail $cartDetail)
    {
        return view('cart_details.show', compact('cartDetail'));
    }

    public function edit(CartDetail $cartDetail)
    {
        return view('cart_details.edit', compact('cartDetail'));
    }

    public function update(Request $request, CartDetail $cartDetail)
    {
        $cartDetail->update($request->all());
        return redirect()->route('cart_details.index');
    }

    public function destroy(CartDetail $cartDetail)
    {
        $cartDetail->delete();
        return redirect()->route('cart_details.index');
    }
}
