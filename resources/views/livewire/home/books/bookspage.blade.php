<section>
    <!-- Grid of FlipHTML5 Embeds -->
    <div
        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-4 py-8 px-4 mx-auto max-w-screen-xl w-full">

        @forelse ($books as $book)
            <livewire:components.ui.book-card :data="$book" :key="$book->id" />
        @empty
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm">
                <div class="aspect-w-3 aspect-h-4">
                    <iframe src="https://online.fliphtml5.com/your-embed-code-1/" class="w-full h-64 rounded-t-lg"
                        frameborder="0" allowfullscreen>
                    </iframe>
                </div>
                <div class="p-5">
                    <span
                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm mb-5">Default</span>
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900">One Piece Vol. 102</h5>
                    <p class="mb-3 font-normal text-gray-700">The Wano Country arc reaches its climax in this volume.</p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Read Now
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
        @endforelse


        <!-- Add more cards as needed -->
    </div>
</section>
