@extends('layouts.admin')

@section('title', 'Create Skill')

@section('content')
    <a href="{{ route('admin.skills.index') }}" class="inline-flex items-center gap-2 text-secondary hover:text-primary transition-all mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        Back to Skills
    </a>

    <div class="max-w-2xl glass rounded-2xl p-8">
        <h2 class="text-2xl font-display font-bold mb-6">New Skill</h2>

        <form method="POST" action="{{ route('admin.skills.store') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium mb-2">Name</label>
                    <input type="text" name="name" required value="{{ old('name') }}"
                        class="input-field @error('name') border-danger @enderror">
                    @error('name') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium mb-2">Category</label>
                    <input type="text" name="category" required value="{{ old('category') }}"
                        class="input-field @error('category') border-danger @enderror">
                    @error('category') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Icon Class</label>
                <input type="text" name="icon" value="{{ old('icon') }}"
                    class="input-field @error('icon') border-danger @enderror" placeholder="Optional">
                @error('icon') <p class="text-danger text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="flex gap-3 pt-6">
                <button type="submit" class="btn-primary magnetic-btn">Create Skill</button>
                <a href="{{ route('admin.skills.index') }}" class="btn-secondary magnetic-btn">Cancel</a>
            </div>
        </form>
    </div>
@endsection
