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

            <div class="flex justify-center mt-16 lg:mt-36">
                <span href="#" class="flex items-center">
                    <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-24">
                    <h2 class="font-semibold text-purple-950 text-4xl ml-2">Barang Keluar.</h2>
                </span>
            </div>

            <div class="flex justify-center mt-10 mb-10">

                    <div class="lg:w-9/12 w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8">
                        <h5 class="mb-2 text-3xl font-bold text-purple-950">Pilih Fitur Mengeluarkan Barang.</h5>
                        <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Melakukan Pemutahiran ? atau Penghapusan Sarpras ?</p>
                        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                            <a href="/keluarmasukbarangkeluar" class="w-full sm:w-auto bg-purple-900 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 ">
                                <span class="mr-3">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/xtnsvhie.json"
                                        trigger="loop"
                                        delay="1500"
                                        colors="primary:#ffffff"
                                        style="width:30px;height:30px">
                                    </lord-icon>
                                </span>
                                <div class="text-left rtl:text-right">
                                    <div class="mb-1 text-xs">Mutahirkan Data</div>
                                    <div class="-mt-1 font-sans text-sm font-semibold">Dari KIB.</div>
                                </div>
                            </a>
                            <a href="/kibahapus" class="w-full sm:w-auto bg-purple-900 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 ">
                                <span class="mr-3">
                                    <lord-icon
                                        src="https://cdn.lordicon.com/wpyrrmcq.json"
                                        trigger="loop"
                                        delay="1500"
                                        colors="primary:#ffffff"
                                        style="width:30px;height:30px">
                                    </lord-icon>
                                </span>
                                <div class="text-left rtl:text-right">
                                    <div class="mb-1 text-xs">Hapus Data</div>
                                    <div class="-mt-1 font-sans text-sm font-semibold">Dari KIB.</div>
                                </div>
                            </a>
                        </div>
                    </div>

            </div>

            <x-footer />
        </div>
        <!-- Content End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>
        <script src="https://cdn.lordicon.com/lordicon.js"></script>

    </body>
</html>
