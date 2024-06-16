<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('colors.index', compact('colors'));
    }

    public function create()
    {
        return view('colors.create');
    }

    public function store(Request $request)
    {
        $color = Color::create($request->all());
        return redirect()->route('colors.index');
    }

    public function show(Color $color)
    {
        return view('colors.show', compact('color'));
    }

    public function edit(Color $color)
    {
        return view('colors.edit', compact('color'));
    }

    public function update(Request $request, Color $color)
    {
        $color->update($request->all());
        return redirect()->route('colors.index');
    }

    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()->route('colors.index');
    }
}
