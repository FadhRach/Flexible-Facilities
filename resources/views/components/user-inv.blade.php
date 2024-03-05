<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-custom-gradient-inv">
    <a href="/lihatdata" class="flex mb-5 justify-center mr-6">
        <img src="{{ asset('img/asset-logoheaderinv.png') }}" class="h-10 mr-1 sm:h-10" alt="FlexF Logo" />
    </a>

    <!-- Section Fitur -->

    <ul class="space-y-2 font-medium">
        <li>
            <a href="/lihatdata" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-barang.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespacea-nowrap">Data Sarpras</span>
            </a>
        </li>
    </ul>

    <!-- Section Fitur -->

    <div class="mt-12 grid grid-cols-3 items-center text-gray-50">
        <hr class="border-gray-50">
        <p class="text-center text-sm">Settings</p>
        <hr class="border-gray-50">
    </div>

    <!-- Section Settings -->

    <ul class="pt-1 mt-10 space-y-2 font-medium">

        <li>
            <a href="/pinjamuser" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-peminjaman.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Peminjaman Sarpas.</span>
            </a>
        </li>
        <li>
            <a href="/response" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                    <img src="{{ asset('img/logo-keluarmasuk.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Permohonan Sarpras.</span>
            </a>
        </li>
        <li>
            <a href="/lihatdata" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                    <img src="{{ asset('img/logo-arsipdokumen.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Lihat Data.</span>
            </a>
        </li>
        <li>
            <a href="/profile/{{ Auth::user()->id_user }}" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/asset-profile.png') }}" alt="" class="h-8 rounded-full">
                <span class="flex-1 ml-3 whitespace-nowrap">Profile</span>
            </a>
        </li>
        <li>
            <a href="/" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-logout.png') }}" alt="" class="h-4 ml-2">
                <span class="flex-1 ml-3 whitespace-nowrap">Logout.</span>
            </a>
        </li>
     </ul>

     <!-- Sectio Settings -->

    </div>
</aside>
