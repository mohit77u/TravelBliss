<header class="bg-white sticky top-0 left-0 w-full z-[9999] border-b border-gray-100">
    <div class="main-header py-2.5">
        <div class="lg:w-[80%] md:w-[90%] w-[95%] mx-auto">
            <div class="flex items-center">
                <div class="left">
                    <a href="/" class="inline-flex items-center">
                        <img src="/images/favicon.png" alt="logo" class="max-w-[50px]">
                        <span class="font-medium text-gray-800 text-2xl drop-shadow-xl font-monteserrat">TravelBliss</span>
                    </a>
                </div>
                <div class="right ml-auto">
                    <div class="menu hidden lg:block">
                        <ul class="flex items-center space-x-3">
                            <li><a href="{{ route('home.get') }}" class="
                            @if (request()->route()->named('home.get'))
                                text-emerald-400
                            @else
                                text-gray-500
                            @endif 
                            hover:text-gray-800 text-md px-3">Home</a></li>
                            <li><a href="{{ route('about.get') }}" class="
                            @if (request()->route()->named('about.get'))
                                text-emerald-400
                            @else
                                text-gray-500
                            @endif
                             hover:text-gray-800 text-md px-3">About</a></li>
                            <li><a href="{{ route('destinations.get') }}" class="
                            @if (request()->route()->named('destinations.get'))
                                text-emerald-400
                            @else
                                text-gray-500
                            @endif
                             hover:text-gray-800 text-md px-3">Destinations</a></li>
                            <li><a href="{{ route('gallery.get') }}" class="
                            @if (request()->route()->named('gallery.get'))
                                text-emerald-400
                            @else
                                text-gray-500
                            @endif
                             hover:text-gray-800 text-md px-3">Gallery</a></li>
                            <li><a href="{{ route('news.get') }}" class="
                            @if (request()->route()->named('news.get'))
                                text-emerald-400
                            @else
                                text-gray-500
                            @endif
                             hover:text-gray-800 text-md px-3">News</a></li>
                            <li><a href="{{ route('contact.get') }}" class="
                            @if (request()->route()->named('contact.get'))
                                text-emerald-400
                            @else
                                text-gray-500
                            @endif
                             hover:text-gray-800 text-md px-3">Contact us</a></li>
                            <li>
                                <a href="#" class="hoverwhitebtn bg-emerald-400 text-white px-5 py-2 ml-6 inline-block border border-transparent hover:border-emerald-400"><span>Book Now</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-toggle-icon block lg:hidden">
                        <button class="cursor-pointer menu-btn"> 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 fill-gray-700">
                                <path fill-rule="evenodd" d="M3 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 5.25zm0 4.5A.75.75 0 013.75 9h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 9.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>