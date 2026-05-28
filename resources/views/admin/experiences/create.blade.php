@extends('layouts.admin')

@section('title', 'Create Experience')

@section('content')
    <a href="{{ route('admin.experiences.index') }}" class="inline-flex items-center gap-2 text-secondary hover:text-primary transition-all mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        Back to Experiences
    </a>

    <div class="max-w-2xl glass rounded-2xl p-8">
        <h2 class="text-2xl font-display font-bold mb-6">New Experience</h2>

        <form method="POST" action="{{ route('admin.experiences.store') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Position</label>
                    <input type="text" name="title" required value="{{ old('title') }}"
                        class="input-field @error('title') border-danger @enderror">
                    @error('title') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Company</label>
                    <input type="text" name="company" required value="{{ old('company') }}"
                        class="input-field @error('company') border-danger @enderror">
                    @error('company') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Type</label>
                <select name="type" class="input-field @error('type') border-danger @enderror">
                    <option value="work" {{ old('type') === 'work' ? 'selected' : '' }}>Work</option>
                    <option value="organization" {{ old('type') === 'organization' ? 'selected' : '' }}>Organization</option>
                </select>
                @error('type') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Description</label>
                <textarea name="description" required rows="4"
                    class="input-field resize-none @error('description') border-danger @enderror">{{ old('description') }}</textarea>
                @error('description') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Start Date</label>
                    <input type="date" name="start_date" required value="{{ old('start_date') }}"
                        class="input-field @error('start_date') border-danger @enderror">
                    @error('start_date') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">End Date (leave blank if present)</label>
                    <input type="date" name="end_date" value="{{ old('end_date') }}"
                        class="input-field @error('end_date') border-danger @enderror">
                    @error('end_date') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div class="flex gap-3 pt-6">
                <button type="submit" class="btn-primary magnetic-btn">Create Experience</button>
                <a href="{{ route('admin.experiences.index') }}" class="btn-secondary magnetic-btn">Cancel</a>
            </div>
        </form>
    </div>
@endsection
