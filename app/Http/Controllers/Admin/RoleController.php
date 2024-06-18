<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Role::query()->latest();
        return response()->json($data);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Role::query()->create($request->all());

        return response()->json([], 204);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try {
            $category = Role::query()->findOrFail($id);

            return response()->json($category);
        } catch (\Exception $exception) {

            Log::error($exception->getMessage(), [$exception]);

            return response()->json('Server error!', 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $Role = Role::query()->findOrFail($id);

        $Role->update($request->all()); 

        return response()->json($Role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Role::destroy($id);

        return response()->json([], 204);
    }
}
