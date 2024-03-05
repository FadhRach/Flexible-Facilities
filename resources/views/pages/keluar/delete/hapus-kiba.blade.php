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

            <!-- Table Start -->
            <div class="flex items-center justify-center mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <form class="p-3" action="/hapusdata/kiba/store" method="POST">
                    @csrf
                    <div class="space-y-12 p-5">
                      <div class="border-b border-gray-900/10 pb-12">

                        <span href="#" class="lg:flex md:flex items-center mt-10 justify-center hidden">
                            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                            <h2 class="font-semibold text-purple-950 text-xl ml-2">Form Penghapusan KIB A.</h2>
                        </span>

                        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6">

                            <span class="flex items-center">
                                <img src="{{ asset('img/asset-decorfive.png') }}" alt="" class="h-10">
                                <h2 class="font-medium text-purple-950 text-md mt-1 ml-2">Form Tanah.</h2>
                            </span>


                          <!-- Form ini -->

                          <div class="sm:col-span-full">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Sarpras</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <input type="text" name="nama" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{ $kiba->nama }}" readonly>
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kib Barang</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <select name="kib_barang"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                            <option disabled selected class="text-gray-500">Pilih Kib Barang</option>
                                            <option value="kib_a">KIB A</option>
                                    </select>
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Alasan Penghapusan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <input type="text" name="alasan_penghapusan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Alasan Penghapusan">
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kondisi Barang</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <select name="kondisi_barang"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                            <option disabled selected class="text-gray-500">Pilih Kib Barang</option>
                                            <option value="baik">Baik</option>
                                            <option value="rusak">Rusak</option>
                                    </select>
                              </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Penanggung Jawab</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <select name="pj_penghapusan"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                            <option disabled selected class="text-gray-500">Pilih Nama</option>
                                            @foreach ($user as $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}  -  {{ $item->jabatan }}</option>
                                            @endforeach
                                    </select>
                                 </div>
                            </div>
                          </div>

                          <div class="sm:col-span-3">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tanggal Penghapusan</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                <input type="date" name="tanggal_penghapusan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Tanggal">
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6 p-5">
                        @if(!session()->has('success'))
                            <button type="submit" class="rounded-md bg-purple-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-800">Input Form</button>
                        @endif
                        @if(session('success'))
                            <a href="/truehapus/kiba/{{ $kiba->id_kib_a }}" class="font-medium text-gray-50 bg-red-700 p-1.5 rounded-md">
                                Hapus Data
                            </a>
                        @endif
                    </div>
                  </form>

             </div>
            <!-- Table End -->

        </div>
        <!-- Content End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Mengisi Form Data',
                    text: '{{ Session::get('success') }}'
                });
            </script>
        @endif

    </body>
</html>
