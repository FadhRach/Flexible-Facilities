<!doctype html>
<html>

<head>
    <x-app />
</head>

<body class="bg-yellow-50">

    <!-- Sidebar Start -->
    <x-user-sidebar />
    <!-- Sidebar End -->

    <!-- Content Start -->
    <div class="p-4 sm:ml-64 ">
        <span href="#" class="flex items-center ml-0.5 pb-5">
            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
            <h2 class="font-semibold text-yellow-950 text-sm lg:text-3xl">Pinjam Tempat </h2>
        </span>

        <!-- Search -->
        <div class="bg-yellow-50 dark:bg-gray-900 pr-2 pb-5"> <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"> <svg
                        class="w-4 h-4 text-[#9C7260] dark:text-[#9C7260]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg> </div>
                <input type="text" id="table-search"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-[#9C7260] rounded-lg w-50 lg:w-80 bg-white focus:ring-yellow-500 focus:border-yellow-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-500 dark:focus:border-yellow-500"
                    placeholder="Cari Sarana">
            </div>
        </div>

        <!-- Card Start -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 mb-10">
            @if(count($ruangan) > 0)
                @foreach($ruangan as $r)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-72">
                        <img class="rounded-t-lg object-cover w-72 h-72" src="{{ url('/image/' . $r->foto_ruang) }}" alt="gambar tempat" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $r->nama_ruangan }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $r->kode_ruangan }}</p>
                            <a href="/pinjamuserform/{{ $r->id_ruangan }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                Pinjam
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class=" text-gray-900 dark:text-white">Tidak ada data yang tersedia.</div>
            @endif
        </div>
        
        <!-- Card End -->

        <!-- Footer Start -->
        <x-footer-pinjam />
        <!-- Footer End -->
    </div>
    <!-- Content End -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
</body>

</html>
