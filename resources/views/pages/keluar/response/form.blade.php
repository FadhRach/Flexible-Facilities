<!doctype html>
<html>
    <head>
        <x-app />
    </head>

    <body class="bg-purple-50">

        <!-- Sidebar Start -->
        <x-sidebar-keluarmasuk />
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="p-4 sm:ml-64">

            <nav class="flex p-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                  <li class="inline-flex items-center">
                    <a href="/keluarmasukarsip" class="inline-flex items-center text-sm font-semibold text-gray-700 hover:text-purple-600 dark:text-gray-400 dark:hover:text-white">
                      <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                      </svg>
                      Dashboard
                    </a>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <a href="/keluarmasukarsip/form/{{ $peng->id_pengajuan }}" class="ms-1 text-sm font-semibold text-gary-700 hover:text-purple-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Verifikasi</a>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                      </svg>
                      <a href="/keluarmasukarsip/input/{{ $peng->id_pengajuan }}" class="ms-1 text-sm font-semibold text-purple-700 hover:text-purple-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Input Data</a>
                    </div>
                  </li>
                </ol>
            </nav>

            <div class="flex items-center justify-center mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <form class="p-3" action="/keluarmasukarsip/input/action" method="POST">
                    @csrf
                    <div class="space-y-12 p-5">
                        <div class="border-b border-gray-900/10 pb-12">

                            <span href="#" class="flex items-center mt-10 justify-center">
                                <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                                <h2 class="font-semibold text-purple-950 text-xl ml-2">Verifikasi Data.</h2>
                            </span>

                            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6">

                                <span class="flex items-center">
                                    <img src="{{ asset('img/asset-decorsix.png') }}" alt="" class="h-10">
                                    <h2 class="font-medium text-purple-950 text-md mt-1 ml-2">Verifikasi.</h2>
                                </span>

                                <div class="sm:col-span-full">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Barang</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="text" name="nama_barang" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Nama Tanah . . ." value="{{ $peng->nama }}">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kode Barang</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="number" name="kode_barang" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Kode Tanah . . .">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Register</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="Number" name="register" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Luas Tanah ( Meter ) . . .">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="id_ruangan" class="block text-sm font-medium leading-6 text-gray-900">ID Ruangan</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                            <select name="id_ruangan"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                    <option selected disable class="text-gray-500">Pilih Status Barang</option>
                                                    @foreach ($relkibf as $r)
                                                    <option value="{{ $r->id_ruangan }}">{{ $r->nama_ruangan }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Merk / Type</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="text" name="merk_type" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Tahun Tanah . . .">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nomor Unik Barang</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="text" name="nomor_unik" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Tahun Tanah . . .">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-full">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tahun</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="Number" name="tahun" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Nilai Tanah . . .">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="number" name="harga" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan OPD . . .">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nilai</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="number" name="nilai" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Sub OPD . . .">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Status Barang</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                            <select name="status_barang"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                    <option selected class="text-gray-500">Pilih Status Barang</option>
                                                    <option value="baik">Baik</option>
                                                    <option value="rusak">Rusak</option>
                                            </select>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">inventaris Barang</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                            <select name="inven_brg"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                    <option selected class="text-gray-500">Pilih KIB</option>
                                                    <option value="tidak terdata">tidak terdata</option>
                                                    <option value="kib_b">KIB B</option>
                                                    <option value="kib_e">KIB E</option>
                                            </select>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Akumulasi</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="number" name="akumulasi" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Asal Tanah . . .">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-span-full">
                                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Keterangan</label>
                                    <div class="mt-2">
                                      <textarea name="keterangan" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-purple-800 sm:text-sm sm:leading-6" placeholder="Masukkan Deskripsi . . ."></textarea>
                                    </div>
                                  </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-2 p-2">
                        <button type="submit" class="rounded-md bg-purple-800 px-4 py-3 text-sm font-semibold text-white shadow-sm hover:bg-purple-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-800">Save</button>
                     </div>
                </form>
            </div>

        </div>
        <!-- Content End -->
    </body>
</html>
