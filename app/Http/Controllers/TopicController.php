<?php
// app/Http/Controllers/TopicController.php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    // Display a list of all topics for general users
    public function index()
    {
        $topics = Topic::all();
        return view('topics.index', compact('topics')); // Public view for all users
    }

    // Admin route: Show all topics in the admin dashboard
    public function adminIndex()
    {
        $topics = Topic::all();
        return view('admin.topics.index', compact('topics')); // Admin view
    }

    // Admin route: Show the form to create a new topic
    public function create()
    {
        return view('admin.topics.create'); // Form to create a topic
    }

    // Admin route: Store a newly created topic in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Topic::create($request->all());

        return redirect()->route('admin.topics.index')->with('success', 'Topic created successfully.');
    }

    // Admin route: Show the form to edit an existing topic
    public function edit(Topic $topic)
    {
        return view('admin.topics.edit', compact('topic')); // Form to edit a topic
    }

    // Admin route: Update the topic
    public function update(Request $request, Topic $topic)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $topic->update($request->all());

        return redirect()->route('admin.topics.index')->with('success', 'Topic updated successfully.');
    }

    // Admin route: Delete the topic
    public function destroy(Topic $topic)
    {
        $topic->delete();

        return redirect()->route('admin.topics.index')->with('success', 'Topic deleted successfully.');
    }
}
