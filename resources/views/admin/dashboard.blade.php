@extends('layouts.admin')

@section('title', 'Dashboard')
@section('breadcrumb', 'Dashboard')

@section('content')
    {{-- Greeting + Date --}}
    <div class="flex items-start justify-between mb-10" x-data="{ hr: new Date().getHours() }">
        <div>
            <h1 class="text-2xl font-display font-bold">
                <span x-text="hr < 12 ? 'Good morning' : hr < 18 ? 'Good afternoon' : 'Good evening'"></span>, Admin
            </h1>
            <p class="text-secondary text-sm mt-1">Here's what's happening with your portfolio.</p>
        </div>
        <p class="text-sm text-secondary">{{ now()->format('l, j F Y') }}</p>
    </div>

    {{-- Quick Actions --}}
    <div class="flex items-center gap-3 mb-10 flex-wrap">
        <a href="{{ route('admin.projects.create') }}" class="btn-primary text-sm !py-2.5 !px-5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            New Project
        </a>
        <a href="{{ route('admin.messages.index') }}" class="btn-secondary text-sm !py-2.5 !px-5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
            View Messages
        </a>
        <a href="{{ url('/') }}" target="_blank" class="btn-secondary text-sm !py-2.5 !px-5">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            View Site
        </a>
    </div>

    {{-- Stats Grid --}}
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 mb-10">
        <div class="bg-surface-light rounded-2xl border border-border p-6 flex items-center gap-5">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-tertiary/20 to-accent/20 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
            </div>
            <div class="min-w-0">
                <p class="text-secondary text-xs font-medium uppercase tracking-wider">Projects</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-2xl font-display font-bold gradient-text">{{ $stats['totalProjects'] }}</span>
                    <span class="text-xs text-success flex items-center gap-0.5">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                        Active
                    </span>
                </div>
            </div>
        </div>

        <div class="bg-surface-light rounded-2xl border border-border p-6 flex items-center gap-5">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-tertiary/20 to-accent/20 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <div class="min-w-0">
                <p class="text-secondary text-xs font-medium uppercase tracking-wider">Skills</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-2xl font-display font-bold gradient-text">{{ $stats['totalSkills'] }}</span>
                    <span class="text-xs text-secondary">categories</span>
                </div>
            </div>
        </div>

        <div class="bg-surface-light rounded-2xl border border-border p-6 flex items-center gap-5">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-tertiary/20 to-accent/20 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div class="min-w-0">
                <p class="text-secondary text-xs font-medium uppercase tracking-wider">Experiences</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-2xl font-display font-bold gradient-text">{{ $stats['totalExperiences'] }}</span>
                    <span class="text-xs text-secondary">entries</span>
                </div>
            </div>
        </div>

        <div class="bg-surface-light rounded-2xl border border-border p-6 flex items-center gap-5">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-tertiary/20 to-accent/20 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div class="min-w-0">
                <p class="text-secondary text-xs font-medium uppercase tracking-wider">Services</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-2xl font-display font-bold gradient-text">{{ $stats['totalServices'] }}</span>
                    <span class="text-xs text-secondary">offered</span>
                </div>
            </div>
        </div>

        <div class="bg-surface-light rounded-2xl border border-border p-6 flex items-center gap-5">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-tertiary/20 to-accent/20 flex items-center justify-center shrink-0">
                <svg class="w-6 h-6 text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
            </div>
            <div class="min-w-0">
                <p class="text-secondary text-xs font-medium uppercase tracking-wider">Messages</p>
                <div class="flex items-baseline gap-2">
                    <span class="text-2xl font-display font-bold gradient-text">{{ $stats['totalMessages'] }}</span>
                    <span class="text-xs text-warning flex items-center gap-0.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-warning animate-pulse"></span>
                        Inbox
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{-- Activity Chart + Overview --}}
    <div class="grid lg:grid-cols-3 gap-5 mb-10">
        {{-- Weekly Activity --}}
        <div class="lg:col-span-2 bg-surface-light rounded-2xl border border-border p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-base font-display font-semibold">Weekly Activity</h2>
                <span class="text-xs text-secondary bg-white/5 px-3 py-1 rounded-full">This week</span>
            </div>
            <div class="flex items-end justify-between gap-2 h-24 px-1">
                @php
                    $days = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                    $heights = ['admin-chart-bar sm', 'admin-chart-bar md', 'admin-chart-bar lg', 'admin-chart-bar xl', 'admin-chart-bar lg', 'admin-chart-bar md', 'admin-chart-bar sm'];
                @endphp
                @foreach ($days as $i => $day)
                    <div class="flex flex-col items-center gap-2 flex-1">
                        <div class="{{ $heights[$i] }} w-full max-w-[32px] rounded-sm opacity-80 hover:opacity-100 transition-all"></div>
                        <span class="text-[10px] text-secondary font-medium">{{ $day }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Overview Mini Cards --}}
        <div class="bg-surface-light rounded-2xl border border-border p-6">
            <h2 class="text-base font-display font-semibold mb-6">Overview</h2>
            <div class="space-y-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs text-secondary uppercase tracking-wider">Projects</p>
                        <p class="text-lg font-display font-bold mt-0.5">{{ $stats['totalProjects'] }}</p>
                    </div>
                    <div class="conic-ring" style="background: conic-gradient(var(--color-tertiary) 0deg 240deg, rgba(255,255,255,0.06) 240deg 360deg)">
                        <div class="conic-ring-inner flex items-center justify-center">
                            <span class="text-xs font-bold text-tertiary">{{ min(100, $stats['totalProjects'] * 20) }}%</span>
                        </div>
                    </div>
                </div>
                <div class="h-px bg-border/50"></div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs text-secondary uppercase tracking-wider">Messages</p>
                        <p class="text-lg font-display font-bold mt-0.5">{{ $stats['totalMessages'] }}</p>
                    </div>
                    <div class="conic-ring" style="background: conic-gradient(var(--color-accent) 0deg 45deg, rgba(255,255,255,0.06) 45deg 360deg)">
                        <div class="conic-ring-inner flex items-center justify-center">
                            <span class="text-xs font-bold text-accent">{{ min(100, $stats['totalMessages'] * 10) }}%</span>
                        </div>
                    </div>
                </div>
                <div class="h-px bg-border/50"></div>
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-xs text-secondary uppercase tracking-wider">Services</p>
                        <p class="text-lg font-display font-bold mt-0.5">{{ $stats['totalServices'] }}</p>
                    </div>
                    <div class="conic-ring" style="background: conic-gradient(var(--color-tertiary) 0deg 180deg, rgba(255,255,255,0.06) 180deg 360deg)">
                        <div class="conic-ring-inner flex items-center justify-center">
                            <span class="text-xs font-bold text-tertiary">{{ min(100, $stats['totalServices'] * 25) }}%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Activity --}}
    <div class="grid md:grid-cols-2 gap-5">
        {{-- Recent Messages --}}
        <div class="bg-surface-light rounded-2xl border border-border p-6">
            <div class="flex items-center justify-between mb-5">
                <h2 class="text-base font-display font-semibold">Recent Messages</h2>
                <span class="text-xs text-secondary bg-white/5 px-3 py-1 rounded-full">{{ $stats['recentMessages']->count() }} new</span>
            </div>
            <div class="space-y-1">
                @forelse ($stats['recentMessages'] as $message)
                    <div class="flex items-center justify-between px-3 py-3 rounded-xl hover:bg-white/[0.03] transition-all">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-9 h-9 rounded-full bg-gradient-to-br from-tertiary/20 to-accent/20 flex items-center justify-center shrink-0">
                                <span class="text-xs font-bold text-tertiary">{{ strtoupper(substr($message->name, 0, 2)) }}</span>
                            </div>
                            <div class="min-w-0">
                                <p class="text-sm font-medium truncate">{{ $message->name }}</p>
                                <p class="text-xs text-secondary truncate">{{ $message->subject }}</p>
                            </div>
                        </div>
                        <span class="text-[10px] text-secondary shrink-0 ml-3">{{ $message->created_at->diffForHumans() }}</span>
                    </div>
                @empty
                    <p class="text-secondary text-center py-6 text-sm">No messages yet.</p>
                @endforelse
            </div>
            <a href="{{ route('admin.messages.index') }}" class="inline-flex items-center gap-1.5 text-xs text-tertiary hover:text-accent mt-3 transition-all">
                View all messages
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        {{-- Recent Projects --}}
        <div class="bg-surface-light rounded-2xl border border-border p-6">
            <div class="flex items-center justify-between mb-5">
                <h2 class="text-base font-display font-semibold">Recent Projects</h2>
                <span class="text-xs text-secondary bg-white/5 px-3 py-1 rounded-full">{{ $stats['recentProjects']->count() }} active</span>
            </div>
            <div class="space-y-1">
                @forelse ($stats['recentProjects'] as $project)
                    <div class="flex items-center justify-between px-3 py-3 rounded-xl hover:bg-white/[0.03] transition-all">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-tertiary/20 to-accent/20 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4 text-tertiary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                            </div>
                            <div class="min-w-0">
                                <p class="text-sm font-medium truncate">{{ $project->title }}</p>
                                <p class="text-xs capitalize text-secondary">{{ $project->status }}</p>
                            </div>
                        </div>
                        <span class="text-[10px] text-secondary shrink-0 ml-3">{{ $project->created_at->diffForHumans() }}</span>
                    </div>
                @empty
                    <p class="text-secondary text-center py-6 text-sm">No projects yet.</p>
                @endforelse
            </div>
            <a href="{{ route('admin.projects.index') }}" class="inline-flex items-center gap-1.5 text-xs text-tertiary hover:text-accent mt-3 transition-all">
                View all projects
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </div>
@endsection
