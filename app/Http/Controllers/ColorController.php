<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    /**
     *Show
     */
    public function index()
    {
        $colors = Color::all();
        return view('colors.index', compact('colors'));
    }

    /**
     * Tao
     */
    public function create()
    {
        return view('colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|size:7|unique:colors,code', // Validate mã màu có độ dài 7 ký tự và duy nhất
        ]);


        Color::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('colors.index')->with('Tạo Thành Công !');
    }


    /**
     * edit
     */
    public function edit(Color $color)
    {
        return view('colors.edit', compact('color'));
    }

    /**
     * Update 
     */
    public function update(Request $request, Color $color)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|size:7|unique:colors,code,' . $color->id,
        ]);

        $color->update([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        return redirect()->route('colors.index')->with('Cập nhật thành công !');
    }

    /**
     * Remove
     */

    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()->route('colors.index')->with('Xoa Thanh Cong !');
    }
}
