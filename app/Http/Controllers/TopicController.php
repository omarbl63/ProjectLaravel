<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        return view('topics.index', compact('topics'));
    }

    public function adminIndex()
    {
        $topics = Topic::all();
        return view('admin.topics.index', compact('topics'));
    }

    public function create()
    {
        return view('admin.topics.create');
    }

    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image', // Add validation for files
            'video' => 'nullable|mimetypes:video/mp4,video/quicktime',
            'audio' => 'nullable|mimetypes:audio/mpeg,audio/wav',
        ]);

        // Handle uploads
        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;
        $videoPath = $request->file('video') ? $request->file('video')->store('videos', 'public') : null;
        $audioPath = $request->file('audio') ? $request->file('audio')->store('audios', 'public') : null;

        Topic::create([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imagePath,
            'video' => $videoPath,
            'audio' => $audioPath,
        ]);

        return redirect()->route('admin.topics.index')->with('success', 'Topic created successfully.');
    }

    public function edit(Topic $topic)
    {
        return view('admin.topics.edit', compact('topic'));
    }

    public function update(Request $request, Topic $topic)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image', // Only validate image
        ]);

        // Handle image upload (keep old image if no new upload)
        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : $topic->image;

        $topic->update([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.topics.index')->with('success', 'Sujet mis à jour avec succès.');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('admin.topics.index')->with('success', 'Topic deleted successfully.');
    }

    public function showByCategory($category)
    {
        $topics = Topic::where('category', $category)->get();

        if ($topics->isEmpty()) {
            return view('topics.no_topics');
        }

        return view('topics.byCategory', compact('topics', 'category'));
    }
}
