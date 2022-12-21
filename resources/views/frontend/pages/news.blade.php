@extends('layouts.main')
@section('meta_title', 'Latest News About Tour And Travels')

@section('content')
    <!-- banner -->
   

    <!-- popular destinations -->
    <section class="popular py-28">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-center">
                <p class="bg-emerald-50 px-3 py-1 text-sm rounded-full text-emerald-400 inline-block">Destinations</p>
                <h2 class="text-gray-dark uppercase font-bold md:text-4xl text-3xl my-4">popular destinations</h2>
                <p class="text-gray-500 font-rubik font-light text-md leading-7 lg:w-8/12 w-full mx-auto">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
            </div>
            <div class="slider relative">
                <!-- Slider main container -->
                <div class="swiper discover mt-10">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper py-8">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="navigations flex gap-2 justify-center items-center absolute right-0 top-[-40px] z-20">
                    <div class="prev-slide p-3 rounded-full cursor-pointer bg-emerald-400 group shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-white rotate-[-180deg]">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="next-slide p-3 rounded-full cursor-pointer bg-emerald-400 group shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-white">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- explore -->
    <section class="explore py-20 bg-emerald-50">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-left">
                <!-- <p class="bg-emerald-50 px-3 py-1 text-sm rounded-full text-emerald-400 inline-block">Explore</p> -->
                <h2 class="text-gray-dark uppercase font-bold md:text-4xl text-3xl my-4">More to explore</h2>
                <p class="text-gray-500 font-rubik font-light text-md leading-7 lg:w-8/12 w-full">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
            </div>
            <div class="slider relative">
                <!-- Slider main container -->
                <div class="swiper explore mt-10">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper py-8">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="navigations flex gap-2 justify-center items-center absolute right-0 top-[-40px] z-20">
                    <div class="prev-slide p-3 bg-white rounded-full cursor-pointer hover:bg-emerald-400 group shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-800 group-hover:fill-white rotate-[-180deg]">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="next-slide p-3 bg-white rounded-full cursor-pointer hover:bg-emerald-400 group shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-gray-800 group-hover:fill-white">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- thought -->
    <section class="thought py-36">
        <div class="lg:w-[60%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-center">
                <!-- <h2 class="text-white uppercase font-bold md:text-5xl text-3xl my-4">The journey of a thousand miles begins with a single step</h2> -->
                <h2 class="text-white font-normal lg:text-8xl md:text-7xl text-6xl my-4 font-cursive !leading-10 md:!leading-[4rem]">Take only memories, leave only footprints</h2>
                <p class="text-gray-100 mt-5 font-light tracking-wide">“Travel isn’t always pretty. It isn’t always comfortable. Sometimes it hurts, it even breaks your heart. But that’s okay. The journey changes you; it should change you. It leaves marks on your memory, on your consciousness, on your heart, and on your body.</p>
                <a href="#" class="hoverwhitebtn bg-emerald-400 text-white px-12 py-2 mt-8 inline-block"><span>Book Now</span></a>
            </div>
        </div>
    </section>

    <!-- discover -->
    <section class="discover py-20">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-center">
                <p class="bg-emerald-50 px-3 py-1 text-sm rounded-full text-emerald-400 inline-block">Discover</p>
                <h2 class="text-gray-dark uppercase font-bold md:text-4xl text-3xl my-4">Discover Weekly</h2>
                <p class="text-gray-500 font-rubik font-light text-md leading-7 lg:w-8/12 w-full mx-auto tracking-wide">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
            </div>
            <div class="slider relative">
                <!-- Slider main container -->
                <div class="swiper discover mt-10">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper py-8">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="navigations flex gap-2 justify-center items-center absolute right-0 top-[-40px] z-20">
                    <div class="prev-slide p-3 rounded-full cursor-pointer bg-emerald-400 group shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-white rotate-[-180deg]">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="next-slide p-3 rounded-full cursor-pointer bg-emerald-400 group shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-white">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- discover -->
     <section class="most-visited pb-20">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-center">
                <p class="bg-emerald-50 px-3 py-1 text-sm rounded-full text-emerald-400 inline-block">Most Visited</p>
                <h2 class="text-gray-dark uppercase font-bold md:text-4xl text-3xl my-4">Most Visited Destinations</h2>
                <p class="text-gray-500 font-rubik font-light text-md leading-7 lg:w-8/12 w-full mx-auto tracking-wide">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
            </div>
            <div class="slider relative">
                <!-- Slider main container -->
                <div class="swiper discover mt-10">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper py-8">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[230px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                                <div class="heart absolute top-3 right-3 z-30 bg-emerald-400 p-1.5 cursor-pointer hover:bg-white group rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-gray-700 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="navigations flex gap-2 justify-center items-center absolute right-0 top-[-40px] z-20">
                    <div class="prev-slide p-3 rounded-full cursor-pointer bg-emerald-400 group shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-white rotate-[-180deg]">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="next-slide p-3 rounded-full cursor-pointer bg-emerald-400 group shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-white">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('after-scripts')
    @vite('resources/assets/js/slider.js')
@endpush