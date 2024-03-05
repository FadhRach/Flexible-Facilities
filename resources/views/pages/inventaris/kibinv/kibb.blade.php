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

            <x-navbar-inv />

            <span href="#" class="flex items-center p-1 justify-center mr-6">
                <img src="{{ asset('img/asset-decorsix.png') }}" alt="" class="h-24">
                <h2 class="font-semibold text-green-800 text-2xl">Data KIB B.</h2>
            </span>

            <!-- Table Kib Start -->
            <div class="grid grid-cols-1 gap-4 mb-8">

                <!-- Table Kib 1 Start -->
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <span href="#" class="flex items-center justify-between p-3 ml-3">
                        <h2 class="font-semibold text-green-800 text-2xl">Data Barang - B.</h2>
                        <a href="/kibbinv/export" class="ml-28 p-2 bg-custom-inv text-gray-50 shadow-lg rounded-lg text-sm">Download Data</a>
                    </span>

                    @props(['kibb'])
                    <x-export-kibb :kibb="$kibb" />

                </div>
                <!-- Table Kib 1 End -->

            </div>
            <!-- Table Kib End -->
            {{ $kibb->links() }}
            <!-- Footer Start -->
            <x-footer-inv />
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        @if (Session::has('successres'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses',
                    text: '{{ Session::get('successres') }}'
                });
            </script>
        @endif

        @if (Session::has('successdel'))
            <script>
                Swal.fire({
                    icon: 'warning',
                    title: 'berhasil',
                    text: '{{ Session::get('successdel') }}'
                });
            </script>
        @endif

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('successres') }}'
                });
            </script>
        @endif

    </body>
</html>
