@extends('layouts.admin')

@section('title', 'Create Service')

@section('content')
    <a href="{{ route('admin.services.index') }}" class="inline-flex items-center gap-2 text-secondary hover:text-primary transition-all mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        Back to Services
    </a>

    <div class="max-w-2xl glass rounded-2xl p-8">
        <h2 class="text-2xl font-display font-bold mb-6">New Service</h2>

        <form method="POST" action="{{ route('admin.services.store') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Title</label>
                    <input type="text" name="title" required value="{{ old('title') }}"
                        class="input-field @error('title') border-danger @enderror">
                    @error('title') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Icon</label>
                    <select name="icon" class="input-field @error('icon') border-danger @enderror">
                        <option value="code" {{ old('icon') === 'code' ? 'selected' : '' }}>Code</option>
                        <option value="camera" {{ old('icon') === 'camera' ? 'selected' : '' }}>Camera</option>
                        <option value="video" {{ old('icon') === 'video' ? 'selected' : '' }}>Video</option>
                        <option value="palette" {{ old('icon') === 'palette' ? 'selected' : '' }}>Palette</option>
                    </select>
                    @error('icon') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Description</label>
                <textarea name="description" required rows="4"
                    class="input-field resize-none @error('description') border-danger @enderror">{{ old('description') }}</textarea>
                @error('description') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex gap-3 pt-6">
                <button type="submit" class="btn-primary magnetic-btn">Create Service</button>
                <a href="{{ route('admin.services.index') }}" class="btn-secondary magnetic-btn">Cancel</a>
            </div>
        </form>
    </div>
@endsection
