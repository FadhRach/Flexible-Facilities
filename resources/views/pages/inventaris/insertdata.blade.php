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

            <div class="flex items-center justify-center mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <form class="p-3" action="/insertdata/form/action/{{ $kibb->id_barang }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="space-y-12 p-5">
                        <div class="border-b border-gray-900/10 pb-12">

                            <span href="#" class="flex items-center mt-10 justify-center">
                                <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                                <h2 class="font-semibold text-green-950 text-xl ml-2">Verifikasi Data.</h2>
                            </span>

                            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6">

                                <span class="flex items-center">
                                    <img src="{{ asset('img/asset-decorsix.png') }}" alt="" class="h-10">
                                    <h2 class="font-medium text-green-950 text-md mt-1 ml-2">Verifikasi.</h2>
                                </span>

                                <div class="sm:col-span-full">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Barang</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                        <input type="text" name="nama_barang" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibb->nama_barang }}" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">KIB Tujuan</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                        <input type="text" name="inven_brg" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibb->inven_brg }}" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Merk / Type</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                        <input type="text" name="merk_type" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibb->merk_type }}" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nomor Unik</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                        <input type="text" name="nomor_unik" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibb->nomor_unik }}" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kode Barang</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                        <input type="text" name="kode_barang" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kibb->kode_barang }}" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-full justify-center">
                                    <label for="id_ruangan" class="block text-sm font-medium leading-6 text-gray-900">Persetujuan Barang</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                            <select name="disetujui" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                                    <option selected disable class="text-gray-500">Pilih Status Barang</option>
                                                    <option value="disetujui">Di setujui</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-2 p-2">
                        <button type="submit" class="rounded-md bg-green-800 px-4 py-3 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-800">Save</button>
                     </div>
                </form>
            </div>

        </div>
        <!-- Content End -->
    </body>
</html>
