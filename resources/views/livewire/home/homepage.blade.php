
<div class="container">
    <section class="bg-white">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-1 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7 space-y-2">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                    Unlimited Access to Asian Digital Comics & Novels</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                    Dive into thousands of manga, manhwa, comics, donghua, and light novels with our revolutionary reading experience! Enjoy authentic page-flipping immersion powered by FlipHTML5 technology. All your favorite Asian stories in one premium platform.</p>
                <a href="{{ route('books') }}"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300">
                    Start Reading Now
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="{{ route('books') }}"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-purple-100 focus:ring-4 focus:ring-gray-100">
                    Explore Exclusive Collection
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('img/books.png') }}" alt="Digital comics collection">
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div
            class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
            <img class="w-full" src="{{ asset('img/libs2.png') }}"
                alt="Ritmi reading experience">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">
                    Immerse Yourself in Asian Storytelling
                </h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg">
                    From iconic Japanese manga to captivating Korean manhwa, epic Chinese donghua to heartwarming light novels - all at your fingertips! Ritmi delivers an unforgettable reading journey designed for true Asian content enthusiasts. Enjoy anytime, on any device!</p>
                <a href="{{ route('books') }}"
                    class="inline-flex items-center text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Begin Your Reading Journey
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-purple-700">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Our Creative Team</h2>
                <p class="font-light lg:mb-16 sm:text-xl text-white">Meet the innovators behind Ritmi's revolutionary reading experience that transports you into unlimited Asian storytelling worlds!</p>
            </div>
            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
                <div class="flex flex-col sm:flex-row items-center rounded-lg shadow bg-purple-800 border-gray-700 h-full">
                    <a href="#" class="flex-shrink-0">
                        <img class="object-cover w-52 h-w-52 rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('img/razen.jpeg') }}"
                            alt="Razenry Avatar">
                    </a>
                    <div class="p-5 flex-1 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-xl font-bold tracking-tight text-white">
                                <a href="#">Razenry</a>
                            </h3>
                            <span class="text-white">Fullstack Developer & Database Architect</span>
                            <p class="mt-3 mb-4 font-light text-white">Backend specialist ensuring Ritmi operates seamlessly at scale. Architect of our robust reading infrastructure.</p>
                        </div>
                        <ul class="flex space-x-4 sm:mt-0">
                            <!-- Social icons remain unchanged -->
                        </ul>
                    </div>
                </div>
                <div class="flex flex-col sm:flex-row items-center rounded-lg shadow bg-purple-800 border-gray-700 h-full">
                    <a href="#" class="flex-shrink-0">
                        <img class="object-cover w-52 h-w-52 rounded-lg sm:rounded-none sm:rounded-l-lg"
                            src="{{ asset('img/shin.jpg') }}"
                            alt="ShydrangeaShin Avatar">
                    </a>
                    <div class="p-5 flex-1 flex flex-col justify-between h-full">
                        <div>
                            <h3 class="text-xl font-bold tracking-tight text-white">
                                <a href="#">ShydrangeaShin</a>
                            </h3>
                            <span class="text-white">Fullstack Developer & Artist</span>
                            <p class="mt-3 mb-4 font-light text-white">Frontend and UI/UX designer creating Ritmi's stunning visual experiences. Artist creating beautiful illustrations for our website.</p>
                        </div>
                        <ul class="flex space-x-4 sm:mt-0">
                            <!-- Social icons remain unchanged -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">
                    Premium Features for Ultimate Reading Enjoyment
                </h2>
                <p class="text-gray-500 sm:text-xl">
                    Ritmi combines cutting-edge technology with innovative features designed specifically for Asian comics and novel enthusiasts.
                </p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-purple-100 lg:h-12 lg:w-12">
                        📖
                    </div>
                    <h3 class="mb-2 text-xl font-bold">FlipHTML5 Technology</h3>
                    <p class="text-gray-500">
                        Authentic page-flipping experience that mimics physical books. Perfect immersion for comics and novels.
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-purple-100 lg:h-12 lg:w-12">
                        🌙
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Dark Mode <span class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-purple-600 bg-purple-200 ml-2">Coming Soon</span></h3>
                    <p class="text-gray-500">
                        Comfortable night reading with eye-friendly dark themes. Launching soon!
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-purple-100 lg:h-12 lg:w-12">
                        🔖
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Bookmark & Resume <span class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-purple-600 bg-purple-200 ml-2">Coming Soon</span></h3>
                    <p class="text-gray-500">
                        Continue right where you left off. Never lose your reading progress! Coming soon.
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-purple-100 lg:h-12 lg:w-12">
                        🧠
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Smart Recommendations <span class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-purple-600 bg-purple-200 ml-2">Coming Soon</span></h3>
                    <p class="text-gray-500">
                        Discover new stories tailored to your taste. Personalized reading experience! Launching soon.
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-purple-100 lg:h-12 lg:w-12">
                        📱
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Mobile First Design</h3>
                    <p class="text-gray-500">
                        Perfect reading on all devices. Optimized for smartphones, tablets and desktops.
                    </p>
                </div>
                <div>
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-purple-100 lg:h-12 lg:w-12">
                        🗂️
                    </div>
                    <h3 class="mb-2 text-xl font-bold">Genre & Language Filters <span class="text-xs font-semibold inline-block py-1 px-2 rounded-full text-purple-600 bg-purple-200 ml-2">Coming Soon</span></h3>
                    <p class="text-gray-500">
                        Find preferred content instantly. Browse by genre and language! Coming soon.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
