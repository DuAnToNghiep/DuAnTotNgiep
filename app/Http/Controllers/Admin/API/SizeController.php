<?php

namespace App\Http\Controllers\Admin\API;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Size::query()->latest()->paginate(5);
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Size::query()->create($request->all());

        return response()->json([], 204);
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        //
        return response()->json($size);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $Role = Size::query()->findOrFail($id);

        $Role->update($request->all()); 

        return response()->json($Role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Size::destroy($id);

        return response()->json([], 204);
    }
}
