<div style="height: 100vh" class="w-64 absolute sm:sticky left-0 top-0 z-20 shadow-lg bg-white dark:bg-gray-800 sm:h-full flex-col justify-between hidden sm:flex rounded-r-3xl">
    <div class="flex flex-col justify-between h-screen overflow-y-auto">
        <div class="px-5 ">
            <div class="my-5 mb-8 px-5 flex flex-col justify-center">
                <div class="flex justify-center">
                    <img src="{{asset('assets/images/logoipsum2.png')}}" class="" alt="" />
                </div>
            </div>
            <ul class="space-y-2">
                <li>
                    <a id="dashboard" href="" class="flex items-center gap-3 p-3 text-sm text-black hover:text-white hover:bg-[#A72121] rounded-lg">
                        <span class="iconify w-5 h-5" data-icon="material-symbols:dashboard-outline-rounded"></span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a id="customer" href="" class="flex items-center gap-3 p-3 text-sm text-black hover:text-white hover:bg-[#A72121] rounded-lg">
                        <span class="iconify w-5 h-5" data-icon="ic:outline-store-mall-directory"></span>
                        Customer
                    </a>
                </li>
            </ul>

        </div>
        {{-- <div class="mb-5 px-5">
            <ul class="pt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                <li>
                    <a id="" href="" class="flex items-center gap-3 p-3 text-sm text-black hover:text-white hover:bg-[#A72121] rounded-lg">
                        <span class="iconify" data-icon="solar:document-text-outline"></span>
                        Logout
                    </a>
                </li>
            </ul>
        </div> --}}
    </div>
</div>


{{-- Mobile --}}
<div class="w-64 h-screen z-40 fixed bg-white dark:bg-gray-800 shadow flex-col justify-between sm:hidden transition duration-150 ease-in-out rounded-r-3xl" id="mobile-nav">
    <button aria-label="toggle sidebar" id="openSideBar" class="h-10 w-10 p-2  bg-white text-black dark:text-white dark:bg-gray-800 absolute border right-0 mt-28 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer rounded " onclick="sidebarHandler(true)">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
        </svg>
    </button>
    <button aria-label="Close sidebar" id="closeSideBar" class=" p-2 h-10 w-10 bg-white dark:text-white dark:bg-gray-800 border absolute right-0 mt-28 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-black" onclick="sidebarHandler(false)">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
        </svg>
    </button>
    <div class="flex flex-col justify-between h-screen overflow-y-auto">
        <div class="px-5 ">
            <div class="my-5 mb-8 px-5 flex flex-col justify-center">
                <a href="" class="flex justify-center">
                    <img src="{{asset('assets/images/logoipsum2.png')}}" class="" alt="" />
                </a>
            </div>
            <!-- Dropdown menu -->
            <ul class="space-y-2">
                <li>
                    <a id="dashboard-mo" href="" class="flex items-center gap-3 p-3 text-sm text-black hover:text-white hover:bg-[#A72121] rounded-lg">
                        <span class="iconify w-5 h-5" data-icon="material-symbols:dashboard-outline-rounded"></span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a id="Customer-mo" href="" class="flex items-center gap-3 p-3 text-sm text-black hover:text-white hover:bg-[#A72121] rounded-lg">
                        <span class="iconify w-5 h-5" data-icon="ic:outline-store-mall-directory"></span>
                        Customer
                    </a>
                </li>
            </ul>

        </div>
        {{-- <div class="mb-5 px-5">
            <ul class="pt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                <li>
                    <a id="" href="" class="flex items-center gap-3 p-3 text-sm text-black hover:text-white hover:bg-[#A72121] rounded-lg">
                        <span class="iconify" data-icon="solar:document-text-outline"></span>
                        Logout
                    </a>
                </li>
            </ul>
        </div> --}}
    </div>
</div>
