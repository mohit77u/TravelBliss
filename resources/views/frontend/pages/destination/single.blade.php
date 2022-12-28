@extends('layouts.main')
@section('meta_title', $destination->name)

@section('content')
<!-- banner -->
<section class="destination-banner bg-white py-12">
    <div class="lg:w-80% xl:w-[70%] md:w-[90%] w-[95%] mx-auto">
        <h2 class="text-gray-dark font-semibold text-3xl mb-3">{{$destination->name }}</h2>
        <span class="bg-emerald-50 text-emerald-400 rounded-full px-3 py-1 text-[15px]">{{ $state['state'] }}</span>
        <span class="bg-blue-50 text-blue-500 rounded-full px-3 py-1 text-[15px] ml-3">{{ $category[$destination->category] }}</span>
        <div class="py-8 grid lg:grid-cols-2 grid-cols-1 gap-2 lg:h-[450px] lg:max-h-[420px]">
            <div class="slider relative">
                <!-- Slider main container -->
                <div class="swiper rounded image-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper rounded">
                        <!-- Slides -->
                        @foreach ($destination->images as $image)
                        <div class="swiper-slide">
                            <img src="{{ $image }}" alt="{{ $destination->name }}" class="w-full h-[370px] object-cover rounded">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="right-images lg:block hidden">
                <div class="flex flex-wrap justify-between flex-start">
                    <div class="left lg:w-7/12 md:w-8/12 sm:w-7/12 w-full pr-2">
                        <img src="{{ $destination->featured_image }}" alt="{{ $destination->name }}" class="w-full lg:h-[370px] rounded object-cover">
                    </div>
                    <div class="left lg:w-5/12 md:w-4/12 sm:w-5/12 w-full">
                        <img src="{{ $destination->images[1] }}" alt="{{ $destination->name }}" class="w-full pb-2 lg:h-[95px] lg:min-h-[190px] rounded object-cover">
                        <img src="{{ $destination->images[2] }}" alt="{{ $destination->name }}" class="w-full pb-2 lg:h-[95px] lg:min-h-[190px] rounded object-cover">
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
            <div class="left py-8 bg-white shadow rounded lg:w-8/12 w-full my-2">
                <p class="text-gray-dark px-8 font-lighter">{{ $destination->description }}</p>
                <div class="top px-8 bg-blue-50 border-y border-blue-100 py-4 my-6">
                    <h2 class="text-gray-dark text-2xl font-semibold uppercase">{{ $destination->name }}</h2>
                </div>
                <div class="main-content px-8">
                    <div class="destination-content text-gray-dark font-lighter">
                        {!! $destination->content !!}
                    </div>
                    <div class="bottom-note border-l-[6px] border-blue-500 bg-blue-50 py-4 mt-8">
                        <p class="text-blue-500 px-5 font-lighter text-[16px] font-light leading-7">"Travel isn’t always pretty. It isn’t always comfortable. Sometimes it hurts, it even breaks your heart. It leaves marks on your memory, on your consciousness, on your heart, and on your body."</p>
                    </div>
                </div>

            </div>
            <div class="right lg:w-3/12 w-full my-2">
                <div class="sidebar-right-content sticky top-[120px] z-50">
                    <div class="bg-white shadow p-4 rounded">
                        <!-- <h4 class="text-gray-dark text-xl font-bold mb-3">Enquire</h4> -->
                        <p>Want to know more about exciting packages and offers for {{ $destination->name }}. </p>
                        <form action="#" class="my-3">
                            <div class="form-group mb-3">
                                <input type="text" name="name" class="w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500" placeholder="Enter Name">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="phone" class="w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500" placeholder="Enter Phone">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="email" class="w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="state" value="{{ $destination->state }}">
                                <input type="hidden" name="city" value="{{ $destination->city }}">
                                <button type="submit" class="bg-blue-500 w-full block py-2 text-center my-3 text-white">Enquire Now</button>
                            </div>
                        </form>
                    </div>
                    <div class="bg-white shadow p-4 rounded mt-4">
                        <h4 class="text-gray-dark text-xl font-bold mb-3">Share</h4>
                        <div id="social-links">
                            <ul class="flex items-center gap-3">
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->url() }}" class="social-button " id="" title="" rel="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 text-emerald-400 fill-emerald-400 hover:text-blue-500 hover:fill-blue-500">
                                            <path d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.014467 17.065322 19.313017 13.21875 19.898438 L 13.21875 14.384766 L 15.546875 14.384766 L 15.912109 12.019531 L 13.21875 12.019531 L 13.21875 10.726562 C 13.21875 9.7435625 13.538984 8.8710938 14.458984 8.8710938 L 15.935547 8.8710938 L 15.935547 6.8066406 C 15.675547 6.7716406 15.126844 6.6953125 14.089844 6.6953125 C 11.923844 6.6953125 10.654297 7.8393125 10.654297 10.445312 L 10.654297 12.019531 L 8.4277344 12.019531 L 8.4277344 14.384766 L 10.654297 14.384766 L 10.654297 19.878906 C 6.8702905 19.240845 4 15.970237 4 12 C 4 7.5698774 7.5698774 4 12 4 z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?url={{ request()->url() }}" class="social-button " id="" title="" rel="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 text-emerald-400 fill-emerald-400 hover:text-blue-500 hover:fill-blue-500">
                                            <path d="M22,3.999c-0.78,0.463-2.345,1.094-3.265,1.276c-0.027,0.007-0.049,0.016-0.075,0.023c-0.813-0.802-1.927-1.299-3.16-1.299 c-2.485,0-4.5,2.015-4.5,4.5c0,0.131-0.011,0.372,0,0.5c-3.353,0-5.905-1.756-7.735-4c-0.199,0.5-0.286,1.29-0.286,2.032 c0,1.401,1.095,2.777,2.8,3.63c-0.314,0.081-0.66,0.139-1.02,0.139c-0.581,0-1.196-0.153-1.759-0.617c0,0.017,0,0.033,0,0.051 c0,1.958,2.078,3.291,3.926,3.662c-0.375,0.221-1.131,0.243-1.5,0.243c-0.26,0-1.18-0.119-1.426-0.165 c0.514,1.605,2.368,2.507,4.135,2.539c-1.382,1.084-2.341,1.486-5.171,1.486H2C3.788,19.145,6.065,20,8.347,20 C15.777,20,20,14.337,20,8.999c0-0.086-0.002-0.266-0.005-0.447C19.995,8.534,20,8.517,20,8.499c0-0.027-0.008-0.053-0.008-0.08 c-0.003-0.136-0.006-0.263-0.009-0.329c0.79-0.57,1.475-1.281,2.017-2.091c-0.725,0.322-1.503,0.538-2.32,0.636 C20.514,6.135,21.699,4.943,22,3.999z M18,8.999c0,4.08-2.957,8.399-8.466,8.943C10.28,17.413,11,16.662,11,16.662 S8,14,7.775,10.522C8.81,10.838,9.888,10.999,11,10.999h2v-2.5c0-0.001,0-0.001,0-0.001C13.002,7.118,14.12,6,15.5,6 C16.881,6,18,7.119,18,8.5C18,8.5,18,8.92,18,8.999z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/sharing/share-offsite?mini=true&amp;url={{ request()->url() }}&amp;title=Your+share+text+comes+here&amp;summary=" class="social-button " id="" title="" rel="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="w-8 h-8 text-emerald-400 fill-emerald-400 hover:text-blue-500 hover:fill-blue-500">
                                            <path d="M 11.5 6 C 8.4802259 6 6 8.4802259 6 11.5 L 6 36.5 C 6 39.519774 8.4802259 42 11.5 42 L 36.5 42 C 39.519774 42 42 39.519774 42 36.5 L 42 11.5 C 42 8.4802259 39.519774 6 36.5 6 L 11.5 6 z M 11.5 9 L 36.5 9 C 37.898226 9 39 10.101774 39 11.5 L 39 36.5 C 39 37.898226 37.898226 39 36.5 39 L 11.5 39 C 10.101774 39 9 37.898226 9 36.5 L 9 11.5 C 9 10.101774 10.101774 9 11.5 9 z M 15.5 13 A 2.5 2.5 0 0 0 15.5 18 A 2.5 2.5 0 0 0 15.5 13 z M 14 20 C 13.447 20 13 20.447 13 21 L 13 34 C 13 34.553 13.447 35 14 35 L 17 35 C 17.553 35 18 34.553 18 34 L 18 21 C 18 20.447 17.553 20 17 20 L 14 20 z M 21 20 C 20.447 20 20 20.447 20 21 L 20 34 C 20 34.553 20.447 35 21 35 L 24 35 C 24.553 35 25 34.553 25 34 L 25 26.5 C 25 25.121 26.121 24 27.5 24 C 28.879 24 30 25.121 30 26.5 L 30 34 C 30 34.553 30.447 35 31 35 L 34 35 C 34.553 35 35 34.553 35 34 L 35 26 C 35 22.691 32.309 20 29 20 C 27.462 20 26.063 20.586016 25 21.541016 L 25 21 C 25 20.447 24.553 20 24 20 L 21 20 z">
                                            </path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="http://pinterest.com/pin/create/button/?url={{ request()->url() }}" class="social-button " id="" title="" rel=""
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 text-emerald-400 fill-emerald-400 hover:text-blue-500 hover:fill-blue-500">
                                            <path d="M 12 2 C 6.477 2 2 6.477 2 12 C 2 17.523 6.477 22 12 22 C 17.523 22 22 17.523 22 12 C 22 6.477 17.523 2 12 2 z M 12 4 C 16.418 4 20 7.582 20 12 C 20 16.418 16.418 20 12 20 C 11.264382 20 10.555494 19.892969 9.8789062 19.707031 C 10.09172 19.278284 10.282622 18.826454 10.386719 18.425781 C 10.501719 17.985781 10.972656 16.191406 10.972656 16.191406 C 11.278656 16.775406 12.173 17.271484 13.125 17.271484 C 15.958 17.271484 18 14.665734 18 11.427734 C 18 8.3227344 15.467031 6 12.207031 6 C 8.1520313 6 6 8.7215469 6 11.685547 C 6 13.063547 6.73325 14.779172 7.90625 15.326172 C 8.08425 15.409172 8.1797031 15.373172 8.2207031 15.201172 C 8.2527031 15.070172 8.4114219 14.431766 8.4824219 14.134766 C 8.5054219 14.040766 8.4949687 13.958234 8.4179688 13.865234 C 8.0299688 13.394234 7.71875 12.529656 7.71875 11.722656 C 7.71875 9.6496562 9.2879375 7.6445312 11.960938 7.6445312 C 14.268937 7.6445313 15.884766 9.2177969 15.884766 11.466797 C 15.884766 14.007797 14.601641 15.767578 12.931641 15.767578 C 12.009641 15.767578 11.317063 15.006312 11.539062 14.070312 C 11.804063 12.953313 12.318359 11.747406 12.318359 10.941406 C 12.318359 10.220406 11.932859 9.6191406 11.130859 9.6191406 C 10.187859 9.6191406 9.4296875 10.593391 9.4296875 11.900391 C 9.4296875 12.732391 9.7109375 13.294922 9.7109375 13.294922 C 9.7109375 13.294922 8.780375 17.231844 8.609375 17.964844 C 8.5246263 18.326587 8.4963381 18.755144 8.4941406 19.183594 C 5.8357722 17.883113 4 15.15864 4 12 C 4 7.582 7.582 4 12 4 z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://wa.me/?text={{ request()->url() }}" class="social-button " id="" title="" rel="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 text-emerald-400 fill-emerald-400 hover:text-blue-500 hover:fill-blue-500">
                                            <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection

@push('after-scripts')
@vite('resources/assets/js/slider.js')
@endpush