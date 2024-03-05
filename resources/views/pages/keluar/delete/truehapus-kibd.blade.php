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
        <div class="p-4 sm:ml-64 flex items-center justify-center mt-36 flex-col">

            <span href="#" class="flex items-center ml-1 p-1 mb-5">
                <img src="{{ asset('img/asset-decorsix.png') }}" alt="" class="h-12">
                <h2 class="font-semibold text-red-950 text-sm lg:text-2xl">Penghapusan Data - KIB D</h2>
            </span>

            <div class="w-full max-w-sm bg-white border border-red-800 rounded-lg shadow-xl dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-center">
                <div class="flex flex-col items-center pb-10 p-2">
                    <h5 class="mb-1 text-2xl font-medium text-gray-900 dark:text-white mt-7">{{ $kibd->nama }}</h5>
                    <span class="text-lg mb-1 text-gray-700 dark:text-gray-400">{{ $kibd->alamat }}</span>
                    <div class="flex mt-2 space-x-3">
                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button">
                            Delete Barang
                            </button>
                    </div>
                </div>
            </div>

            <!-- Modals -->

                <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Yakin Akan Menghapus Data ?</h3>
                                <a href="/truehapus/kibd/action/{{ $kibd->id_kib_d }}">
                                    <button data-modal-hide="popup-modal" type="button" class="text-white mb-2 bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                        Ya, Hapus Data.
                                    </button>
                                </a>
                                <button data-modal-hide="popup-modal" type="button" class="text-gray-500  bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                   Tidak, Cancel Penghapusan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Modals -->

        </div>
        <!-- Content End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'hapus',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

    </body>
</html>
