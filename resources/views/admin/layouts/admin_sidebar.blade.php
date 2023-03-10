<nav class="sidebar md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:overflow-x-hidden md:flex-row md:flex-nowrap bg-slate-900 flex flex-wrap items-center justify-between relative md:w-64 z-10 border-r md:border-slate-100">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <!-- menu toggle icon -->
        <button class="cursor-pointer md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" id="toggle-menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-slate-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
            </svg>
        </button>
        <a class="text-center md:pb-2 text-slate-600 mr-0 inline-flex items-center justify-start whitespace-nowrap text-sm font-bold p-4 px-2 logo-link" href="/">
            <img src="/images/favicon.png" alt="logo" class="max-w-[50px]">
            <span class="font-medium text-gray-100 text-xl drop-shadow-xl font-monteserrat">TravelBliss</span>
        </a>
        <!-- mobile user dropdown -->
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="dropdown">
                <button class="text-slate-500 block px-3 py-1" data-dropdown-toggle="user-responsive-dropdown">
                    <div class="items-center flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                    </div>
                </button>
                <div class="hidden bg-white text-base py-2 px-5 list-none text-left rounded min-w-48 absolute right-3 top-[75px] shadow-lg z-50" id="user-responsive-dropdown">
                    <ul class="text-left">
                        <li><a class="block whitespace-nowrap w-full text-xs uppercase py-2 font-bold text-slate-700" href="#">Profile</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="block text-left w-full text-xs uppercase py-2 font-bold text-slate-700" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- menu items main -->
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden py-10" id="mobile-menu">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-slate-800">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="text-center md:pb-2 mr-0 inline-flex whitespace-nowrap text-sm uppercase p-4 px-0" href="/">
                            <img src="/images/favicon.png" alt="logo" class="max-w-[50px]">
                            <span class="font-medium text-slate-800 text-xl drop-shadow-xl font-monteserrat">TravelBliss</span>
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" id="close-mobile-menu">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="md:flex-col md:min-w-full flex flex-col list-none main-sidebar-menu">
                <!-- label heading -->
                <h3 class="pb-1 border-b border-slate-800 text-slate-400 font-medium px-4">Navigations</h3>
                <li class="main-item">
                    <a href="{{ route('dashboard.get')}}" class="group text-[14px] whitespace-nowrap capitalize py-3 px-4 flex w-full items-center text-slate-300 hover:bg-emerald-400 hover:text-white font-monteserrat font-medium @if(request()->route()->named('dashboard.get')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-300 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <!-- <li class="dropdown main-item">
                    <button class="group text-[14px] flex w-full justify-between items-center menu whitespace-nowrap capitalize py-3 hover:bg-emerald-400 hover:text-white px-4 text-slate-300 font-monteserrat font-medium" type="button" data-dropdown-toggle="gallery">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-300 group-hover:text-white mr-3">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                            <span class="title"> Gallery</span>
                        </span>
                        <svg class="dropdown-toggle-icon w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div class="dropdown-menu hidden" id="gallery">
                        <ul>
                            <li><a class="sub-menu block w-full text-[13px] font-monteserrat capitalize py-2 px-12 text-slate-400 font-medium" href="#">Add New</a></li>
                            <li><a class="sub-menu block w-full text-[13px] font-monteserrat capitalize py-2 px-12 text-slate-400 font-medium" href="#">All Gallery</a></li>
                        </ul>
                    </div>
                </li> -->
                <li class="main-item">
                    <a href="{{ route('admin.destinations.create')}}" class="group text-[14px] whitespace-nowrap capitalize py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-300 font-monteserrat font-medium @if(request()->is('admin/destination*')) active @endif">
                        <svg class="w-5 h-5 fill-slate-100 group-hover:fill-white mr-3" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490.201 490.201" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 490.201 490.201">
                            <g>
                                <path d="m467.999,22.057c-46.8-41.9-98.1-14.6-112.5,4.2l-34.4,40.6-280.3-31.3c-2.5-0.5-6.9,0.2-8.3,2.1l-29.2,29.2c-4.6,4.2-4.7,13.3 2.1,16.7l204.2,106.2-64.6,76-110.5-15.6c-3.1,0-6.2,1-8.3,3.1l-18.8,18.7c-5.3,5.6-3.8,13.4 2.1,16.7l88.6,43.7c-2.1,15.6 3.1,32.3 15.6,44.8 11.5,12.5 28.1,17.7 44.8,15.6l43.8,88.5c3.7,8.8 12.5,6.3 16.7,2.1l18.8-18.7c2.1-2.1 3.1-5.2 3.1-8.3l-15.6-110.4 76-64.5 105.3,203.1c4,6.8 11.1,7.4 16.7,2.1l29.2-29.2c2.1-2.1 3.1-5.2 3.1-8.3l-31.3-280.2 39.5-35.4c18.7-12.9 46.4-68.1 4.2-111.5zm-17.8,93.7l-43.8,39.6c-2.1,3.2-3.1,6.3-3.1,9.4l31.3,280.2-15.6,15.6-105.2-201c-4-6.4-11.4-6.2-16.8-2.2l-90.7,76c-2.1,2.1-3.1,6.3-3.1,9.4l15.6,110.4-5.2,5.2-40.6-82.3c-2.1-4.2-7.3-6.2-12.5-5.2-11.4,3.2-25,0-33.3-8.3-9.3-9.3-12.5-21.8-8.3-33.3 2.1-5.2-1-10.4-5.2-12.5l-82.3-40.6 5.2-5.2 110.4,15.6c3.1,1.1 7.3,0 9.4-3.1l76.1-90.6c2.1-2.1 3.9-11.1-3.1-15.6l-201.1-105.2 14.6-19.8 280.1,31.2c4.2,1.1 7.3-1 9.4-3.1l39.6-43.7c8.4-11.4 46.8-34.2 81.3-2.1 35,32.5 6.8,76-3.1,81.2z"/>
                            </g>
                        </svg>
                        <span class="title">Destinations</span>
                    </a>
                </li>
                <li class="main-item">
                    <a href="{{ route('admin.destinations.create')}}" class="group text-[14px] whitespace-nowrap capitalize py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-300 font-monteserrat font-medium @if(request()->is('admin/packages*')) active @endif">
                        <svg class="w-5 h-5 fill-slate-300 group-hover:fill-white mr-3" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.32 485.32" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 485.32 485.32">
                            <g>
                                <path d="m480.76,79.05c-0.6-0.2-235-78.3-235-78.3-2.1-1-4.1-1-6.2,0l-231.9,76.3c-5.8,2.4-7.2,7.4-7.2,10.3v313.3c0,5.2 3.1,9.3 7.2,10.3l229,73.2c3.5,1.3 7.3,1.8 12.1,0l228.9-73.2c4.1-2.1 7.2-6.2 7.2-10.3v-313.3c5.68434e-14-3.1-1-6.2-4.1-8.3zm-238.1-56.7l198.9,63.9-75.1,24.1-196-64.5 72.2-23.5zm-10.3,438l-211.3-67v-291.4l211.3,67.6v290.8zm10.3-310.2l-198.9-62.8 93.7-30.6 195.3,64.5-90.1,28.9zm10.3,310.2v-291.6l105.1-33.3v32.3l20.6-8.8v-30l85.5-27v290.4h0.1l-211.3,68z"/>
                            </g>
                        </svg>
                        <span class="title">Packages</span>
                    </a>
                </li>
                <li class="main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap capitalize py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-300 font-monteserrat font-medium @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-300 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <span class="title">News</span>
                    </a>
                </li>
                <li class="main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap capitalize py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-300 font-monteserrat font-medium @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-300 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <span class="title">Bookings</span>
                    </a>
                </li>
               
                <li class="main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap capitalize py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-300 font-monteserrat font-medium @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-300 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span class="title">Contacts</span>
                    </a>
                </li>
                <li class="main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap capitalize py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-300 font-monteserrat font-medium @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-300 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                        </svg>
                        <span class="title">Users</span>
                    </a>
                </li>
                <!-- label heading -->
                <h3 class="mt-5 pb-1 border-b border-slate-800 text-slate-400 font-medium px-4">Meta Tags</h3>
                <li class="main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap capitalize py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-300 font-monteserrat font-medium @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-300 group-hover:text-white mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                        </svg>
                        <span class="title">Meta Tags</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>