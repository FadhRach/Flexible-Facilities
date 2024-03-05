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

            <!-- Table Start -->
            <div class="flex items-center justify-center mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <form class="p-3" action="/kibbinv/edit/action/{{ $kibb->id_barang }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="space-y-12 p-5">
                      <div class="border-b border-gray-900/10 pb-12">

                        <span href="#" class="flex items-center mt-10 justify-center">
                            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                            <h2 class="font-semibold text-green-950 text-xl ml-2">Form Edit Data KIB - B.</h2>
                        </span>

                        <!-- Ini Form -->

                        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6">

                            <span class="flex items-center">
                                <img src="{{ asset('img/asset-decorfive.png') }}" alt="" class="h-10">
                                <h2 class="font-medium text-green-950 text-md mt-1 ml-2">Form Barang.</h2>
                            </span>

                              <div class="sm:col-span-full">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Barang</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="text" name="nama_barang" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Nama Tanah . . ." value="{{ $kibb->nama_barang }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kode Barang</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="number" name="kode_barang" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Kode Tanah . . ." value="{{ $kibb->kode_barang }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Register</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="Number" name="register" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Luas Tanah ( Meter ) . . ." value="{{ $kibb->register }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Ruangan Asal</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="text" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Tahun Tanah . . ." value="{{ $kibb->id_ruangan }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="id_ruangan" class="block text-sm font-medium leading-6 text-gray-900">Tujuan Ruangan</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                        <select required name="id_ruangan"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                                <option selected disable class="text-gray-500">Pilih Status Barang</option>
                                                @foreach ($relkibf as $r)
                                                    <option value="{{ $r->id_ruangan }}" @if ($r->id_ruangan == $kibb->id_ruangan) selected @endif>{{ $r->nama_ruangan }}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Merk / Type</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="text" name="merk_type" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Tahun Tanah . . ." value="{{ $kibb->merk_type }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nomor Unik Barang</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="text" name="nomor_unik" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Tahun Tanah . . ." value="{{ $kibb->nomor_unik }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-full">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tahun</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="Number" name="tahun" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Nilai Tanah . . ." value="{{ $kibb->tahun }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="number" name="harga" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan OPD . . ." value="{{ $kibb->harga }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nilai</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="number" name="nilai" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Sub OPD . . ." value="{{ $kibb->nilai }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Status Barang</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                        <select name="status_barang"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                                <option selected class="text-gray-500">Pilih Status Barang</option>
                                                <option value="baik" @if ($kibb->status_barang == "baik") selected @endif>Baik</option>
                                                <option value="rusak" @if ($kibb->status_barang == "rusak") selected @endif>Rusak</option>
                                        </select>
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">inventaris Barang</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                        <select name="inven_brg"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                                <option selected class="text-gray-500">Pilih KIB</option>
                                                <option value="tidak terdata">tidak terdata</option>
                                                <option value="kib_b" selected>kib_b</option>
                                        </select>
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Akumulasi</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="number" name="akumulasi" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Asal Tanah . . ." value="{{ $kibb->akumulasi }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Keterangan</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                    <input type="text" name="keterangan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Asal Tanah . . ." value="{{ $kibb->keterangan }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Persetujuan</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-800 sm:max-w-md bg-white">
                                        <select name="disetujui"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                                                <option class="text-gray-500">Pilih Persetujuan</option>
                                                <option value="disetujui" @if ($kibb->disetujui == "disetujui") selected @endif>Telah Di Setujui</option>
                                                <option value="belum disetujui"  @if ($kibb->disetujui == "belum disetujui") selected @endif>Belum Di Setujui</option>
                                        </select>
                                  </div>
                                </div>
                              </div>

                          <!-- Ini Form -->

                        </div>
                      </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6 p-5">
                        <button type="submit" class="rounded-md bg-green-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-800">Save</button>
                    </div>
                  </form>
             </div>
            <!-- Table End -->

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

        @if (Session::has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: '{{ Session::get('success') }}'
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

    </body>
</html>
