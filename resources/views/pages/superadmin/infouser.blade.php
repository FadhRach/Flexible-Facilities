<!doctype html>
<html>

<head>
    <x-app />
</head>

<body>
    <div class="h-full bg-purple-50">

        <x-super-navbar />

        <!-- Card -->
        <div class="mx-5 p-5 my-5 mt-10">

            <div class="flex justify-center items-center mt-10">
                <h1 class="font-semibold text-purple-950 text-2xl">Daftar User - <span class="italic"> FlexF SMKN 1 Cimahi.</span></h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 mb-4 mt-4 p-6">
                @foreach ($user as $u)
                <div class="max-w-xs bg-white border border-purple-900 rounded-lg dark:bg-gray-800 dark:border-gray-700 shadow-lg flex flex-col items-center justify-center">
                    <img class="p-4 h-56 rounded-3xl" src="{{ url('/image/' . $u->profile_image) }}" alt="profile image" />
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $u->name }}
                        </h5>
                        <h5 class="mb-3 font-semibold text-xl text-gray-600 dark:text-gray-400 tracking-tight">
                            {{ $u->email }}
                        </h5>
                        <h5 class="mb-3 font-medium text-lg text-gray-700 dark:text-gray-400 tracking-tight">
                                    @if ($u->role === 'user')
                                        <span class="text-cyan-500">{{ $u->role }}</span>
                                    @elseif($u->role === 'operator')
                                        <span class="text-yellow-900">{{ $u->role }}</span>
                                    @elseif($u->role === 'admin')
                                        <span class="text-purple-900">{{ $u->role }}</span>
                                    @elseif($u->role === 'superadmin')
                                        <span class="text-green-900">{{ $u->role }}</span>
                                    @else
                                        {{ $u->role }}
                                    @endif
                        </h5>
                        <p class="mb-3 font-normal text-gray-400 text-md dark:text-gray-400 tracking-tight">
                            {{ $u->jabatan }}
                        </p>
                    </div>
                </div>
                @endforeach
             </div>
        </div>
        <!-- Card -->

    </div>

</body>

</html>
