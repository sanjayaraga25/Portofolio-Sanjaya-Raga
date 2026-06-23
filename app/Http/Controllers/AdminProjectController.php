<?php

namespace App\Http\Controllers;

use App\Models\Project;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AdminProjectController extends Controller
{
    private function isCloudinaryConfigured(): bool
    {
        return (bool) config('filesystems.disks.cloudinary.cloud');
    }

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
            try {
                $file = $request->file('thumbnail');
                $result = Cloudinary::uploadApi()->upload($file->getRealPath(), [
                    'public_id' => Str::random(40),
                    'resource_type' => 'image',
                ]);
                $validated['thumbnail'] = $result['secure_url'];
            } catch (\Throwable $e) {
                Log::error('Thumbnail upload failed: ' . $e->getMessage(), ['exception' => $e]);
            }
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
            try {
                $this->deleteThumbnailFromCloudinary($project->thumbnail);

                $file = $request->file('thumbnail');
                $result = Cloudinary::uploadApi()->upload($file->getRealPath(), [
                    'public_id' => Str::random(40),
                    'resource_type' => 'image',
                ]);
                $validated['thumbnail'] = $result['secure_url'];
            } catch (\Throwable $e) {
                Log::error('Thumbnail update failed: ' . $e->getMessage(), ['exception' => $e]);
            }
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil diupdate.');
    }

    public function destroy(Project $project)
    {
        try {
            $this->deleteThumbnailFromCloudinary($project->thumbnail);
        } catch (\Throwable $e) {
            Log::error('Thumbnail delete failed: ' . $e->getMessage(), ['exception' => $e]);
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project berhasil dihapus.');
    }

    private function deleteThumbnailFromCloudinary(?string $thumbnail): void
    {
        if (!$thumbnail || !$this->isCloudinaryConfigured()) {
            return;
        }

        if (str_contains($thumbnail, 'res.cloudinary.com')) {
            $path = parse_url($thumbnail, PHP_URL_PATH);
            $publicId = pathinfo($path, PATHINFO_FILENAME);
            Cloudinary::uploadApi()->destroy($publicId);
        }
    }
}