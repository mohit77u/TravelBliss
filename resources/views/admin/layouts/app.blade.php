<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">

        <title>@yield('meta_title') | TravelBliss</title>
        @vite('resources/assets/sass/style.scss')

	
	<!-- optiomal styles -->
	@stack('styles')
	
</head>

<body class="admin-dashboard bg-slate-50 overflow-x-hidden" id="admin">
	<!-- sidebar -->
	<header class="admin-header">
		@include('admin.layouts.admin_sidebar')
	</header>

	<!-- main content -->
	<section class="main bg-slate-50">
		<div class="md:ml-64 bg-slate-50 admin-content">
			<!-- top menu -->
			<div class="">
				<nav class="md:flex-row md:flex-nowrap md:justify-start flex items-center py-2 px-4 bg-white top-menu">
					<div class="w-full items-center flex justify-between md:flex-nowrap flex-wrap px-4">
						<div class="full-collapse flex items-center">
							<button class="collapse-btn" id="collapse-sidebar">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-slate-700">
									<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
								</svg>
							</button>
						</div>
						<ul class="ml-3 flex-col md:flex-row list-none items-center hidden md:flex gap-3">
							<li class="dropdown relative">
								<button class="flex gap-1 w-full justify-between items-center menu text-sm py-3 text-slate-700" type="button" data-dropdown-toggle="notification">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700">
										<path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
									</svg>

								</button>

								<!-- dropwdown menu -->
								<div class="hidden dropdown-menu bg-white rounded py-1 px-5 min-w-full" id="notification">
									<ul class="text-left">
										<li><a class="block whitespace-nowrap w-full text-xs uppercase py-2 font-medium text-slate-700 hover:text-linkColor" href="#">Profile</a></li>
										<li>
											<a href="{{ route('logout') }}" class="block text-left w-full text-xs uppercase py-2 font-medium text-slate-700 hover:text-linkColor" type="submit">Logout</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="dropdown relative">
								<button class="flex gap-1 w-full justify-between items-center menu text-[15px] py-3 text-slate-700" type="button" data-dropdown-toggle="profile">
									<span>Welcome Admin</span>
									<svg class="dropdown-toggle-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
									</svg>
								</button>

								<!-- dropwdown menu -->
								<div class="hidden dropdown-menu bg-white rounded py-1 px-5 min-w-full" id="profile">
									<ul class="text-left">
										<li><a class="block whitespace-nowrap w-full text-xs uppercase py-2 font-medium text-slate-700 hover:text-linkColor" href="#">Profile</a></li>
										<li>
											<a href="{{ route('logout') }}" class="block text-left w-full text-xs uppercase py-2 font-medium text-slate-700 hover:text-linkColor" type="submit">Logout</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>

			<!-- main content -->
			<div class="main-content relative pb-5-rem">
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

	<!-- optional script -->
	@stack('after-scripts')
	
</body>

</html>