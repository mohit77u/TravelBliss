<nav class="sidebar md:left-0 md:block md:fixed md:top-0 md:bottom-0 overflow-y-auto overflow-x-hidden md:flex-row md:flex-nowrap shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" id="toggle-menu">
            <i class="fas fa-bars"></i>
        </button>
        <a class="md:inline-flex text-left md:pb-2 text-slate-600 mr-0 inline-flex items-center whitespace-nowrap text-sm font-bold p-4 px-2 logo-link" href="#">
            <img src="/images/favicon.png" alt="logo" class="max-w-[50px]">
            <span class="font-medium text-gray-800 text-2xl drop-shadow-xl font-monteserrat">TravelBliss</span>
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block">
                <button class="text-slate-500 block" data-dropdown-toggle="user-responsive-dropdown">
                    <div class="items-center flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </button>
                <div class="hidden bg-white text-base z-50 float-left py-2 px-5 list-none text-left rounded shadow-lg min-w-48" id="user-responsive-dropdown">
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
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden py-10" id="mobile-menu">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-slate-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                    <a class="md:block text-left md:pb-2 text-slate-600 mr-0 inline-block whitespace-nowrap text-sm uppercase p-4 px-0" href="#">
                        <img class="mx-auto logo" src="/images/favicon.png" alt="Logo">
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
                <li class="items-center main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap uppercase py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-700 @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                        </svg>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="items-center dropdown main-item">
                    <button class="group text-[14px] flex w-full justify-between items-center menu whitespace-nowrap text-sm uppercase py-3 hover:bg-emerald-400 hover:text-white px-4 text-slate-700" type="button" data-dropdown-toggle="gallery">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700 group-hover:text-white mr-3">
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
                            <li><a class="sub-menu block w-full text-xs uppercase py-3 text-slate-700" href="#">Add New</a></li>
                            <li><a class="sub-menu block w-full text-xs uppercase py-3 text-slate-700" href="#">All Gallery</a></li>
                        </ul>
                    </div>
                </li>
                <li class="items-center main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap uppercase py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-700 @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                        </svg>
                        <span class="title">Destinations</span>
                    </a>
                </li>
                <li class="items-center main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap uppercase py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-700 @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        <span class="title">News</span>
                    </a>
                </li>
                <li class="items-center main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap uppercase py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-700 @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                        <span class="title">Bookings</span>
                    </a>
                </li>
                <li class="items-center main-item">
                    <a href="" class="group text-[14px] whitespace-nowrap uppercase py-3 px-4 flex w-full items-center hover:bg-emerald-400 hover:text-white text-slate-700 @if(request()->route()->named('admin.dashboard')) active @endif">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-slate-700 group-hover:text-white mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span class="title">Contacts</span>
                    </a>
                </li>
                
                {{--
                    <li class="items-center dropdown main-item">
                        <button class="flex w-full justify-between items-center menu whitespace-nowrap text-xs uppercase py-4 font-bold text-slate-700" type="button" data-dropdown-toggle="menu_utility_providers">
                            <span>
                                <i class="fas fa-fingerprint w-5 h-5 leading-5 text-center text-xs text-slate-300"></i><span class="title"> {{ trans('messages.menu_utility_providers') }}</span>
                            </span>
                            <svg class="dropdown-toggle-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div class="dropdown-menu" id="menu_utility_providers">
                            <ul>
                                <li><a class="sub-menu block w-full text-xs uppercase py-3 font-bold text-slate-700 @if(request()->is('admin/utility-providers*')) active @endif" href="{{ route('admin.utility_providers.index') }}">{{ trans('messages.menu_utility_providers') }}</a></li>
                                <li><a class="sub-menu block w-full text-xs uppercase py-3 font-bold text-slate-700 @if(request()->is('admin/utility-provider-plans*')) active @endif" href="{{ route('admin.utility_provider_plans.index') }}">{{ trans('messages.menu_utility_provider_plan') }}</a></li>
                            </ul>
                        </div>
                    </li>
                --}}

            </ul>
        </div>
    </div>
</nav>