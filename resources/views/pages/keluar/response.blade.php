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
                      <a href="/keluarmasukarsip/form/{{ $peng->id_pengajuan }}" class="ms-1 text-sm font-semibold text-purple-600 hover:text-purple-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Verifikasi</a>
                    </div>
                  </li>
                </ol>
            </nav>

            <div class="flex items-center justify-center mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <form class="p-3" action="/keluarmasukarsip/form/action/{{ $peng->id_pengajuan }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="space-y-12 p-5">
                        <div class="border-b border-gray-900/10 pb-12">

                            <span href="#" class="flex items-center mt-10 justify-center">
                                <img src="{{ asset('img/asset-decorone.png') }}" alt="" class="h-9">
                                <h2 class="font-semibold text-purple-950 text-xl ml-2">Verifikasi Data Permohonan.</h2>
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
                                        <input type="text" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-purple-950 placeholder:font-semibold focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ $peng->relpeng->nama_barang }}" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Alasan</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="text" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-purple-950 placeholder:font-semibold focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ $peng->alasan }}" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Pengaju Permohonan</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="text" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-purple-950 placeholder:font-semibold focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ $peng->relpengus->name }}" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3">
                                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">jabatan</label>
                                    <div class="mt-2">
                                      <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                        <input type="text" class="block flex-1 border-0 bg-transparent py-1.5 p-2 pl-3 text-gray-900 placeholder:text-purple-950 placeholder:font-semibold focus:ring-0 sm:text-sm sm:leading-6" placeholder="{{ $peng->relpengus->jabatan }}" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="sm:col-span-3 justify-center">
                                    <label for="id_ruangan" class="block text-sm font-medium leading-6 text-gray-900">Persetujuan Barang</label>
                                    <div class="mt-2">
                                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-purple-800 sm:max-w-md bg-white">
                                            <select name="disetujui" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500">
                                                    <option selected disable class="text-gray-500">Pilih Status Barang</option>
                                                    <option value="disetujui">Di setujui</option>
                                                    <option value="tidak disetujui">Tidak Disetujui</option>
                                                    <option value="belum disetujui">Belum Disetujui</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-2 p-2">
                        <button type="submit" class="rounded-md bg-purple-800 px-4 py-3 text-sm font-semibold text-white shadow-sm hover:bg-purple-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-800">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- Content End -->

    </body>
</html>
