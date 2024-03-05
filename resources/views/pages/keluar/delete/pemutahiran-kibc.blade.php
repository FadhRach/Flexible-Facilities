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
                <form class="p-3" action="/pemutahiran/action/kibc/{{ $kibc->id_kib_c }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="space-y-12 p-5">
                      <div class="border-b border-gray-900/10 pb-12">

                        <span href="#" class="lg:flex md:flex items-center mt-10 justify-center hidden">
                            <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                            <h2 class="font-semibold text-purple-950 text-xl ml-2">Form Pemutahiran KIB C.</h2>
                        </span>

                        <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-6">

                            <span class="flex items-center">
                                <img src="{{ asset('img/asset-decorfive.png') }}" alt="" class="h-10">
                                <h2 class="font-medium text-purple-950 text-md mt-1 ml-2">F Bangunan.</h2>
                            </span>

                            <!-- Form ini -->

                             <div class="sm:col-span-full">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Bangunan</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="text" name="nama" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Nama Bangunan" value="{{ $kibc->nama }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Alamat Bangunan</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="text" name="alamat" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Alamat" value="{{ $kibc->alamat }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kode Bangunan</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="text" name="kode_bangunan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Kode Bangunan" value="{{ $kibc->kode_bangunan }}" readonly>
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Luas Lantai Bangunan</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="Number" name="luas_lantai" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Luas Lantai Bangunan" value="{{ $kibc->luas_lantai }}" readonly>
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tahun</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="Number" name="tahun" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Tahun" value="{{ $kibc->tahun }}" readonly>
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Bulan</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="Number" name="bulan" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Bulan" value="{{ $kibc->bulan }}" readonly>
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Umur Bangunan</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="Number" name="umur" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Umur" value="{{ $kibc->umur }}" readonly>
                                  </div>
                                </div>
                              </div>



                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Asal</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="text" name="asal" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Asal" value="{{ $kibc->asal }}" readonly>
                                  </div>
                                </div>
                              </div>

                              <div class="col-span-full">
                                <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Keterangan</label>
                                <div class="mt-2">
                                  <textarea required name="keterangan" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-purple-800 sm:text-sm sm:leading-6" placeholder="Masukkan Keterangan" readonly>{{ $kibc->keterangan }}</textarea>
                                </div>
                              </div>


                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">O P D</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="text" name="opd" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan OPD" value="{{ $kibc->opd }}" readonly>
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Sub OPD</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input required type="text" name="sub_opd" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Sub OPD" value="{{ $kibc->sub_opd }}" readonly>
                                  </div>
                                </div>
                              </div>

                              <div class="mt-7 grid grid-cols-3 col-span-full items-center text-gray-400">
                                <hr class="border-gray-400">
                                <p class="text-center text-sm">Pemutahiran</p>
                                <hr class="border-gray-400">
                             </div>

                              <div class="sm:col-span-3 mt-5">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tujuan Pemutahiran</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input  required type="text" name="tujuan_pemutahiran" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Tujuan Pemutahiran" value="{{ $kibc->tujuan_pemutahiran ?? '' }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3 mt-5">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Asal Pemutahiran</label>
                                <div class="mt-2">
                                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                    <input  required type="text" name="asal_pemutahiran" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Asal Pemutahiran" value="{{ $kibc->alamat }}">
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Kota Bangunan</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <select required name="kota"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                <option selected class="text-gray-500">Pilih Kota Bangunan</option>
                                                <option value="Bandung" @if ($kibc->kota == "Bandung") selected @endif>Bandung</option>
                                                <option value="Cimahi"  @if ($kibc->kota == "Cimahi") selected @endif>Cimahi</option>
                                        </select>
                                  </div>
                                </div>
                              </div>

                              <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Alasan Pemutahiran</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input required type="text" name="alasan_pemutahiran" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Alasan Pemutahiran" value="{{ $kibc->alasan_pemutahiran ?? '' }}">
                                    </div>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Tanggal Pemutahiran</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input required type="date" name="tanggal_pemutahiran" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Masukkan Alasan Pemutahiran" value="{{ $kibc->alasan_pemutahiran ?? '' }}">
                                    </div>
                                </div>
                            </div>

                          <!-- Ini Form -->

                        </div>
                      </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6 p-5">
                        <button type="submit" class="rounded-md bg-purple-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-800">Mutahirkan Data</button>
                    </div>
                  </form>
             </div>
            <!-- Table End -->

        </div>
        <!-- Content End -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/datepicker.min.js"></script>

    </body>
</html>
