@extends('layouts.admin')

@section('title', 'Projects')
@section('breadcrumb', 'Management / Projects')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <p class="text-sm text-secondary">Manage your portfolio projects</p>
        </div>
        <a href="{{ route('admin.projects.create') }}" class="btn-primary text-sm !py-2.5 !px-5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            New Project
        </a>
    </div>

    <div class="glass rounded-2xl overflow-hidden !p-0">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-border/50 bg-surface/50 sticky top-0 z-10">
                        <th class="text-left px-6 py-4 font-medium text-secondary text-xs uppercase tracking-wider">Title</th>
                        <th class="text-left px-6 py-4 font-medium text-secondary text-xs uppercase tracking-wider">Status</th>
                        <th class="text-left px-6 py-4 font-medium text-secondary text-xs uppercase tracking-wider">Created</th>
                        <th class="text-right px-6 py-4 font-medium text-secondary text-xs uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                        <tr class="border-b border-border/50 hover:bg-white/[0.02] transition-all">
                            <td class="px-6 py-4">
                                <p class="font-medium">{{ $project->title }}</p>
                                <p class="text-secondary text-xs mt-0.5 truncate max-w-xs">{{ $project->description }}</p>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-medium bg-tertiary/10 text-tertiary">
                                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                                    {{ $project->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-secondary text-xs">{{ $project->created_at->diffForHumans() }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-1">
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="w-8 h-8 rounded-lg flex items-center justify-center text-secondary hover:text-primary hover:bg-white/5 transition-all" title="Edit">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                    </a>
                                    <button @click="deleteModal = '{{ route('admin.projects.destroy', $project) }}'" class="w-8 h-8 rounded-lg flex items-center justify-center text-secondary hover:text-danger hover:bg-danger/5 transition-all" title="Delete">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-16 text-center text-secondary">No projects yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="flex items-center justify-between mt-4">
        <p class="text-xs text-secondary">Showing {{ $projects->count() }} of {{ $projects->total() ?? $projects->count() }} entries</p>
        @if ($projects->hasPages())
            <div>{{ $projects->links() }}</div>
        @endif
    </div>
@endsection
