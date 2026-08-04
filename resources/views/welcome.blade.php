<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistem Peminjaman Ruang Universitas</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-50">

<div class="min-h-screen">

    {{-- Navbar --}}
    <nav class="bg-white shadow-sm">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <div class="flex items-center gap-3">

                <div class="bg-blue-600 text-white p-2 rounded-lg">
                    🏫
                </div>

                <div>
                    <h1 class="font-bold text-lg text-gray-800">
                        RuangKu
                    </h1>

                    <p class="text-xs text-gray-500">
                        Sistem Peminjaman Ruang Universitas
                    </p>
                </div>

            </div>


            <div>

                @auth

                    <a href="{{ url('/dashboard') }}"
                       class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                        Dashboard
                    </a>

                @else

                    <a href="{{ route('login') }}"
                       class="text-gray-600 mr-4 hover:text-blue-600">
                        Login
                    </a>


                    @if(Route::has('register'))

                    <a href="{{ route('register') }}"
                       class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                        Register
                    </a>

                    @endif

                @endauth

            </div>

        </div>

    </nav>



    {{-- Hero Section --}}

    <section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">


        <div>

            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm">
                Platform Manajemen Ruangan
            </span>


            <h2 class="text-5xl font-bold text-gray-800 mt-6 leading-tight">

                Sistem Peminjaman
                <span class="text-blue-600">
                    Ruang Universitas
                </span>

            </h2>


            <p class="text-gray-600 mt-5 text-lg leading-relaxed">

                Kelola peminjaman ruang kuliah secara mudah,
                cepat, dan terintegrasi.
                Dosen dapat mengajukan peminjaman,
                sedangkan admin dapat melakukan verifikasi dan pengelolaan ruangan.

            </p>


            <div class="mt-8 flex gap-4">


                @guest

                <a href="{{ route('login') }}"
                   class="bg-blue-600 text-white px-6 py-3 rounded-xl shadow hover:bg-blue-700">

                    Mulai Sekarang

                </a>

                @else

                <a href="{{ url('/dashboard') }}"
                   class="bg-blue-600 text-white px-6 py-3 rounded-xl shadow hover:bg-blue-700">

                    Masuk Dashboard

                </a>

                @endguest


            </div>


        </div>



        {{-- Illustration Card --}}

        <div class="bg-white rounded-3xl shadow-xl p-8">


            <div class="bg-blue-600 rounded-2xl p-8 text-white">


                <div class="text-6xl mb-6">
                    🏢
                </div>


                <h3 class="text-2xl font-bold">
                    Fasilitas Sistem
                </h3>


                <ul class="mt-5 space-y-3 text-blue-100">


                    <li>
                        ✓ Pengelolaan Data Ruangan
                    </li>


                    <li>
                        ✓ Pengajuan Peminjaman Online
                    </li>


                    <li>
                        ✓ Approval Admin
                    </li>


                    <li>
                        ✓ Cek Bentrok Jadwal
                    </li>


                    <li>
                        ✓ Riwayat Peminjaman
                    </li>


                </ul>


            </div>


        </div>


    </section>




    {{-- Feature Section --}}

    <section class="bg-white py-16">


        <div class="max-w-7xl mx-auto px-6">


            <h2 class="text-3xl font-bold text-center text-gray-800">

                Fitur Utama

            </h2>


            <div class="grid md:grid-cols-3 gap-6 mt-10">


                <div class="p-6 rounded-xl shadow border">

                    <div class="text-3xl">
                        📅
                    </div>

                    <h3 class="font-bold text-xl mt-4">
                        Peminjaman Online
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Dosen dapat mengajukan penggunaan ruangan secara digital.
                    </p>

                </div>



                <div class="p-6 rounded-xl shadow border">

                    <div class="text-3xl">
                        🔐
                    </div>

                    <h3 class="font-bold text-xl mt-4">
                        Approval Terpusat
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Admin dapat memvalidasi setiap pengajuan.
                    </p>

                </div>



                <div class="p-6 rounded-xl shadow border">

                    <div class="text-3xl">
                        📊
                    </div>

                    <h3 class="font-bold text-xl mt-4">
                        Dashboard Informasi
                    </h3>

                    <p class="text-gray-500 mt-2">
                        Monitoring statistik dan riwayat peminjaman.
                    </p>

                </div>


            </div>


        </div>


    </section>



    {{-- Footer --}}

    <footer class="text-center py-6 text-gray-500 text-sm">

        © {{ date('Y') }} Sistem Peminjaman Ruang Universitas

    </footer>


</div>


</body>

</html>