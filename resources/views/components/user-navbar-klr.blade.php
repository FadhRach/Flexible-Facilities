<form class="lg:px-32 lg:pt-6" action="/response/search" method="get">
    <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center sm:py-1 sm:px-1 text-xs py-1 px-2 md:px-2 md:py-1 md:text-sm font-medium text-center text-gray-50 bg-[#5B536F] border border-gray-300 rounded-s-lg focus:ring-2 focus:outline-none focus:ring-[#5B536F]" type="button">
                Filter
                <svg class="w-1.5 h-1.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
        </button>

        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-base font-medium text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                <li>
                    <a href="/response">
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-200">Semua Status</button>
                    </a>
                </li>
                <li>
                    <a href="/response/terima">
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-200">Disetujui</button>
                    </a>
                </li>
                <li>
                    <a href="/response/tolak">
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-200">Tidak Disetujui</button>
                    </a>
                </li>
                <li>
                    <a href="/response/belum">
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-200">Belum Disetujui</button>
                    </a>
                </li>
            </ul>
        </div>

        <div class="relative w-full">
            <input type="search" name="search" id="search-dropdown" class="block p-3 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border border-gray-300 focus:ring-[#5B536F] focus:border-[#5B536F]" placeholder="Cari Data . ." required>
            <button type="submit" class="absolute top-0 end-0 p-2.5 md:px-10 text-sm font-medium h-full text-white bg-[#5B536F] rounded-e-lg border border-[#5B536F] hover:bg-[#5B536F] focus:ring-3 focus:outline-none focus:ring-[#5B536F]">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>
