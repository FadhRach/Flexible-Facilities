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
