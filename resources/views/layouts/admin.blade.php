<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') — Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral text-primary" x-data="{ sidebarOpen: true, deleteModal: null, userMenuOpen: false }">

    <div class="flex min-h-screen">

        {{-- SIDEBAR --}}
        <aside class="bg-surface/90 backdrop-blur-xl border-r border-border/50 flex flex-col fixed h-full z-40 transition-all duration-300"
            :class="sidebarOpen ? 'w-72' : 'w-20'">

            {{-- Logo / Brand --}}
            <div class="flex items-center gap-3 px-5 pt-6 pb-4" :class="sidebarOpen ? '' : 'justify-center px-0'">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-tertiary to-accent flex items-center justify-center shrink-0 shadow-lg shadow-tertiary/20">
                    <span class="text-sm font-bold text-white">P</span>
                </div>
                <div x-show="sidebarOpen" class="min-w-0">
                    <p class="font-display font-bold text-base truncate">Portfolio</p>
                    <p class="text-[10px] text-secondary uppercase tracking-wider">Admin Panel</p>
                </div>
            </div>

            {{-- Nav --}}
            <nav class="flex flex-col flex-1 overflow-y-auto px-3 pb-4 scrollbar-thin">
                {{-- Main --}}
                <p x-show="sidebarOpen" class="sidebar-section-label">Main</p>
                <a href="{{ route('admin.dashboard') }}"
                    class="sidebar-item flex items-center gap-3 px-4 py-2.5 rounded-r-lg text-sm {{ request()->routeIs('admin.dashboard') ? 'active' : 'hover:bg-white/[0.03]' }}"
                    :title="!sidebarOpen ? 'Dashboard' : ''">
                    <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.dashboard') ? 'text-tertiary' : 'text-secondary' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    <span x-show="sidebarOpen" class="sidebar-item-text {{ request()->routeIs('admin.dashboard') ? 'text-tertiary font-medium' : 'text-secondary' }}">Dashboard</span>
                </a>

                {{-- Management --}}
                <p x-show="sidebarOpen" class="sidebar-section-label mt-3">Management</p>

                <a href="{{ route('admin.projects.index') }}"
                    class="sidebar-item flex items-center gap-3 px-4 py-2.5 rounded-r-lg text-sm {{ request()->routeIs('admin.projects.*') ? 'active' : 'hover:bg-white/[0.03]' }}"
                    :title="!sidebarOpen ? 'Projects' : ''">
                    <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.projects.*') ? 'text-tertiary' : 'text-secondary' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                    <span x-show="sidebarOpen" class="sidebar-item-text {{ request()->routeIs('admin.projects.*') ? 'text-tertiary font-medium' : 'text-secondary' }}">Projects</span>
                </a>

                <a href="{{ route('admin.skills.index') }}"
                    class="sidebar-item flex items-center gap-3 px-4 py-2.5 rounded-r-lg text-sm {{ request()->routeIs('admin.skills.*') ? 'active' : 'hover:bg-white/[0.03]' }}"
                    :title="!sidebarOpen ? 'Skills' : ''">
                    <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.skills.*') ? 'text-tertiary' : 'text-secondary' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    <span x-show="sidebarOpen" class="sidebar-item-text {{ request()->routeIs('admin.skills.*') ? 'text-tertiary font-medium' : 'text-secondary' }}">Skills</span>
                </a>

                <a href="{{ route('admin.experiences.index') }}"
                    class="sidebar-item flex items-center gap-3 px-4 py-2.5 rounded-r-lg text-sm {{ request()->routeIs('admin.experiences.*') ? 'active' : 'hover:bg-white/[0.03]' }}"
                    :title="!sidebarOpen ? 'Experiences' : ''">
                    <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.experiences.*') ? 'text-tertiary' : 'text-secondary' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span x-show="sidebarOpen" class="sidebar-item-text {{ request()->routeIs('admin.experiences.*') ? 'text-tertiary font-medium' : 'text-secondary' }}">Experiences</span>
                </a>

                <a href="{{ route('admin.services.index') }}"
                    class="sidebar-item flex items-center gap-3 px-4 py-2.5 rounded-r-lg text-sm {{ request()->routeIs('admin.services.*') ? 'active' : 'hover:bg-white/[0.03]' }}"
                    :title="!sidebarOpen ? 'Services' : ''">
                    <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.services.*') ? 'text-tertiary' : 'text-secondary' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span x-show="sidebarOpen" class="sidebar-item-text {{ request()->routeIs('admin.services.*') ? 'text-tertiary font-medium' : 'text-secondary' }}">Services</span>
                </a>

                {{-- Inbox --}}
                <p x-show="sidebarOpen" class="sidebar-section-label mt-3">Inbox</p>

                <a href="{{ route('admin.messages.index') }}"
                    class="sidebar-item flex items-center gap-3 px-4 py-2.5 rounded-r-lg text-sm {{ request()->routeIs('admin.messages.*') ? 'active' : 'hover:bg-white/[0.03]' }}"
                    :title="!sidebarOpen ? 'Messages' : ''">
                    <svg class="w-5 h-5 shrink-0 {{ request()->routeIs('admin.messages.*') ? 'text-tertiary' : 'text-secondary' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                    <span x-show="sidebarOpen" class="sidebar-item-text {{ request()->routeIs('admin.messages.*') ? 'text-tertiary font-medium' : 'text-secondary' }}">Messages</span>
                </a>
            </nav>

            {{-- Sidebar footer --}}
            <div class="px-3 pb-5 mt-auto">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit"
                        class="sidebar-item flex items-center gap-3 px-4 py-2.5 rounded-r-lg text-sm text-secondary hover:text-danger hover:bg-danger/5 w-full transition-all"
                        :title="!sidebarOpen ? 'Logout' : ''">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        <span x-show="sidebarOpen">Logout</span>
                    </button>
                </form>
            </div>

            {{-- Collapse toggle --}}
            <button @click="sidebarOpen = !sidebarOpen"
                class="absolute -right-3 top-1/2 -translate-y-1/2 w-6 h-6 rounded-full bg-surface border border-border/50 flex items-center justify-center text-secondary hover:text-primary hover:border-tertiary/30 transition-all z-50"
                :title="sidebarOpen ? 'Collapse' : 'Expand'">
                <svg class="w-3 h-3 transition-transform duration-300" :class="sidebarOpen ? '' : 'rotate-180'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"/></svg>
            </button>
        </aside>

        {{-- MAIN CONTENT --}}
        <main class="flex-1 transition-all duration-300 min-h-screen flex flex-col" :class="sidebarOpen ? 'ml-72' : 'ml-20'">

            {{-- Top Header Bar --}}
            <header class="sticky top-0 z-30 bg-neutral/80 backdrop-blur-xl border-b border-border/50">
                <div class="flex items-center justify-between px-8 py-3">
                    <div>
                        <p class="text-xs text-secondary uppercase tracking-wider">@yield('breadcrumb', 'Dashboard')</p>
                        <h1 class="text-lg font-display font-semibold mt-0.5">@yield('title', 'Dashboard')</h1>
                    </div>
                    <div class="flex items-center gap-4">
                        <a href="{{ url('/') }}" target="_blank"
                            class="w-9 h-9 rounded-lg flex items-center justify-center text-secondary hover:text-primary hover:bg-white/5 transition-all"
                            title="View Site">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </a>
                        <div class="relative" @click.outside="userMenuOpen = false">
                            <button @click="userMenuOpen = !userMenuOpen"
                                class="flex items-center gap-2 px-3 py-1.5 rounded-xl hover:bg-white/5 transition-all">
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-tertiary to-accent flex items-center justify-center text-xs font-bold text-white">A</div>
                                <span x-show="sidebarOpen" class="text-sm font-medium hidden sm:block">Admin</span>
                                <svg x-show="sidebarOpen" class="w-3 h-3 text-secondary hidden sm:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            {{-- Success Flash --}}
            @if (session('success'))
                <div class="mx-8 mt-6 mb-0 px-5 py-3.5 glass rounded-xl flex items-center gap-3 text-sm text-success animate-fade-down" x-data x-init="setTimeout(() => $el.remove(), 4000)">
                    <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    {{ session('success') }}
                </div>
            @endif

            {{-- Page Content --}}
            <div class="flex-1 p-8">
                @yield('content')
            </div>
        </main>
    </div>

    {{-- Delete Modal --}}
    <div x-show="deleteModal !== null" class="fixed inset-0 z-[100] flex items-center justify-center p-4" x-cloak>
        <div class="absolute inset-0 bg-neutral/80 backdrop-blur-sm" @click="deleteModal = null"></div>
        <div class="relative glass rounded-2xl max-w-md w-full p-8 text-center" x-trap.noscroll="deleteModal !== null" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-danger/10 flex items-center justify-center">
                <svg class="w-8 h-8 text-danger animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.082 16.5c-.77.833.192 2.5 1.732 2.5z"/></svg>
            </div>
            <h3 class="text-xl font-display font-bold mb-2">Confirm Delete</h3>
            <p class="text-secondary mb-6">Are you sure you want to delete this item? This action cannot be undone.</p>
            <div class="flex gap-3 justify-center">
                <button @click="deleteModal = null" class="btn-secondary text-sm">Cancel</button>
                <form :action="deleteModal" method="POST" x-ref="deleteForm">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-primary text-sm !bg-gradient-to-r !from-danger !to-danger/80 !shadow-none">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
