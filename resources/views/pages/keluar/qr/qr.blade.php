<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-purple-100">

        <!-- Sidebar Start -->
        <x-sidebar-keluarmasuk />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <div class="mt-4 p-7 grid grid-cols-1 gap-x-6 gap-y-6 lg:grid-cols-4">

                @foreach ($qrc as $item)
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 col-span-1 flex flex-col justify-center items-center">
                        <div class="rounded-t-lg p-6">
                            {!! QrCode::format('svg')->style('round')->backgroundColor(91, 83, 111, 15)->generate($item->nomor_unik) !!}
                        </div>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->nama_barang }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $item->nomor_unik }}</p>
                            <a href="/qrshow/download/{{ $item->nomor_unik }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-purple-700 rounded-lg hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                                Download QR
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
        <!-- Content End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>


    </body>
</html>
