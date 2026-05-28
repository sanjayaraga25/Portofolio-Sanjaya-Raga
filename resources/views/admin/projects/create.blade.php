@extends('layouts.admin')

@section('title', 'Create Project')

@section('content')
    <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center gap-2 text-secondary hover:text-primary transition-all mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        Back to Projects
    </a>

    <div class="max-w-2xl glass rounded-2xl p-8" x-data="{ preview: null }">
        <h2 class="text-2xl font-display font-bold mb-6">New Project</h2>

        <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-medium mb-2">Title</label>
                <input type="text" name="title" required value="{{ old('title') }}"
                    class="input-field @error('title') border-danger @enderror">
                @error('title') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Description</label>
                <textarea name="description" required rows="4"
                    class="input-field resize-none @error('description') border-danger @enderror">{{ old('description') }}</textarea>
                @error('description') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Category</label>
                <input type="text" name="category" value="{{ old('category') }}" placeholder="e.g. IT, Video Editing, Data Science"
                    class="input-field @error('category') border-danger @enderror">
                @error('category') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-2">GitHub URL</label>
                    <input type="url" name="github_url" value="{{ old('github_url') }}"
                        class="input-field @error('github_url') border-danger @enderror">
                    @error('github_url') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Demo URL</label>
                    <input type="url" name="demo_url" value="{{ old('demo_url') }}"
                        class="input-field @error('demo_url') border-danger @enderror">
                    @error('demo_url') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Video URL (YouTube) � pengganti thumbnail</label>
                <input type="url" name="video_url" value="{{ old('video_url') }}"
                    class="input-field @error('video_url') border-danger @enderror">
                @error('video_url') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Status</label>
                <select name="status" class="input-field @error('status') border-danger @enderror">
                    <option value="active" {{ old("status") === "active" ? "selected" : "" }}>Active</option>
                    <option value="inactive" {{ old("status") === "inactive" ? "selected" : "" }}>Inactive</option>
                    
                </select>
                @error('status') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Thumbnail</label>
                <div class="relative">
                    <input type="file" name="thumbnail" accept="image/*"
                        class="input-field file:bg-transparent file:border-0 file:text-tertiary file:cursor-pointer file:font-medium @error('thumbnail') border-danger @enderror"
                        @change="preview = URL.createObjectURL($el.files[0])">
                </div>
                @error('thumbnail') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                <template x-if="preview">
                    <div class="mt-3 relative inline-block">
                        <img :src="preview" class="h-32 rounded-lg object-cover">
                        <button @click="preview = null" type="button" class="absolute -top-2 -right-2 w-6 h-6 rounded-full bg-danger/80 text-white text-xs flex items-center justify-center hover:bg-danger transition-all">&times;</button>
                    </div>
                </template>
            </div>

            <div class="flex gap-3 pt-6">
                <button type="submit" class="btn-primary magnetic-btn">Create Project</button>
                <a href="{{ route('admin.projects.index') }}" class="btn-secondary magnetic-btn">Cancel</a>
            </div>
        </form>
    </div>
@endsection