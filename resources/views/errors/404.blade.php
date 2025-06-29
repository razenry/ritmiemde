@extends('livewire.layout.error-app', ['title' => 'Page Not Found'])

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center bg-gray-50 px-4">
    <div class="w-full max-w-md text-center">
        <!-- Animated 404 number -->
        <div class="relative mb-8">
            <span class="text-[8rem] md:text-[12rem] font-black text-transparent bg-clip-text bg-gradient-to-br from-purple-500 to-purple-700 opacity-90">404</span>
            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/10 to-purple-700/10 rounded-full blur-xl animate-pulse"></div>
        </div>

        <!-- Main message -->
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-3">Page Not Found</h1>

        <!-- Sub message -->
        <p class="text-gray-500 mb-8 leading-relaxed">
            The page you're looking for doesn't exist or may have been moved.
            <br class="hidden sm:inline">Let's get you back on track.
        </p>

        <!-- Home button with smooth hover effect -->
        <a href="{{ route('home') }}"
           class="inline-block px-6 py-3 bg-gradient-to-r from-purple-600 to-purple-700 text-white font-medium rounded-lg shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            Return to Homepage
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
</div>
@endsection
