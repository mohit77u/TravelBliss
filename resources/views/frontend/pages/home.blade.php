@extends('layouts.main')
@section('meta_title', 'TravelBliss Let’s Go Make Some Memories')

@section('content')
    <!-- banner -->
    <section class="banner bg-banner-bg py-28">
        <div class="lg:w-[80%] md:w-[90%] w-[95%] mx-auto">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-4">
                <div class="banner-content">
                    <h1 class="text-white lg:text-6xl md:text-5xl text-4xl font-semibold text-left mt-3 drop-shadow-md capitalize leading-[48px] md:leading-[70px]">Let’s go make some memories</h1>
                    <h6 class="text-gray-200 font-rubik font-light text-md text-left my-4 leading-7 drop-shadow-md lg:w-9/12 w-full">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</h6>
                    <ul class="my-3">
                        <li class="flex items-center gap-2 py-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-white text-emerald-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <span class="text-gray-200 font-rubik font-light drop-shadow-md">A Destination For The New Millennium.</span>
                        </li>
                        <li class="flex items-center gap-2 py-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-white text-emerald-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-200 font-rubik font-light drop-shadow-md">Beautiful place to visit.</span>
                        </li>
                        <li class="flex items-center gap-2 py-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 fill-white text-emerald-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-200 font-rubik font-light drop-shadow-md">Journey to explore the world.</span>
                        </li>
                    </ul>
                    <div class="flex items-center gap-4">
                        <a href="#" class="hoverwhitebtn bg-emerald-400 text-white px-12 py-2 mt-4 inline-block"><span>Read More</span></a>
                        <a href="#" class="hovergreenbtn bg-white text-emerald-400 px-12 py-2 mt-4 inline-block"><span>Book Now</span></a>
                    </div>
                </div>

                <!-- banner form -->
                <div class="flex justify-center items-center">
                    <div class="form bg-white py-8 px-6 lg:max-w-[500px] lg:min-w-[500px] w-full mt-5 lg:mt-0">
                        <h3 class="text-gray-dark text-center uppercase mb-1 font-bold text-2xl">Enquire Now</h3>
                        <p class="text-gray-500 text-sm mt-0 text-center font-light">Dare to live the life you’ve always wanted.</p>
                        <form class="pt-7" action="{{ route('search.post') }}" method="POST">
                            @csrf
                            <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 mb-3">
                                <div class="form-group">
                                    <input type="text" name="name" class="w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500" placeholder="Enter Name...">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500" placeholder="Enter Phone...">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="email" class="w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500" placeholder="Enter Email...">
                            </div>
                            <div class="grid sm:grid-cols-2 grid-cols-1 gap-4 mb-3">
                                <!-- states -->
                                <div class="form-group">
                                    <div class="custom-dropdown relative">
                                        <input type="text" value="" name="state" class="state-field hidden">
                                        <button type="button" class="relative custom-dropdown-btn flex items-center justify-between w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500">
                                           <span class="truncate max-w-[150px] text-left block">Select State</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="arrow absolute right-2 top-3 transition-all duration-300 fill-gray-500 w-4 h-4" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </button>
                                        <div class="custom-dropdown-menu absolute z-[100] left-0 top-[110%] w-full h-auto bg-white border border-gray-200 rounded rounded-t-none hidden" id="state">
                                            <div class="max-h-[250px] overflow-y-auto">
                                                <ul>
                                                    <li class="dropdown-item block py-2 bg-white border-b border-gray-200 px-3 text-gray-500 cursor-pointer hover:bg-green-50" data-value="">Select State</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- cities -->
                                <div class="form-group">
                                    <div class="custom-dropdown relative">
                                        <input type="text" value="" name="city" class="city-field hidden">
                                        <button type="button" class="custom-dropdown-btn flex items-center justify-between w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500">
                                           <span class="truncate max-w-[150px] text-left block">Select City</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="arrow transition-all duration-300 fill-gray-500 w-4 h-4" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </button>
                                        <div class="custom-dropdown-menu absolute z-[100] left-0 top-[110%] w-full h-auto bg-white border border-gray-200 rounded rounded-t-none hidden" id="cities">
                                            <div class="max-h-[250px] overflow-y-auto">
                                                <ul>
                                                    <li class="dropdown-item block py-2 bg-white border-b border-gray-200 px-3 text-gray-500 cursor-pointer hover:bg-green-50" data-value="">Select City</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="place" class="w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500" placeholder="Enter Place (Optional)">
                            </div>
                            <!-- submit btn -->
                            <div class="form-group">
                                <button type="submit" class="hoverwhitebtn w-full bg-emerald-400 text-white px-5 py-2 mt-4 block border border-transparent hover:border-emerald-400"><span>Enquire Now</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- popular destinations -->
    <section class="popular py-28">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-center">
                <p class="bg-emerald-50 px-3 py-1 text-sm rounded-full text-emerald-400 inline-block">Destinations</p>
                <h2 class="text-gray-dark uppercase font-bold md:text-4xl text-3xl my-4">popular destinations</h2>
                <p class="text-gray-500 font-rubik font-light text-md leading-7 lg:w-8/12 w-full mx-auto">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mt-10">
                <div class="single-destination group p-5 h-full rounded-xl"> 
                    <div class="single-destination-details relative h-full overflow-hidden rounded-xl">
                        <img src="/images/manali.jpg" alt="manali" class="rounded-xl h-full group-hover:scale-110 transition-all duration-500 w-full object-cover max-h-[470px]">
                        <div class="bottom-details absolute bottom-4 left-0 w-full h-auto px-4">
                            <div class="details bg-white/80 backdrop-blur-xs rounded-xl p-4">
                                <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3">Manali</h4>
                                <p class="text-gray-500 font-light tracking-wide text-sm leading-6 four-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                <div class="rating flex gap-1 mt-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-destination p-5 h-full rounded-xl ">
                    <div class="single-destination-details group relative h-full overflow-hidden rounded-xl">
                        <img src="/images/ladakh.jpg" alt="ladakh" class="rounded-xl h-full group-hover:scale-110 transition-all duration-500 w-full object-cover max-h-[470px]">
                        <div class="bottom-details absolute bottom-4 left-0 w-full h-auto px-4">
                            <div class="details bg-white/80 backdrop-blur-xs rounded-xl p-4">
                                <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3">Leh Ladakh</h4>
                                <p class="text-gray-500 font-light tracking-wide text-sm leading-6 four-line-truncate">Ladakh is a union territory in the Kashmir region of India. Formerly falling in the state of Jammu & Kashmir, Ladakh was administered a union territory on 31st October 2019.</p>
                                <div class="rating flex gap-1 mt-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-destination p-5 h-full rounded-xl">
                    <div class="single-destination-details group relative h-full overflow-hidden rounded-xl">
                        <img src="/images/goa.jpg" alt="goa" class="rounded-xl h-full group-hover:scale-110 transition-all duration-500 w-full object-cover max-h-[470px]">
                        <div class="bottom-details absolute bottom-4 left-0 w-full h-auto px-4">
                            <div class="details bg-white/80 backdrop-blur-xs rounded-xl p-4">
                                <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3">Goa</h4>
                                <p class="text-gray-500 font-light tracking-wide text-sm leading-6 four-line-truncate">Lying on the western coast, Goa is India's smallest state and unlike any other, known for its endless beaches, stellar nightlife, eclectic seafood, world-heritage listed architecture. Spread across just 3,702 km, Goa lies in the Konkan region.</p>
                                <div class="rating flex gap-1 mt-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 fill-yellow-500">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>

                                </div>
                            </div>
                        </div>
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

    <!-- gallery -->
    <section class="gallery py-28">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-center">
                <p class="bg-emerald-50 px-3 py-1 text-sm rounded-full text-emerald-400 inline-block">Gallery</p>
                <h2 class="text-gray-dark uppercase font-bold md:text-4xl text-3xl my-4">PHOTO'S FROM TRAVELLERS</h2>
                <p class="text-gray-500 font-rubik font-light text-md leading-7 lg:w-8/12 w-full mx-auto">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
                <div class="images mt-12 grid lg:grid-cols-3 grid-cols-1 gap-5">
                    <div class="gallery-image h-full">
                        <img src="/images/gallery/gallery-3.jpeg" alt="gallery-1" class="w-full rounded-xl">
                        <img src="/images/gallery/gallery-2.jpeg" alt="gallery-2" class="w-full rounded-xl mt-3">
                    </div>
                    <div class="gallery-image h-full">
                        <img src="/images/gallery/gallery-1.jpeg" alt="gallery-1" class="w-full rounded-xl">
                    </div>
                    <div class="gallery-image h-full">
                        <img src="/images/gallery/gallery-6.jpeg" alt="gallery-1" class="w-full rounded-xl">
                        <img src="/images/gallery/gallery-4.jpeg" alt="gallery-1" class="w-full rounded-xl mt-3">
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

    <!-- features -->
    <section class="features py-24 bg-emerald-50">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="grid lg:grid-cols-3 md-grid-cols-2 grid-cols-1 gap-8">
                <div class="feature p-5 bg-white rounded-xl shadow-xl">
                    <div class="icon p-4 rounded-full bg-emerald-50 inline-block my-3">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.88" class="w-5 h-5 fill-emerald-400" xml:space="preserve"><g>
                            <path class="st0" d="M16.63,105.75c0.01-4.03,2.3-7.97,6.03-12.38L1.09,79.73c-1.36-0.59-1.33-1.42-0.54-2.4l4.57-3.9
                                c0.83-0.51,1.71-0.73,2.66-0.47l26.62,4.5l22.18-24.02L4.8,18.41c-1.31-0.77-1.42-1.64-0.07-2.65l7.47-5.96l67.5,18.97L99.64,7.45
                                c6.69-5.79,13.19-8.38,18.18-7.15c2.75,0.68,3.72,1.5,4.57,4.08c1.65,5.06-0.91,11.86-6.96,18.86L94.11,43.18l18.97,67.5
                                l-5.96,7.47c-1.01,1.34-1.88,1.23-2.65-0.07L69.43,66.31L45.41,88.48l4.5,26.62c0.26,0.94,0.05,1.82-0.47,2.66l-3.9,4.57
                                c-0.97,0.79-1.81,0.82-2.4-0.54l-13.64-21.57c-4.43,3.74-8.37,6.03-12.42,6.03C16.71,106.24,16.63,106.11,16.63,105.75
                                L16.63,105.75z"/>
                            </g>
                        </svg>
                    </div>
                    <h5 class="text-md uppercase text-gray-dark mb-2 text-md font-bold">Air Tickets</h5>
                    <p class="text-gray-500 font-rubik font-light text-md leading-7 w-full">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
                </div>
                <div class="feature p-5 bg-white rounded-xl shadow-xl">
                    <div class="icon p-4 rounded-full bg-emerald-50 inline-block my-3">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 105.01" class="w-6 h-6 fill-emerald-400"><title>like</title><path class="cls-1" d="M4,43.36H32.37a4,4,0,0,1,4,4V101a4,4,0,0,1-4,4H4a4,4,0,0,1-4-4V47.39a4,4,0,0,1,4-4ZM62.16,6.3A7.36,7.36,0,0,1,66.23.65,8.14,8.14,0,0,1,71.79.34a15.36,15.36,0,0,1,5.3,2.71A26.21,26.21,0,0,1,86.81,21.9a57.41,57.41,0,0,1-.12,8.35q-.25,2.94-.76,6.15h20.2a21.58,21.58,0,0,1,9.1,2.33,14.7,14.7,0,0,1,5.6,4.92,12.55,12.55,0,0,1,2,7.51,18.1,18.1,0,0,1-1.82,6.93,21.82,21.82,0,0,1,.54,8.38,9.7,9.7,0,0,1-2.78,5.68,25.22,25.22,0,0,1-1.4,9.43,19.81,19.81,0,0,1-4.5,7,28.37,28.37,0,0,1-.9,5A17.3,17.3,0,0,1,109.5,99h0c-3.43,4.84-6.17,4.73-10.51,4.55-.61,0-1.26,0-2.26,0H57.39a19.08,19.08,0,0,1-8.86-1.78,21.13,21.13,0,0,1-7-6.06L41,94V48.15l2-.53c5.08-1.37,9.07-5.71,12.16-10.9a75.8,75.8,0,0,0,7-16.64V6.82l.06-.52Zm6.32-.78a2.15,2.15,0,0,0-1,1.57V20.46l-.12.77a82.31,82.31,0,0,1-7.61,18.24C56.4,45.09,52,49.91,46.37,52.14V93.07A14.6,14.6,0,0,0,50.93,97a14.14,14.14,0,0,0,6.46,1.21H96.73c.7,0,1.61,0,2.47.08,2.57.1,4.2.17,5.94-2.29h0a12.34,12.34,0,0,0,1.71-3.74,24.86,24.86,0,0,0,.79-5l.83-1.77a14.89,14.89,0,0,0,3.9-5.75,21.18,21.18,0,0,0,1-8.67l-.1-1.6,1.36-.84a4.09,4.09,0,0,0,1.64-3,17.44,17.44,0,0,0-.68-7.12l.21-1.94A13.12,13.12,0,0,0,117.51,51a7.29,7.29,0,0,0-1.17-4.38,9.53,9.53,0,0,0-3.59-3.12A16,16,0,0,0,106,41.77H79.51l.6-3.18a85.93,85.93,0,0,0,1.22-8.79,51,51,0,0,0,.13-7.55,20.76,20.76,0,0,0-7.62-15,10.15,10.15,0,0,0-3.41-1.79,3,3,0,0,0-2,0ZM22.64,85.3a5.13,5.13,0,1,1-5.13,5.13,5.13,5.13,0,0,1,5.13-5.13Z"/></svg>
                    </div>
                    <h5 class="text-md uppercase text-gray-dark mb-2 text-md font-bold">Tour Guide</h5>
                    <p class="text-gray-500 font-rubik font-light text-md leading-7 w-full">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
                </div>
                <div class="feature p-5 bg-white rounded-xl shadow-xl">
                    <div class="icon p-4 rounded-full bg-emerald-50 inline-block my-3">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="w-6 h-6 fill-emerald-400" viewBox="0 0 122.88 78.63"  xml:space="preserve"><g><path class="st0" d="M3.36,0h7.3c1.85,0,3.36,1.56,3.36,3.36v43.77h37.33L61.99,9.69h41.85c10.47,0,19.04,8.59,19.04,19.04v19.04 h-0.02c0.01,0.12,0.02,0.24,0.02,0.37v30.49h-14.02V64.32H14.02v13.66H0V3.36C0,1.51,1.51,0,3.36,0L3.36,0z M35.44,10.37 c8.62,0,15.61,6.99,15.61,15.61c0,8.62-6.99,15.61-15.61,15.61c-8.62,0-15.61-6.99-15.61-15.61 C19.83,17.36,26.82,10.37,35.44,10.37L35.44,10.37z"/></g></svg>
                    </div>
                    <h5 class="text-md uppercase text-gray-dark mb-2 text-md font-bold">Hotel Bookings</h5>
                    <p class="text-gray-500 font-rubik font-light text-md leading-7 w-full">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- news -->
    <section class="news py-20">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-center">
                <p class="bg-emerald-50 px-3 py-1 text-sm rounded-full text-emerald-400 inline-block">News</p>
                <h2 class="text-gray-dark uppercase font-bold md:text-4xl text-3xl my-4">Latest News</h2>
                <p class="text-gray-500 font-rubik font-light text-md leading-7 lg:w-8/12 w-full mx-auto tracking-wide">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
            </div>
            <div class="slider relative">
                <!-- Slider main container -->
                <div class="swiper news mt-10">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper py-8">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[250px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[250px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[250px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[250px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[250px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl shadow-lg">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[250px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 font-light tracking-wide text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
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