<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>
<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-custom-gradient-inv">
    <a href="/keluarmasukdash" class="flex mb-5 justify-center mr-6">
        <img src="{{ asset('img/asset-logoheaderinv.png') }}" class="h-10 mr-1 sm:h-10" alt="FlexF Logo" />
    </a>

    <!-- Section Fitur -->

    <ul class="space-y-2 font-medium">
        <li>
            <a href="/inventarisdash" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-dashboard.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/inventarispemutahiran" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-barang.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Rekap Data</span>
            </a>
        </li>
        <li>
            <a href="/inventarisdata" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-daftarsarpras.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Data Sarpras</span>
            </a>
        </li>
        <li>
            <a href="/insertdata" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-insert.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Insert Data</span>
            </a>
        </li>
        <li>
            <a href="/inventarisrestore" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-arsipdokumen.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Restore Data</span>
            </a>
        </li>
    </ul>

    <!-- Section Fitur -->

    <div class="mt-1 grid grid-cols-3 items-center text-gray-50">
        <hr class="border-gray-50">
        <p class="text-center text-sm">Aplikasi</p>
        <hr class="border-gray-50">
    </div>

    <!-- Section Aplikasi -->

    <ul class="pt-1 mt-1 space-y-2 font-medium">
        <li>
            <a href="/pinjamdash" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-peminjaman.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Peminjaman</span>
            </a>
        </li>
        <li>
            <a href="/keluarmasukarsip" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                    <img src="{{ asset('img/logo-keluarmasuk.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Keluar Masuk</span>
            </a>
        </li>
        <li>
            <a href="/inventarisdash" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ asset('img/logo-inventaris.gif') }}" alt="" class="h-7">
                <span class="flex-1 ml-3 whitespace-nowrap">Inventaris</span>
            </a>
        </li>
    </ul>

    <!-- Section Aplikasi -->

    <!-- Sectio Settings -->

    <ul class="pt-1 mt-6 space-y-2 font-medium">
        <li>
            <a href="/profileadmin/{{ Auth::user()->id_user }}" class="flex items-center ml-1 p-2 text-gray-50 rounded-lg dark:text-white hover:bg-[#93B1A6] dark:hover:bg-[#93B1A6] group">
                <img src="{{ url('/image/' . Auth::user()->profile_image) }}" alt="" class="h-8 rounded-full">
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
