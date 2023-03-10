<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">

        <title>@yield('meta_title') | TravelBliss</title>
        @vite('resources/assets/sass/style.scss')
		<!-- livewire styles -->
		@livewireStyles

	
	<!-- optiomal styles -->
	@stack('styles')
	
</head>

<body class="admin-dashboard bg-gray-200 overflow-x-hidden" id="admin">
	<!-- sidebar -->
	<header class="admin-header">
		@include('admin.layouts.admin_sidebar')
	</header>

	<!-- main content -->
	<section class="main bg-gray-200">
		<div class="md:ml-64 bg-gray-200 admin-content">
			<!-- top menu -->
			<div class="">
				<nav class="md:flex-row md:flex-nowrap md:justify-start md:flex hidden items-center py-4 px-4 bg-white border-b md:border-slate-100 top-menu">
					<div class="w-full items-center flex justify-between md:flex-nowrap flex-wrap px-4">
						<div class="full-collapse flex items-center">
							<button class="collapse-btn" id="collapse-sidebar">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-slate-700">
									<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
								</svg>
							</button>
						</div>
						<ul class="ml-3 flex-col md:flex-row list-none items-center hidden md:flex gap-5">
							<li class="dropdown relative">
								<button class="flex gap-1 w-full justify-between items-center menu text-sm text-slate-700" type="button" data-dropdown-toggle="bookings">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700">
										<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
									</svg>
								</button>
								
								<!-- dropwdown menu -->
								<div class="hidden dropdown-menu bg-white rounded py-1 min-w-[300px] absolute right-0 top-[46px] shadow-lg z-50" id="bookings">
									<h3 class="text-md capitalize px-5 py-2 font-medium text-slate-700 pb-1 border-b border-gray-100">Bookings</h3>
									<div class="">
										<a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100">
											<img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
											<p class="text-gray-600 text-sm mx-2">
												<span class="font-medium" href="#">Sara Salah</span> replied on the <span class="font-medium text-blue-500" href="#">Upload Image</span> artical . 2m
											</p>
										</a>
										<a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100">
											<img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="avatar">
											<p class="text-gray-600 text-sm mx-2">
												<span class="font-medium" href="#">Slick Net</span> start following you . 45m
											</p>
										</a>
										<a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100">
											<img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
											<p class="text-gray-600 text-sm mx-2">
												<span class="font-medium" href="#">Jane Doe</span> Like Your reply on <span class="font-medium text-blue-500" href="#">Test with TDD</span> artical . 1h
											</p>
										</a>
										<a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100">
											<img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80" alt="avatar">
											<p class="text-gray-600 text-sm mx-2">
												<span class="font-medium" href="#">Abigail Bennett</span> start following you . 3h
											</p>
										</a>
									</div>
									<a href="#" class="block text-blue-500 text-center font-medium py-2 border-t text-sm border-gray-100">See all bookings</a>
								</div>
							</li>
							<li class="dropdown relative">
								<button class="flex gap-1 w-full justify-between items-center menu text-sm text-slate-700" type="button" data-dropdown-toggle="notification">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700">
										<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
									</svg>
								</button>
								
								<!-- dropwdown menu -->
								<div class="hidden dropdown-menu bg-white rounded py-1 min-w-[300px] absolute right-0 top-[46px] shadow-lg z-50" id="notification">
									<div class="top px-5 py-2 flex items-center justify-between font-medium pb-1 border-b border-gray-100">
										<h3 class="text-md capitalize text-slate-700">Notifications</h3>
										<a href="#" class="text-sm capitalize text-blue-500">Clear All</a>
									</div>
									<div class="">
										<a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100">
											<img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
											<p class="text-gray-600 text-sm mx-2">
												<span class="font-medium" href="#">Sara Salah</span> replied on the <span class="font-medium text-blue-500" href="#">Upload Image</span> artical . 2m
											</p>
										</a>
										<a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100">
											<img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="avatar">
											<p class="text-gray-600 text-sm mx-2">
												<span class="font-medium" href="#">Slick Net</span> start following you . 45m
											</p>
										</a>
										<a href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100">
											<img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" alt="avatar">
											<p class="text-gray-600 text-sm mx-2">
												<span class="font-medium" href="#">Jane Doe</span> Like Your reply on <span class="font-medium text-blue-500" href="#">Test with TDD</span> artical . 1h
											</p>
										</a>
										<a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100">
											<img class="h-8 w-8 rounded-full object-cover mx-1" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80" alt="avatar">
											<p class="text-gray-600 text-sm mx-2">
												<span class="font-medium" href="#">Abigail Bennett</span> start following you . 3h
											</p>
										</a>
									</div>
									<a href="#" class="block text-sm text-blue-500 text-center font-medium py-2 border-t border-gray-100">See all notifications</a>
								</div>
							</li>
							<li class="dropdown relative">
								<button class="flex gap-1 w-full font-monteserrat justify-between items-center menu text-[14px] text-slate-700" type="button" data-dropdown-toggle="profile">
									<span>Welcome Admin</span>
									<svg class="dropdown-toggle-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
									</svg>
								</button>

								<!-- dropwdown menu -->
								<div class="hidden dropdown-menu bg-white rounded py-1 px-5 min-w-full absolute right-0 top-[46px] shadow-lg z-50" id="profile">
									<ul class="text-left">
										<li><a class="block whitespace-nowrap w-full text-xs uppercase py-2 font-medium text-slate-700" href="#">Profile</a></li>
										<li>
											<a href="{{ route('logout') }}" class="block text-left w-full text-xs uppercase py-2 font-medium text-slate-700" type="submit">Logout</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>

			<!-- main content -->
			<div class="main-content h-full relative pb-5-rem">
				@yield('content')
			</div>
		</div>
	</section>


	<!-- toast -->
	@include('toast.toast')

	<!-- optional script -->
	@stack('before-scripts')

	<!-- main scripts -->
	@vite('resources/assets/js/main.js')

	<!-- livewire scripts -->
    @livewireScripts

	<!-- optional script -->
	@stack('after-scripts')
	
</body>

</html>