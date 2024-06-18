<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Size::query()
        ->latest("id")->paginate(6);
        return view("admin.sizes.index",compact("data"));
    }

  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.sizes.create");
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
        Size::query()->create($data);
        return redirect()->route("admin.sizes.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        //
        $data=Size::query()->findOrFail( $size->id );
        return view("admin.sizes.show",compact("data"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        //
        return view("admin.sizes.edit",compact("Size"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Size $size)
    {
        //
       $size->update($request->all());
       return redirect()->route("admin.sizes.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        //
         Size::destroy($size->id);
        return redirect()->route('admin.sizes.index');
    }
}
