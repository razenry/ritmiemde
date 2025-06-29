<nav class="bg-white border-gray-200" aria-label="Main navigation">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logo.png') }}" class="h-14" alt="Ritmi Logo">
        </a>
        <!-- Tombol Mobile -->
        <button data-collapse-toggle="navbar-dropdown" type="button" class="...">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <!-- Menu Desktop -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="...">
                <li>
                    <a href="{{ route('home') }}" class="...">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="...">
                        Categories <svg class="w-2.5 h-2.5 ms-2.5" ...></svg>
                    </button>
                    <div id="dropdownNavbar" class="...">
                        <ul class="py-2 text-sm" aria-labelledby="dropdownNavbarLink">
                            @forelse ($categories as $category)
                                <li>
                                    <a href="{{ route('category.show', $category->slug) }}" class="...">
                                        {{ $category->nama }}
                                    </a>
                                </li>
                            @empty
                                <li><a href="{{ route('categories') }}" class="...">View All</a></li>
                            @endforelse
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('books') }}" class="...">All Books</a>
                </li>
                <li>
                    <a href="{{ route('support') }}" class="...">Customer Support</a>
                </li>
            </ul>
        </div>
    </div>
</nav>