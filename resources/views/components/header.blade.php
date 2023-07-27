    <!-- sidenav  -->
    <aside
        class="max-w-62.5 ease-nav-brand z-40 fixed inset-y-0 my-0 ml-0 md:block hidden w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-0 border-r-2 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-blue-600 hover:bg-gray-200" href="/dashboard">
                <img src="{{ asset('img/sekawan-logo.png') }}"
                    class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
                    alt="logo-sekawan" />
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Sekawan Dashboard</span>
            </a>
        </div>
        <div class="items-center hidden w-auto max-h-screen overflow-auto h-sidenav grow basis-full md:block">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 hover:shadow-soft-xl text-gray-900 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg hover:bg-gray-200 px-4 hover:font-semibold hover:text-blue-700 transition-colors"
                        href="/dashboard">
                        <div
                            class="bg-gradient-to-tl from-blue-700 to-blue-600 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-layer-group text-gray-100"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class=" py-2.7 hover:shadow-soft-xl text-gray-900 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg hover:bg-gray-200 px-4 hover:font-semibold hover:text-slate-700 transition-colors"
                        href="/kendaraan">
                        <div
                            class="bg-gradient-to-tl from-blue-700 to-blue-600 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-bars-progress text-gray-100"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Kendaraan</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 hover:shadow-soft-xltext-gray-900 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg hover:bg-gray-200 px-4 hover:font-semibold hover:text-slate-700 transition-colors"
                        href="/logactivity">
                        <div
                            class="bg-gradient-to-tl from-blue-700 to-blue-600 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-file-pen text-gray-100"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Log Aktivitas</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 hover:shadow-soft-xl text-gray-900 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg hover:bg-gray-200 px-4 hover:font-semibold hover:text-slate-700 transition-colors"
                        href="/profile">
                        <div
                            class="bg-gradient-to-tl from-blue-700 to-blue-600 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <i class="fa-solid fa-user text-gray-100"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- end sidenav -->

    <!-- Navbar -->
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen transition-all duration-200">
        <div class="h-0.5 mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent"></div>
        <nav
            class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 lg:flex-nowrap lg:justify-start">
            <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
                <nav>
                    @auth
                        <h6 class="mb-0 font-bold text-2xl mt-4 capitalize text-gray-700">Welcome, <?php $result = auth()->user()->name; ?>
                            {{ strtok($result, ' ') }}</h6>
                    @endauth
                </nav>
                <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
                    <div class="flex items-center md:ml-auto md:pr-4">
                    </div>
                    <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
                        <li class="flex items-center pl-4">
                            <form action="/logout" method="post">
                                @csrf
                                <button
                                    class="block px-0 py-2 font-semibold transition-all ease-nav-brand text-md text-gray-700 hover:text-blue-600"><i
                                        class="fa-solid fa-right-from-bracket sm-mr-1"></i>
                                    <span class="hidden sm:inline">Keluar</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end Navbar -->
    </main>

    <!-- Navbar Bottom (Only show in small screen) Start -->
    <div class="fixed bg-white bottom-0 left-0 z-50 w-full h-16 bg-base_00 border-t border-base_80 xl:hidden">
        <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-sm">
            <a href="/dashboard" class="inline-flex flex-col items-center justify-center px-5 hover:bg-blue-600 group">
                <i class="fa-solid fa-layer-group w-6 h-6 mb-1 text-blue-600 group-hover:text-gray-100"></i>
                <span class="text-sm text-blue-600 group-hover:text-gray-100">Dashboard</span>
            </a>
            <a href="/kendaraan" class="inline-flex flex-col items-center justify-center px-5 hover:bg-blue-600 group">
                <i class="fa-solid fa-bars-progress w-6 h-6 mb-1 text-blue-600 group-hover:text-gray-100"></i>
                <span class="text-sm text-blue-600 group-hover:text-gray-100">Kendaraan</span>
            </a>
            <a href="/logactivity"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-blue-600 group">
                <i class="fa-solid fa-file-pen w-6 h-6 mb-1 text-blue-600 group-hover:text-gray-100"></i>
                <span class="text-sm text-blue-600 group-hover:text-gray-100">Log</span>
            </a>
            <a href="/profile" class="inline-flex flex-col items-center justify-center px-5 hover:bg-blue-600 group">
                <i class="fa-solid fa-file-pen w-6 h-6 mb-1 text-blue-600 group-hover:text-gray-100"></i>
                <span class="text-sm text-blue-600 group-hover:text-gray-100">Profile</span>
            </a>
        </div>
    </div>
    <!-- Navbar Bottom (Only show in small screen) End -->
