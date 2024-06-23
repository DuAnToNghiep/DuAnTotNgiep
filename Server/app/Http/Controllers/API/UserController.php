<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::query()->latest()->paginate(5);
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->except('user_image');
        if($request->hasFile('user_image')) {
            $data['user_image']= Storage::put('users', $request->file('user_image'));
        }
        User::create($data);
        return response()->json([],204);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
         //
         $data = $request->except('user_image');
         if($request->hasFile('user_image')) {
             $data['user_image']= Storage::put('users', $request->file('user_image'));
         }
         $sr = $user->image;
         
         $user ->update($data);
         
         if($request->hasFile('user_image')&& Storage::exists($sr)) {
             Storage::delete($sr);
         }
        return response()->json([],204);

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        if(Storage::exists($user->image)) {
            Storage::delete($user->image);
        }
        $user->delete();
       return response()->json([],204);
    }
}
