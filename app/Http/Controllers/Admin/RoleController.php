<?php

namespace App\Http\Controllers\Admin;


use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Role::query()
        ->latest("id")->paginate(6);
        return view("admin.roles.index",compact("data"));
    }

  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.roles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'image' => ['image']
        ]);
        $data = $request->except(['image']);
        if($request->hasFile('image')){
            $data['image'] = Storage::put('posts', $request->file('image'));
        }
        Role::query()->create($data);
        return redirect()->route("admin.roles.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
        $data=Role::query()->findOrFail( $role->id );
        return view("admin.roles.show",compact("data"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
        return view("admin.roles.edit",compact("role"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        //
       $role->update($request->all());
       return redirect()->route("admin.roles.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
         Role::destroy($role->id);
        return redirect()->route('admin.roles.index');
    }
}
