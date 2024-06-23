<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bills;
use GuzzleHttp\Promise\Create;
use App\Traits\MessageStatusAPI;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy ra danh sách Bills
        $bill = Bills::all();
        return MessageStatusAPI::list($bill, 200);
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
        $bill = Bills::create($request->all());
        return MessageStatusAPI::store($bill, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bill = Bills::findOrFail($id);
        if ($bill == null) {
            return MessageStatusAPI::notFound();
        }
        return MessageStatusAPI::show($bill, 200);
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

        $Bill = Bills::findOrFail($id);
        if ($Bill == null) {
            return MessageStatusAPI::notFound();
        }
        $Bill->update($request->all());
        return MessageStatusAPI::update($Bill, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Bill = Bills::findOrFail($id);
        if ($Bill == null) {
            return MessageStatusAPI::notFound();
        }
        $Bill->delete();
        return MessageStatusAPI::destroy(null, 204);
    }
}
