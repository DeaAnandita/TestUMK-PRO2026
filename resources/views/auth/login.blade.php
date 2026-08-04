<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-700 via-blue-500 to-indigo-600 px-6">


    <div class="w-full max-w-5xl grid md:grid-cols-2 bg-white rounded-3xl shadow-2xl overflow-hidden">


        {{-- Left Illustration --}}
        <div class="hidden md:flex flex-col justify-center p-10 bg-gradient-to-br from-blue-600 to-indigo-700 text-white">


            <div class="text-7xl mb-6">
                🏫
            </div>


            <h1 class="text-4xl font-bold leading-tight">
                RuangKu
            </h1>


            <p class="mt-4 text-blue-100 text-lg leading-relaxed">
                Sistem Peminjaman Ruang Universitas
                untuk mengelola penggunaan ruang secara mudah,
                cepat, dan terintegrasi.
            </p>



            <div class="mt-8 space-y-4">


                <div class="flex items-center gap-3">

                    <div class="bg-white/20 rounded-lg p-2">
                        📅
                    </div>

                    <span>
                        Pengajuan peminjaman online
                    </span>

                </div>


                <div class="flex items-center gap-3">

                    <div class="bg-white/20 rounded-lg p-2">
                        ✅
                    </div>

                    <span>
                        Approval oleh admin
                    </span>

                </div>


                <div class="flex items-center gap-3">

                    <div class="bg-white/20 rounded-lg p-2">
                        🏢
                    </div>

                    <span>
                        Manajemen data ruangan
                    </span>

                </div>


            </div>


        </div>




        {{-- Login Form --}}
        <div class="p-8 md:p-12">


            <div class="text-center mb-8">


                <div class="md:hidden text-5xl">
                    🏫
                </div>


                <h2 class="text-3xl font-bold text-gray-800 mt-3">
                    Selamat Datang
                </h2>


                <p class="text-gray-500 mt-2">
                    Masuk ke akun Anda
                </p>


            </div>




            @if ($errors->any())

            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl">

                <ul class="list-disc list-inside text-sm">

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

            @endif



            <form method="POST" action="{{ route('login') }}">

                @csrf



                {{-- Email --}}
                <div>


                    <x-input-label 
                        for="email"
                        value="Email"
                        class="text-gray-700"
                    />


                    <x-text-input
                        id="email"
                        class="block mt-2 w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                    />


                </div>




                {{-- Password --}}
                <div class="mt-5">


                    <x-input-label 
                        for="password"
                        value="Password"
                    />


                    <x-text-input
                        id="password"
                        class="block mt-2 w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                        type="password"
                        name="password"
                        required
                    />


                </div>




                {{-- Remember --}}
                <div class="flex items-center mt-5">


                    <input 
                    id="remember_me"
                    type="checkbox"
                    name="remember"
                    class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500">


                    <label 
                    for="remember_me"
                    class="ml-2 text-sm text-gray-600">

                        Ingat saya

                    </label>


                </div>




                {{-- Button --}}
                <div class="mt-8">


                    <button
                    class="w-full bg-blue-600 hover:bg-blue-700 transition text-white font-semibold py-3 rounded-xl shadow-lg">


                        Masuk


                    </button>


                </div>



            </form>




            <div class="text-center mt-8 text-sm text-gray-500">


                Belum memiliki akun?


                <a href="{{ route('register') }}"
                class="text-blue-600 font-semibold hover:underline">

                    Daftar sekarang

                </a>


            </div>


        </div>



    </div>


</div>


</x-guest-layout>