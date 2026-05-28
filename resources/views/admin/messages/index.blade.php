@extends('layouts.admin')

@section('title', 'Messages')
@section('breadcrumb', 'Inbox / Messages')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <p class="text-sm text-secondary">Messages from your contact form</p>
        </div>
    </div>

    <div class="glass rounded-2xl overflow-hidden !p-0">
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead>
                    <tr class="border-b border-border/50 bg-surface/50 sticky top-0 z-10">
                        <th class="text-left px-6 py-4 font-medium text-secondary text-xs uppercase tracking-wider">Name</th>
                        <th class="text-left px-6 py-4 font-medium text-secondary text-xs uppercase tracking-wider">Email</th>
                        <th class="text-left px-6 py-4 font-medium text-secondary text-xs uppercase tracking-wider">Subject</th>
                        <th class="text-left px-6 py-4 font-medium text-secondary text-xs uppercase tracking-wider">Date</th>
                        <th class="text-right px-6 py-4 font-medium text-secondary text-xs uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($messages as $message)
                        <tr class="border-b border-border/50 hover:bg-white/[0.02] transition-all">
                            <td class="px-6 py-4 font-medium">{{ $message->name }}</td>
                            <td class="px-6 py-4 text-secondary"><a href="mailto:{{ $message->email }}" class="hover:text-primary transition-colors">{{ $message->email }}</a></td>
                            <td class="px-6 py-4 text-secondary truncate max-w-xs">{{ $message->subject }}</td>
                            <td class="px-6 py-4 text-secondary text-xs">{{ $message->created_at->diffForHumans() }}</td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-1">
                                    <a href="{{ route('admin.messages.show', $message) }}" class="w-8 h-8 rounded-lg flex items-center justify-center text-secondary hover:text-primary hover:bg-white/5 transition-all" title="View">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </a>
                                    <button @click="deleteModal = '{{ route('admin.messages.destroy', $message) }}'" class="w-8 h-8 rounded-lg flex items-center justify-center text-secondary hover:text-danger hover:bg-danger/5 transition-all" title="Delete">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-16 text-center text-secondary">No messages yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="flex items-center justify-between mt-4">
        <p class="text-xs text-secondary">Showing {{ $messages->count() }} entries</p>
    </div>
@endsection
