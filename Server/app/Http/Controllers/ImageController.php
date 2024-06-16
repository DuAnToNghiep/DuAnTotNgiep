<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::latest()->paginate(10);
        return view('images.index', compact('images'));
    }

    public function create()
    {
        // Return view for creating new image (upload form)
        return view('images.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'product_detail_id' => 'required|integer',
            'name_image' => 'required|string',
            'url' => 'required|string',
        ]);

        // Create new image record
        Image::create($request->all());

        // Redirect to images index with success message
        return redirect()->route('images.index')
            ->with('success', 'Image uploaded successfully.');
    }

    public function show($id)
    {
        // Retrieve the image record by ID
        $image = Image::findOrFail($id);
        return view('images.show', compact('image'));
    }

    public function edit($id)
    {
        // Retrieve the image record by ID
        $image = Image::findOrFail($id);
        return view('images.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'product_detail_id' => 'required|integer',
            'name_image' => 'required|string',
            'url' => 'required|string',
        ]);

        // Update the image record
        $image = Image::findOrFail($id);
        $image->update($request->all());

        // Redirect to images index with success message
        return redirect()->route('images.index')
            ->with('success', 'Image updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the image record
        $image = Image::findOrFail($id);
        $image->delete();

        // Redirect to images index with success message
        return redirect()->route('images.index')
            ->with('success', 'Image deleted successfully.');
    }
}
