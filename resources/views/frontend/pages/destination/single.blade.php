@extends('layouts.main')
@section('meta_title',  $destination->name)

@section('content')
    <!-- banner -->
    <section class="destination-banner bg-white py-12">
        <div class="lg:w-80% xl:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <h2 class="text-gray-dark font-semibold text-3xl mb-3">{{$destination->name  }}</h2>
            <span class="bg-emerald-50 text-emerald-400 rounded-full px-3 py-1 text-[15px]">{{ $state['state'] }}</span>
            <div class="py-8 grid lg:grid-cols-2 grid-cols-1 gap-6 lg:h-[450px] lg:max-h-[450px]">
                <div class="slider relative">
                    <!-- Slider main container -->
                    <div class="swiper image-slider">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper ">
                            <!-- Slides -->
                            @foreach ($destination->images as $image)
                            <div class="swiper-slide">
                                <img src="{{ $image }}" alt="{{ $destination->name }}" class="w-full h-[400px] object-cover">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- If we need navigation buttons
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
                    </div> -->
                </div>
                <div class="right-images lg:block hidden">
                    <div class="flex flex-wrap justify-between flex-start">
                        <div class="left lg:w-7/12 md:w-8/12 sm:w-7/12 w-full pr-2">
                            <img src="{{ $destination->images[1] }}" alt="{{ $destination->name }}" class="w-full lg:h-[400px] object-cover">
                        </div>
                        <div class="left lg:w-5/12 md:w-4/12 sm:w-5/12 w-full">
                            <img src="{{ $destination->images[2] }}" alt="{{ $destination->name }}" class="w-full pb-2 lg:h-[204px] lg:min-h-[200px] object-cover">
                            <img src="{{ $destination->images[3] }}" alt="{{ $destination->name }}" class="w-full pb-2 lg:h-[204px] lg:min-h-[200px] object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- main content section -->
    <section class="content bg-gray-100 py-6">
        <div class="lg:w-80% xl:w-[70%] md:w-[90%] w-[95%] mx-auto">
            <div class="flex flex-wrap justify-between">
                <div class="left px-6 py-8 bg-white lg:w-8/12 w-full">
                    <p class="text-slate-600 font-lighter">{{ $destination->description }}</p>
                    <div class="destination-content my-6 text-slate-600 font-lighter">
                        {!! $destination->content !!}
                    </div>
                </div>
            </div>

        </div>
    </section>
   
@endsection

@push('after-scripts')
    @vite('resources/assets/js/slider.js')
@endpush