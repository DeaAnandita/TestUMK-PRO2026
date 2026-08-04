<x-app-layout>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-6">

            {{-- Header --}}
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800">
                    Dashboard Admin
                </h1>

                <p class="text-gray-500 mt-1">
                    Selamat datang, <span class="font-semibold">{{ auth()->user()->name }}</span>.
                    Kelola data ruangan dan pengajuan peminjaman.
                </p>
            </div>

            {{-- Statistik --}}
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

                <div class="bg-white rounded-xl shadow p-6 border-l-4 border-blue-500">
                    <h3 class="text-gray-500 text-sm">Total Ruangan</h3>
                    <p class="text-3xl font-bold mt-2">{{ \App\Models\Room::count() }}</p>
                </div>

                <div class="bg-white rounded-xl shadow p-6 border-l-4 border-yellow-500">
                    <h3 class="text-gray-500 text-sm">Menunggu Approval</h3>
                    <p class="text-3xl font-bold mt-2">
                        {{ \App\Models\Borrowing::where('status','Menunggu')->count() }}
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow p-6 border-l-4 border-green-500">
                    <h3 class="text-gray-500 text-sm">Disetujui</h3>
                    <p class="text-3xl font-bold mt-2">
                        {{ \App\Models\Borrowing::where('status','Disetujui')->count() }}
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow p-6 border-l-4 border-red-500">
                    <h3 class="text-gray-500 text-sm">Ditolak</h3>
                    <p class="text-3xl font-bold mt-2">
                        {{ \App\Models\Borrowing::where('status','Ditolak')->count() }}
                    </p>
                </div>

            </div>
            {{-- Menu Cepat Admin --}}
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">

            <a href="{{ route('rooms.index') }}"
            class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition border">

                <div class="flex items-center gap-4">

                    <div class="bg-blue-100 text-blue-600 rounded-lg p-4">
                        🏢
                    </div>

                    <div>
                        <h3 class="text-lg font-bold text-gray-800">
                            Data Ruangan
                        </h3>

                        <p class="text-gray-500 text-sm">
                            Tambah, edit, hapus, dan sinkronisasi data ruangan.
                        </p>
                    </div>

                </div>

            </a>


            <a href="{{ route('approvals.index') }}"
            class="bg-white rounded-xl shadow p-6 hover:shadow-lg transition border">

                <div class="flex items-center gap-4">

                    <div class="bg-green-100 text-green-600 rounded-lg p-4">
                        ✅
                    </div>

                    <div>

                        <h3 class="text-lg font-bold text-gray-800">
                            Approval Peminjaman
                        </h3>

                        <p class="text-gray-500 text-sm">
                            Setujui atau tolak pengajuan peminjaman dosen.
                        </p>

                    </div>

                </div>

            </a>

        </div>

            {{-- Pengajuan Terbaru --}}
            <div class="mt-8 bg-white rounded-xl shadow">

                <div class="p-6 border-b">
                    <h2 class="text-xl font-semibold">
                        Pengajuan Terbaru
                    </h2>
                </div>

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-gray-100">

                        <tr>

                            <th class="p-3 text-left">Dosen</th>

                            <th class="p-3 text-left">Ruangan</th>

                            <th class="p-3">Tanggal</th>

                            <th class="p-3">Status</th>

                        </tr>

                        </thead>

                        <tbody>

                        @foreach(\App\Models\Borrowing::latest()->take(5)->get() as $item)

                            <tr class="border-b">

                                <td class="p-3">{{ $item->user->name }}</td>

                                <td class="p-3">{{ $item->room->nama_ruang }}</td>

                                <td class="p-3">{{ $item->tanggal }}</td>

                                <td class="p-3">

                                    @switch($item->status)

                                        @case('Menunggu')
                                            <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700">
                                                Menunggu
                                            </span>
                                        @break

                                        @case('Disetujui')
                                            <span class="px-3 py-1 rounded-full bg-green-100 text-green-700">
                                                Disetujui
                                            </span>
                                        @break

                                        @case('Ditolak')
                                            <span class="px-3 py-1 rounded-full bg-red-100 text-red-700">
                                                Ditolak
                                            </span>
                                        @break

                                        @default
                                            <span class="px-3 py-1 rounded-full bg-blue-100 text-blue-700">
                                                Selesai
                                            </span>

                                    @endswitch

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