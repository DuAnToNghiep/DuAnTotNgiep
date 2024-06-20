<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     *Show
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Tao
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')
            ->with('Tạo Thành Công');
    }


    /**
     * edit
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update 
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')
            ->with('Chỉnh sửa thành công !');
    }

    /**
     * Remove
     */

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('Xóa Thành Công !');
    }
}
