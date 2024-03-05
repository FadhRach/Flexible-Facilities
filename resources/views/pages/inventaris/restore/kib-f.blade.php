<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-green-50">

        <!-- Sidebar Start -->
        <x-sidebar-inv />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <x-navbar-restore />

            <span href="#" class="flex items-center p-1 justify-center mr-6">
                <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-24">
                <h2 class="font-semibold text-green-800 text-2xl">Data KIB F.</h2>
            </span>
            <span class="flex item-center p-3 justify-center">
                <a href="/restoref/restore" class="text-sm text-white dark:text-white p-2 bg-green-700 font-semibold rounded-md mr-3 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300">
                    Restore All
                </a>
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-sm text-white dark:text-white p-2 bg-red-600 font-semibold rounded-md hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300" type="button">
                    Delete All
                </button>
            </span>

            <!-- Table Kib Start -->
            <div class="grid grid-cols-1 gap-4 mb-8">

                <!-- Table Kib 1 Start -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center p-3 ml-3">
                        <h2 class="font-semibold text-green-800 text-2xl">Restore KIB F.</h2>
                    </span>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Nama Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kode Ruangan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Foto Ruangan
                                </th>
                                <th scope="col" class="px-1 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kibf as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->nama_ruangan }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $item->kode_ruangan }}
                                </td>
                                <td class="px-6 py-4">
                                    <img style="object-fit: cover; width: 100px; height: 100px;"
                                    src="{{ url('/image/' . $item->foto_ruang) }}">
                                </td>
                                <td class="px-1 py-4 text-right flex flex-auto">
                                    <a href="/restoref/restore/{{ $item->id_ruangan }}" class="text-white dark:text-white p-1.5 bg-green-700 font-semibold rounded-md mr-3 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-green-300">
                                        Restore
                                    </a>
                                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-white dark:text-white p-1.5 bg-red-600 font-semibold rounded-md hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300" type="button">
                                        Delete
                                    </button>
                                </td>
                            </tr>


                            <!-- Modals start -->

                            <!-- Modal Delete all -->
                            <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-6 text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                            <h3 class="mb-5 text-base font-normal text-gray-500 dark:text-gray-400">Apakah yakin, akan menghapus semua data permanen ?</h3>
                                            <a href="/restoref/delete" class="text-sm text-white dark:text-white bg-red-600 font-semibold rounded-md hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 px-5 py-2.5 mr-2">
                                                Ya, Hapus semua
                                            </a>
                                            <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">tidak, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Delete all -->

                            <!-- Modal Delete ID -->
                            <div id="authentication-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-6 text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                            <h3 class="mb-5 text-base font-normal text-gray-500 dark:text-gray-400">Apakah yakin, akan menghapus data ini secara permanen ?</h3>
                                            <a href="/restoref/delete/{{ $item->id_ruangan }}" class="text-sm text-white dark:text-white bg-red-600 font-semibold rounded-md hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 px-5 py-2.5 mr-2">
                                                Ya, Hapus Data ini
                                            </a>
                                            <button data-modal-hide="authentication-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">tidak, cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Delete ID -->

                            <!-- Modlas end -->

                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Table Kib 1 End -->

            </div>
            <!-- Table Kib End -->

            <!-- Footer Start -->
            <x-footer-inv />
            <!-- Footer End -->

        </div>
        <!-- Content End -->
    </body>
</html>
