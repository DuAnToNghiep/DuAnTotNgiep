<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('create_date', 'desc')->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'news_title' => 'required|max:255',
            'news_content' => 'required',
            'news_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validatedData['user_id'] = auth()->id(); // Lấy user_id từ đăng nhập

        if ($request->hasFile('news_image')) {
            $imagePath = $request->file('news_image')->store('news_images', 'public');
            $validatedData['news_image'] = $imagePath;
        }

        News::create($validatedData);

        return redirect()->route('news.index')
            ->with('success', 'Tin tức đã được tạo thành công.');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.show', compact('news'));
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'news_title' => 'required|max:255',
            'news_content' => 'required',
            'news_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $news = News::findOrFail($id);

        $news->update($validatedData);

        return redirect()->route('news.index')
            ->with('success', 'Tin tức đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')
            ->with('success', 'Tin tức đã được xóa thành công.');
    }
}
