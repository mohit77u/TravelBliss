@extends('layouts.auth')
@section('meta_title', 'Sign In')

@section('content')
<div class="auth flex items-start justify-between bg-white">
    <div class="md:w-6/12 lg:w-4/12 w-full min-h-screen pt-48 bg-white">
        <div class="text-center mb-4">
            <a href="/" class="inline-flex items-center">
                <img src="/images/favicon.png" alt="logo" class="max-w-[50px]">
                <span class="font-medium text-gray-800 text-2xl drop-shadow-xl font-monteserrat">TravelBliss</span>
            </a>
            <!-- <h1 class="text-2xl text-gray-dark font-bold mt-5">Sign up to TravelBliss</h1> -->
        </div>
        <form action="#" method="POST" class=" pt-3 px-20">
            <div class="form-group mb-3">
                <input type="email" name="email" class="w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500" placeholder="Enter Email...">
            </div>
            <div class="form-group mb-3">
                <input type="text" name="password" class="w-full border border-gray-200 py-2.5 px-3 text-md focus:outline-none focus:ring-0 text-gray-500" placeholder="Enter Password...">
            </div>
            <!-- submit btn -->
            <div class="form-group">
                <button type="submit" class="w-full bg-emerald-400 text-white px-5 py-2 mt-4 block border border-transparent hover:border-emerald-400"><span>Sign In</span></button>
            </div>
        </form>
        <div class="py-2 rounded bg-white/5 border border-white/10 mt-6 text-center">
            <p class="text-gray-500 font-rubik font-light text-md leading-7">Don't have an account? <a href='/signup' class="text-blue-500"> Sign up</a></p>
        </div>
        <p class="text-center text-gray-500 font-rubik font-light text-2xl leading-7">or</p>
        <div class="py-2 rounded bg-white/5 border border-white/10 mt-3 text-center">
            <a href="{{ route('google.login') }}" class="text-slate-300 text-sm">
                <img src="/images/google-signin.png" alt="google" class="max-w-[170px] mx-auto">
            </span></a>
        </div>
    </div>
    <div class="md:w-6/12 lg:w-8/12 w-full min-h-screen">
        <img src="/images/cover-1.jpeg" alt="cover" class="w-full h-full  min-h-screen">
    </div>
</div>

@endsection