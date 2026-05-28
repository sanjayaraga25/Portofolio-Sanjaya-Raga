@extends('layouts.admin')

@section('title', 'Message from ' . $message->name)

@section('content')
    <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center gap-2 text-secondary hover:text-primary transition-all mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        Back to Messages
    </a>

    <div class="grid md:grid-cols-3 gap-8">
        <div class="md:col-span-2 glass rounded-2xl p-8 space-y-6">
            <div>
                <h2 class="text-2xl font-display font-bold">{{ $message->subject }}</h2>
                <p class="text-secondary text-sm mt-1">Received {{ $message->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex flex-wrap gap-6 pb-6 border-b border-border">
                <div>
                    <p class="text-xs text-secondary uppercase tracking-wider">From</p>
                    <p class="font-medium">{{ $message->name }}</p>
                </div>
                <div>
                    <p class="text-xs text-secondary uppercase tracking-wider">Email</p>
                    <a href="mailto:{{ $message->email }}" class="font-medium text-tertiary hover:text-accent transition-colors">{{ $message->email }}</a>
                </div>
            </div>

            <div>
                <p class="text-secondary leading-relaxed whitespace-pre-wrap">{{ $message->message }}</p>
            </div>

            <div class="flex gap-3 pt-4 border-t border-border">
                <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" class="btn-primary text-sm magnetic-btn">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    Reply via Email
                </a>
                <button @click="deleteModal = '{{ route('admin.messages.destroy', $message) }}'" class="btn-secondary text-sm !text-danger magnetic-btn">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    Delete
                </button>
            </div>
        </div>

        <div class="glass rounded-2xl p-8 h-fit space-y-4">
            <h3 class="font-display font-semibold">Quick Info</h3>
            <div class="space-y-3 text-sm">
                <div>
                    <p class="text-xs text-secondary uppercase tracking-wider">Name</p>
                    <p>{{ $message->name }}</p>
                </div>
                <div>
                    <p class="text-xs text-secondary uppercase tracking-wider">Email</p>
                    <a href="mailto:{{ $message->email }}" class="text-tertiary hover:text-accent transition-colors">{{ $message->email }}</a>
                </div>
                <div>
                    <p class="text-xs text-secondary uppercase tracking-wider">Subject</p>
                    <p>{{ $message->subject }}</p>
                </div>
                <div>
                    <p class="text-xs text-secondary uppercase tracking-wider">Received</p>
                    <p>{{ $message->created_at->format('M d, Y H:i') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
