@extends('layouts.app')

@section('title', 'Page Not Found')
@section('meta_description', 'The page you are looking for could not be found.')

@section('content')
    <div class="min-h-screen flex items-center justify-center py-xxl">
        <div class="container-portfolio text-center">
            <div class="relative inline-block mb-8">
                <div class="orb w-64 h-64 bg-tertiary/10 absolute -top-16 -left-16 animate-float"></div>
                <div class="text-9xl md:text-[12rem] font-display font-bold gradient-text leading-none relative z-10">404</div>
            </div>

            <h2 class="section-title mb-4">
                Page Not <span class="gradient-text">Found</span>
            </h2>

            <p class="section-subtitle mx-auto mb-8 max-w-lg">
                The page you're looking for doesn't exist or has been moved. Let's get you back on track.
            </p>

            <div class="flex flex-wrap gap-4 justify-center">
                <a href="/" class="btn-primary magnetic-btn">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Back to Home
                </a>
                <a href="mailto:hello@example.com" class="btn-secondary magnetic-btn">
                    Report Issue
                </a>
            </div>
        </div>
    </div>
@endsection
