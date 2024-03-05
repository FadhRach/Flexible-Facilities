<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-green-50">

        <!-- Sidebar Start -->
        <x-user-inv />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <!-- Table Start -->
            <div class="grid grid-cols-1 gap-4 mb-10 mt-10">


                <!-- First Table Start A -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center ml-1 p-1 justify-between">
                        <span class="flex">
                            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                            <h2 class="font-semibold text-green-950 text-sm lg:text-2xl">Data Sarpras - Barang</h2>
                        </span>
                        <a href="/lihatdata/barang" class="ml-28 p-2 bg-custom-inv text-gray-50 shadow-lg rounded-lg text-sm">Download Data</a>
                    </span>

                    @props(['barang'])
                    <x-inv-user-barang :barang="$barang" />

                </div>
                <!-- First Table End A -->

            </div>
            <!-- Table End -->

            {{ $barang->links() }}

            <div class="grid grid-cols-1 gap-4 mb-10 mt-10">


                <!-- First Table Start A -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center ml-1 p-1 justify-between">
                        <span class="flex">
                            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-12">
                            <h2 class="font-semibold text-green-950 text-sm lg:text-2xl">Data Sarpras - Ruangan</h2>
                        </span>
                        <a href="/lihatdata/ruangan" class="ml-28 p-2 bg-custom-inv text-gray-50 shadow-lg rounded-lg text-sm">Download Data</a>
                    </span>

                    @props(['ruangan'])
                    <x-inv-user-ruangan :ruangan="$ruangan" />

                </div>
                <!-- First Table End A -->

            </div>
            {{ $ruangan->links() }}
            <!-- Footer Start -->
            <x-footer-inv />
            <!-- Footer End -->
        </div>
        <!-- Content End -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>
    </body>
</html>
