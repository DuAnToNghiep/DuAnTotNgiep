<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::paginate(10); // Số phần tử trên mỗi trang
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('admin.feedbacks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'feed_back_name' => 'required',
            'feed_back_email' => 'required|email',
            'feed_back_title' => 'required',
            'feedback_content' => 'required',
        ]);

        Feedback::create($request->all());

        return redirect()->route('feedbacks.index')->with('success', 'Feedback created successfully.');
    }

    public function show(Feedback $feedback)
    {
        return view('admin.feedbacks.show', compact('feedback'));
    }

    public function edit(Feedback $feedback)
    {
        return view('admin.feedbacks.edit', compact('feedback'));
    }

    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'feed_back_name' => 'required',
            'feed_back_email' => 'required|email',
            'feed_back_title' => 'required',
            'feedback_content' => 'required',
        ]);

        $feedback->update($request->all());

        return redirect()->route('feedbacks.index')->with('success', 'Feedback updated successfully.');
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('feedbacks.index')->with('success', 'Feedback deleted successfully.');
    }
}
