<x-app-layout>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-6">

            <div class="mb-8">

                <h1 class="text-3xl font-bold text-gray-800">
                    Dashboard Dosen
                </h1>

                <p class="text-gray-500 mt-1">

                    Selamat datang,

                    <span class="font-semibold">

                        {{ auth()->user()->name }}

                    </span>

                </p>

            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-blue-600 text-white rounded-xl p-6 shadow">

                    <h3 class="text-sm opacity-80">
                        Total Pengajuan
                    </h3>

                    <p class="text-4xl font-bold mt-3">

                        {{ \App\Models\Borrowing::where('user_id',auth()->id())->count() }}

                    </p>

                </div>

                <div class="bg-green-600 text-white rounded-xl p-6 shadow">

                    <h3 class="text-sm opacity-80">

                        Disetujui

                    </h3>

                    <p class="text-4xl font-bold mt-3">

                        {{ \App\Models\Borrowing::where('user_id',auth()->id())->where('status','Disetujui')->count() }}

                    </p>

                </div>

                <div class="bg-yellow-500 text-white rounded-xl p-6 shadow">

                    <h3 class="text-sm opacity-80">

                        Menunggu

                    </h3>

                    <p class="text-4xl font-bold mt-3">

                        {{ \App\Models\Borrowing::where('user_id',auth()->id())->where('status','Menunggu')->count() }}

                    </p>

                </div>

            </div>

            {{-- Menu Cepat Dosen --}}
<div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">


    <a href="{{ route('borrowings.create') }}"
       class="bg-blue-600 text-white rounded-xl shadow p-6 hover:bg-blue-700 transition">

        <div class="flex items-center gap-4">

            <div class="bg-white/20 rounded-lg p-4 text-2xl">
                📝
            </div>


            <div>

                <h3 class="text-xl font-bold">
                    Ajukan Peminjaman
                </h3>

                <p class="text-blue-100 text-sm">
                    Buat pengajuan penggunaan ruangan.
                </p>

            </div>

        </div>

    </a>



    <a href="{{ route('borrowings.index') }}"
       class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition border">


        <div class="flex items-center gap-4">


            <div class="bg-green-100 text-green-600 rounded-lg p-4 text-2xl">
                📋
            </div>


            <div>

                <h3 class="text-xl font-bold text-gray-800">
                    Riwayat Peminjaman
                </h3>


                <p class="text-gray-500 text-sm">
                    Lihat status pengajuan sebelumnya.
                </p>


            </div>


        </div>


    </a>


</div>

            <div class="mt-8 bg-white rounded-xl shadow">

                <div class="border-b p-6">

                    <h2 class="text-xl font-semibold">

                        Riwayat Pengajuan Terbaru

                    </h2>

                </div>

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-gray-100">

                        <tr>

                            <th class="p-3 text-left">Ruangan</th>

                            <th class="p-3">Tanggal</th>

                            <th class="p-3">Jam</th>

                            <th class="p-3">Status</th>

                        </tr>

                        </thead>

                        <tbody>

                        @foreach(\App\Models\Borrowing::where('user_id',auth()->id())->latest()->take(5)->get() as $item)

                            <tr class="border-b">

                                <td class="p-3">

                                    {{ $item->room->nama_ruang }}

                                </td>

                                <td class="p-3">

                                    {{ $item->tanggal }}

                                </td>

                                <td class="p-3">

                                    {{ $item->jam_mulai }}

                                    -

                                    {{ $item->jam_selesai }}

                                </td>

                                <td class="p-3">

                                    {{ $item->status }}

                                </td>

                            </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>