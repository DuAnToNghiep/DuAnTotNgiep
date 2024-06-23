<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use Illuminate\Http\Request;
use App\Traits\MessageStatusAPI;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy ra danh sách Carts
        $Carts = Carts::all();
        return MessageStatusAPI::list($Carts, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate check user và promotion không được null
        // $request->validate([
        //     'user_id' => 'required|integer',
        //     'promotion_id ' => 'required|integer',
        // ]);
        $Carts = Carts::create($request->all());
        return MessageStatusAPI::store($Carts, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Carts = Carts::findOrFail($id);
        if ($Carts == null) {
            return MessageStatusAPI::notFound();
        }
        return MessageStatusAPI::show($Carts, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'user_id' => 'required|integer',
        //     'promotion_id ' => 'required|integer',
        // ]);

        $Carts = Carts::findOrFail($id);
        if ($Carts == null) {
            return MessageStatusAPI::notFound();
        }
        $Carts->update($request->all());
        return MessageStatusAPI::update($Carts, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Carts = Carts::findOrFail($id);
        if ($Carts == null) {
            return MessageStatusAPI::notFound();
        }
        $Carts->delete();
        return MessageStatusAPI::destroy(null, 204);
    }
}
