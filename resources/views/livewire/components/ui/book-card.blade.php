<div class="w-full bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 group">
    <!-- Book Cover with Hover Effect -->
    <div class="relative aspect-[3/4] overflow-hidden">
        <img src="{{ asset('storage/' . $data->cover) }}" alt="{{ $data->judul }}" 
             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        
        <!-- Category Badge -->
        <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-blue-800 text-xs font-medium px-2.5 py-1 rounded-full shadow-sm">
            {{ $data->kategori->nama ?? 'General' }}
        </span>
        
        <!-- Overlay for FlipHTML5 Preview -->
        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <a href="{{ route('books.view', $data->slug) }}" class="inline-flex items-center px-4 py-2 bg-white rounded-full shadow-md hover:bg-blue-50 transition-colors">
                <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                <span class="text-sm font-medium">Quick Preview</span>
            </a>
        </div>
    </div>

    <!-- Content -->
    <div class="p-5">
        <h3 class="mb-2 text-lg font-bold text-gray-900 line-clamp-2" title="{{ $data->judul }}">
            {{ $data->judul }}
        </h3>
        
        <p class="mb-4 text-gray-600 text-sm line-clamp-3">
            {{ $data->sinopsis }}
        </p>
        
        <div class="flex justify-between items-center">
            <span class="text-xs text-gray-500">
                {{ $data->pengarang }}
            </span>
            
            <a href="{{ route('books.view', $data->slug) }}" 
               class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors focus:ring-2 focus:ring-blue-300 focus:outline-none">
                Read
                <svg class="w-3.5 h-3.5 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>