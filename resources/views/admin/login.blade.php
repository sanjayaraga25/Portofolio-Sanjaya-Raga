<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Login — Portfolio</title>
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-[#030712] flex items-start justify-center py-12 px-4">

    <div class="w-full max-w-[28rem] whitespace-normal break-normal">
        {{-- Logo --}}
        <div class="text-center mb-10">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 to-sky-400 flex items-center justify-center mx-auto shadow-lg shadow-purple-500/30">
                <span class="text-xl font-bold text-white">P</span>
            </div>
            <h1 class="text-2xl font-bold text-white mt-5">Welcome back</h1>
            <p class="text-gray-400 text-sm mt-2">Sign in to your admin dashboard</p>
        </div>

        {{-- Form --}}
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            {{-- Email --}}
            <div class="mb-5">
                <label for="email" class="block text-sm font-medium text-gray-400 mb-1.5">Email address</label>
                <input id="email" type="email" name="email" required value="{{ old('email') }}"
                    class="w-full h-12 px-4 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20 transition-all @error('email') border-red-500 @enderror"
                    placeholder="you@example.com">
                @error('email')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div class="mb-5">
                <label for="password" class="block text-sm font-medium text-gray-400 mb-1.5">Password</label>
                <input id="password" type="password" name="password" required
                    class="w-full h-12 px-4 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20 transition-all @error('password') border-red-500 @enderror"
                    placeholder="Enter your password">
                @error('password')
                    <p class="text-red-400 text-xs mt-1.5">{{ $message }}</p>
                @enderror
            </div>

            {{-- Remember + Forgot --}}
            <div class="flex items-center justify-between mb-6">
                <label class="flex items-center gap-2 cursor-pointer group">
                    <input type="checkbox" name="remember" class="w-4 h-4 rounded border-white/20 bg-white/5 accent-purple-500 cursor-pointer">
                    <span class="text-sm text-gray-400 group-hover:text-white transition-colors">Remember me</span>
                </label>
                <a href="#" class="text-sm text-purple-400 hover:text-sky-400 transition-colors">Forgot password?</a>
            </div>

            {{-- Submit --}}
            <button type="submit"
                class="w-full h-12 rounded-xl bg-gradient-to-r from-purple-500 to-sky-400 text-white font-semibold text-sm tracking-wide hover:from-purple-600 hover:to-sky-500 hover:shadow-lg hover:shadow-purple-500/30 transition-all">
                Sign In
            </button>
        </form>

        {{-- Divider --}}
        <div class="flex items-center gap-3 my-7">
            <span class="h-px bg-white/10 flex-1"></span>
            <span class="text-xs text-gray-500 uppercase tracking-wider">or continue with</span>
            <span class="h-px bg-white/10 flex-1"></span>
        </div>

        {{-- Social buttons --}}
        <div class="grid grid-cols-2 gap-3">
            <button type="button"
                class="w-full h-12 rounded-xl bg-white/5 border border-white/10 text-gray-300 text-sm font-medium flex items-center justify-center gap-2 hover:bg-white/10 hover:text-white transition-all"
                onclick="alert('GitHub login coming soon')">
                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                GitHub
            </button>
            <button type="button"
                class="w-full h-12 rounded-xl bg-white/5 border border-white/10 text-gray-300 text-sm font-medium flex items-center justify-center gap-2 hover:bg-white/10 hover:text-white transition-all"
                onclick="alert('Google login coming soon')">
                <svg class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                Google
            </button>
        </div>

        {{-- Footer --}}
        <p class="text-center text-xs text-gray-600 mt-8">
            &copy; {{ date('Y') }} Portfolio Admin. All rights reserved.
        </p>
    </div>
</body>
</html>
