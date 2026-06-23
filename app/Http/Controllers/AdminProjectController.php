<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'category' => ['nullable', 'string', 'max:100'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'video_url' => ['nullable', 'url', 'max:255'],
            'github_url' => ['nullable', 'url', 'max:255'],
            'demo_url' => ['nullable', 'url', 'max:255'],
            'status' => ['required', 'string', 'in:active,inactive'],
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('/', 'cloudinary');
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil ditambahkan.');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'category' => ['nullable', 'string', 'max:100'],
            'thumbnail' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'video_url' => ['nullable', 'url', 'max:255'],
            'github_url' => ['nullable', 'url', 'max:255'],
            'demo_url' => ['nullable', 'url', 'max:255'],
            'status' => ['required', 'string', 'in:active,inactive'],
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail && env('CLOUDINARY_CLOUD_NAME')) {
                Storage::disk('cloudinary')->delete($project->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('/', 'cloudinary');
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diupdate.');
    }

    public function destroy(Project $project)
    {
        if ($project->thumbnail && env('CLOUDINARY_CLOUD_NAME')) {
            Storage::disk('cloudinary')->delete($project->thumbnail);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus.');
    }
}