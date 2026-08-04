<x-app-layout>

<div class="py-10">

    <div class="max-w-7xl mx-auto px-6">

        {{-- Header --}}
        <div class="mb-8">

            <h1 class="text-3xl font-bold text-gray-800">
                Selamat Datang 👋
            </h1>

            <p class="text-gray-500 mt-2">
                Halo,
                <span class="font-semibold text-blue-600">
                    {{ auth()->user()->name }}
                </span>

                <br>
                Anda login sebagai
                <span class="font-semibold">
                    {{ ucfirst(auth()->user()->role) }}
                </span>
            </p>

        </div>



        {{-- Admin Dashboard --}}

        @if(auth()->user()->role == 'admin')


        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-white shadow">

            <h2 class="text-2xl font-bold">
                Dashboard Administrator
            </h2>

            <p class="mt-2 text-blue-100">
                Kelola ruangan dan persetujuan peminjaman.
            </p>


        </div>



        <div class="grid md:grid-cols-3 gap-6 mt-8">


            <a href="{{ route('rooms.index') }}"
            class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">


                <div class="text-4xl">
                    🏢
                </div>


                <h3 class="font-bold text-xl mt-4">
                    Data Ruangan
                </h3>


                <p class="text-gray-500 mt-2">
                    CRUD dan sinkronisasi ruangan.
                </p>


            </a>



            <a href="{{ route('approvals.index') }}"
            class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">


                <div class="text-4xl">
                    ✅
                </div>


                <h3 class="font-bold text-xl mt-4">
                    Approval
                </h3>


                <p class="text-gray-500 mt-2">
                    Setujui atau tolak peminjaman.
                </p>


            </a>



            <div class="bg-white rounded-xl shadow p-6">


                <div class="text-4xl">
                    📊
                </div>


                <h3 class="font-bold text-xl mt-4">
                    Monitoring
                </h3>


                <p class="text-gray-500 mt-2">
                    Statistik peminjaman ruang.
                </p>


            </div>


        </div>



        @else



        {{-- Dosen Dashboard --}}


        <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl p-8 text-white shadow">


            <h2 class="text-2xl font-bold">
                Dashboard Dosen
            </h2>


            <p class="mt-2 text-green-100">
                Ajukan peminjaman ruang dan lihat riwayat penggunaan.
            </p>


        </div>



        <div class="grid md:grid-cols-2 gap-6 mt-8">


            <a href="{{ route('borrowings.create') }}"
            class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">


                <div class="text-4xl">
                    📝
                </div>


                <h3 class="font-bold text-xl mt-4">
                    Ajukan Peminjaman
                </h3>


                <p class="text-gray-500 mt-2">
                    Buat pengajuan penggunaan ruang.
                </p>


            </a>




            <a href="{{ route('borrowings.index') }}"
            class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition">


                <div class="text-4xl">
                    📋
                </div>


                <h3 class="font-bold text-xl mt-4">
                    Riwayat Peminjaman
                </h3>


                <p class="text-gray-500 mt-2">
                    Lihat status pengajuan.
                </p>


            </a>


        </div>


        @endif


    </div>

</div>


</x-app-layout>