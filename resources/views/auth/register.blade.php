<x-guest-layout>


<div class="min-h-screen flex items-center justify-center 
bg-gradient-to-br from-blue-700 via-blue-500 to-indigo-600 px-6">


    <div class="w-full max-w-5xl grid md:grid-cols-2 
    bg-white rounded-3xl shadow-2xl overflow-hidden">



        {{-- Left Side --}}
        <div class="hidden md:flex flex-col justify-center 
        p-10 bg-gradient-to-br from-indigo-600 to-blue-700 text-white">


            <div class="text-7xl mb-6">
                🏫
            </div>


            <h1 class="text-4xl font-bold">
                Bergabung dengan RuangKu
            </h1>


            <p class="mt-4 text-blue-100 text-lg leading-relaxed">

                Buat akun untuk menggunakan sistem
                peminjaman ruang universitas.

            </p>



            <div class="mt-8 space-y-4">


                <div class="flex items-center gap-3">

                    <div class="bg-white/20 p-3 rounded-lg">
                        📅
                    </div>

                    <span>
                        Pengajuan ruang secara online
                    </span>

                </div>



                <div class="flex items-center gap-3">

                    <div class="bg-white/20 p-3 rounded-lg">
                        🔐
                    </div>

                    <span>
                        Sistem approval terintegrasi
                    </span>

                </div>



                <div class="flex items-center gap-3">

                    <div class="bg-white/20 p-3 rounded-lg">
                        📊
                    </div>

                    <span>
                        Monitoring riwayat peminjaman
                    </span>

                </div>


            </div>


        </div>




        {{-- Register Form --}}
        <div class="p-8 md:p-12">


            <div class="text-center mb-8">


                <div class="md:hidden text-5xl">
                    🏫
                </div>


                <h2 class="text-3xl font-bold text-gray-800 mt-3">
                    Buat Akun
                </h2>


                <p class="text-gray-500 mt-2">
                    Daftar untuk menggunakan sistem
                </p>


            </div>




            <form method="POST" action="{{ route('register') }}">

                @csrf



                {{-- Name --}}
                <div>

                    <x-input-label 
                        for="name"
                        value="Nama Lengkap"
                    />


                    <x-text-input
                        id="name"
                        class="block mt-2 w-full rounded-xl"
                        type="text"
                        name="name"
                        :value="old('name')"
                        required
                        autofocus
                    />


                    <x-input-error 
                    :messages="$errors->get('name')"
                    class="mt-2" />

                </div>




                {{-- Email --}}
                <div class="mt-4">

                    <x-input-label 
                        for="email"
                        value="Email"
                    />


                    <x-text-input
                        id="email"
                        class="block mt-2 w-full rounded-xl"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                    />


                    <x-input-error 
                    :messages="$errors->get('email')"
                    class="mt-2" />

                </div>




                {{-- Role --}}
                <div class="mt-4">

                    <x-input-label 
                        for="role"
                        value="Daftar Sebagai"
                    />


                    <select
                    name="role"
                    id="role"
                    class="block mt-2 w-full rounded-xl border-gray-300 
                    focus:border-blue-500 focus:ring-blue-500">


                        <option value="dosen">
                            Dosen
                        </option>


                        <option value="admin">
                            Admin
                        </option>


                    </select>


                </div>




                {{-- Password --}}
                <div class="mt-4">

                    <x-input-label 
                        for="password"
                        value="Password"
                    />


                    <x-text-input
                        id="password"
                        class="block mt-2 w-full rounded-xl"
                        type="password"
                        name="password"
                        required
                    />


                    <x-input-error 
                    :messages="$errors->get('password')"
                    class="mt-2" />

                </div>




                {{-- Confirm Password --}}
                <div class="mt-4">


                    <x-input-label
                        for="password_confirmation"
                        value="Konfirmasi Password"
                    />


                    <x-text-input
                        id="password_confirmation"
                        class="block mt-2 w-full rounded-xl"
                        type="password"
                        name="password_confirmation"
                        required
                    />


                </div>





                <div class="mt-8">


                    <button
                    class="w-full bg-blue-600 hover:bg-blue-700 
                    transition text-white font-semibold py-3 rounded-xl shadow-lg">


                        Daftar


                    </button>


                </div>




            </form>




            <div class="text-center mt-6 text-sm text-gray-500">


                Sudah memiliki akun?


                <a href="{{ route('login') }}"
                class="text-blue-600 font-semibold hover:underline">

                    Login

                </a>


            </div>


        </div>


    </div>


</div>


</x-guest-layout>