<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();

        return view('colors.index', compact('colors'));
    }
}
