<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartDetailController extends Controller
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
        $cartDetail = new CartDetail();
        $cartDetail->cart_id = $request->cart_id;
        $cartDetail->product_id = $request->product_id;
        $cartDetail->quantity = $request->quantity;
        $cartDetail->price = $request->price;
        $cartDetail->save();

        return redirect()->route('cart_details.index');
    }

    public function edit($id)
    {
        $cartDetail = CartDetail::findOrFail($id);
        return view('cart_details.edit', compact('cartDetail'));
    }

    public function update(Request $request, $id)
    {
        $cartDetail = CartDetail::findOrFail($id);
        $cartDetail->cart_id = $request->cart_id;
        $cartDetail->product_id = $request->product_id;
        $cartDetail->quantity = $request->quantity;
        $cartDetail->price = $request->price;
        $cartDetail->save();

        return redirect()->route('cart_details.index');
    }

    // public function destroy($id)
    // {
    //     $cartDetail = CartDetail::findOrFail($id);
    //     $cartDetail->delete();

    //     return redirect()->route('cart_details.index');
    // }

    /**
     * Remove
     */

    public function destroy(CartDetail $cartDetail)
    {
        $cartDetail->delete();

        return redirect()->route('cart_details.index')->with('Xóa Thành Công !');
    }
}
