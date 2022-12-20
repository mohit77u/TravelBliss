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
                        <a href="#" class="hoverwhitebtn bg-emerald-400 text-white px-8 py-2 mt-4 inline-block"><span>Read More</span></a>
                        <a href="#" class="hovergreenbtn bg-white text-emerald-400 px-8 py-2 mt-4 inline-block"><span>Book Now</span></a>
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
                                        <div class="custom-dropdown-menu absolute z-[100] left-0 top-full w-full h-auto bg-white border border-gray-200 rounded rounded-t-none hidden" id="state">
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
                                        <div class="custom-dropdown-menu absolute z-[100] left-0 top-full w-full h-auto bg-white border border-gray-200 rounded rounded-t-none hidden" id="cities">
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
    <section class="features py-28">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-center">
                <p class="bg-emerald-50 px-3 py-1 text-sm rounded-full text-emerald-400 inline-block">Destinations</p>
                <h2 class="text-gray-dark uppercase font-bold lg:text-5xl md:text-4xl text-3xl my-4">popular destinations</h2>
                <p class="text-gray-500 font-rubik font-light text-md leading-7 lg:w-8/12 w-full mx-auto">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 mt-10">
                <div class="single-destination group p-5 h-full rounded-xl"> 
                    <div class="single-destination-details relative h-full overflow-hidden rounded-xl">
                        <img src="/images/manali.jpg" alt="manali" class="rounded-xl h-full group-hover:scale-110 transition-all duration-500 w-full object-cover max-h-[470px]">
                        <div class="bottom-details absolute bottom-4 left-0 w-full h-auto px-4">
                            <div class="details bg-white/80 backdrop-blur-xs rounded-xl p-4">
                                <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3">Manali</h4>
                                <p class="text-gray-500 text-sm leading-6 four-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
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
                                <p class="text-gray-500 text-sm leading-6 four-line-truncate">Ladakh is a union territory in the Kashmir region of India. Formerly falling in the state of Jammu & Kashmir, Ladakh was administered a union territory on 31st October 2019.</p>
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
                                <p class="text-gray-500 text-sm leading-6 four-line-truncate">Lying on the western coast, Goa is India's smallest state and unlike any other, known for its endless beaches, stellar nightlife, eclectic seafood, world-heritage listed architecture. Spread across just 3,702 km, Goa lies in the Konkan region.</p>
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

    <!-- latest trips -->
    <section class="latest-trips py-20 bg-emerald-50">
        <div class="lg:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="top-head text-left">
                <!-- <p class="bg-emerald-50 px-3 py-1 text-sm rounded-full text-emerald-400 inline-block">Explore</p> -->
                <h2 class="text-gray-dark uppercase font-bold lg:text-5xl md:text-4xl text-3xl my-4">More to explore</h2>
                <p class="text-gray-500 font-rubik font-light text-md leading-7 lg:w-8/12 w-full">"In the end, we only regret the chances we didn’t take". Once the Travel bug bites there is no known antidote, and I know that I shall be happily infected until the end of my life.</p>
            </div>
            <div class="slider relative">
                <!-- Slider main container -->
                <div class="swiper mt-10">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[275px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[275px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[275px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl">
                                <img src="/images/golden-temple.jpeg" alt="golden-temple" class="w-full h-[275px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3 hover:text-emerald-400 cursor-pointer">Golden Template</h4>
                                    <p class="text-gray-500 text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl">
                                <img src="/images/kapaleeshwarar.jpeg" alt="kapaleeshwarar" class="w-full h-[275px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3 hover:text-emerald-400 cursor-pointer">Kapaleeshwarar</h4>
                                    <p class="text-gray-500 text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-main bg-white rounded-xl">
                                <img src="/images/kerala.jpeg" alt="kerala" class="w-full h-[275px] rounded-b-none rounded-xl">
                                <div class="bottom-details px-4 py-6">
                                    <h4 class="text-gray-dark uppercase font-bold text-2xl mb-3 hover:text-emerald-400 cursor-pointer">Kerala</h4>
                                    <p class="text-gray-500 text-sm leading-6 two-line-truncate">One of the most popular hill stations in Himachal, Manali offers the most magnificent views of the Pir Panjal and the Dhauladhar ranges covered with snow for most parts of the year.</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="navigations flex gap-2 justify-center items-center absolute right-0 top-[-60px] z-20">
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
@endsection

@push('after-scripts')
    @vite('resources/js/slider.js')
@endpush