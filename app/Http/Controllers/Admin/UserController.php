<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=User::query()
        ->latest("id")->paginate(6);
        return view("admin.users.index",compact("data"));
    }

  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.users.create");
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
        User::query()->create($data);
        return redirect()->route("admin.users.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        $data=User::query()->findOrFail( $user->id );
        return view("admin.users.show",compact("data"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        return view("admin.users.edit",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
       $user->update($request->all());
       return redirect()->route("admin.users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
         User::destroy($user->id);
        return redirect()->route('admin.users.index');
    }
}
