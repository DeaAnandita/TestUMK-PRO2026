<x-app-layout>
    <div class="max-w-7xl mx-auto py-8 px-4">

        @if(session('success'))
            <div class="mb-5 rounded-lg bg-green-100 border border-green-300 text-green-700 px-4 py-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow">

            <div class="flex justify-between items-center p-6 border-b">

                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        Data Ruangan
                    </h2>
                    <p class="text-gray-500">
                        Kelola seluruh data ruangan
                    </p>
                </div>

                <div class="flex gap-3">

                    <form
                        action="{{ route('rooms.sync') }}"
                        method="POST">

                        @csrf

                        <button
                            class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">

                            Sinkronisasi

                        </button>

                    </form>

                    <a
                        href="{{ route('rooms.create') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">

                        Tambah Ruangan

                    </a>

                </div>

            </div>

            <div class="p-6">

                <form method="GET" class="mb-5">

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari kode, nama, gedung..."

                        class="w-full md:w-96 border rounded-lg px-4 py-2 focus:ring focus:ring-blue-200">

                </form>

                <div class="overflow-x-auto">

                    <table class="min-w-full border">

                        <thead class="bg-gray-100">

                        <tr>

                            <th class="px-4 py-3">Kode</th>

                            <th>Nama</th>

                            <th>Gedung</th>

                            <th>Kapasitas</th>

                            <th>Fasilitas</th>

                            <th>Status</th>

                            <th width="170">Aksi</th>

                        </tr>

                        </thead>

                        <tbody>

                        @forelse($rooms as $room)

                            <tr class="border-b hover:bg-gray-50">

                                <td class="px-4 py-3">
                                    {{ $room->kode_ruang }}
                                </td>

                                <td>{{ $room->nama_ruang }}</td>

                                <td>{{ $room->gedung }}</td>

                                <td>{{ $room->kapasitas }}</td>

                                <td>{{ $room->fasilitas }}</td>

                                <td>

                                    @if($room->status)

                                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-xs">
                                            Aktif
                                        </span>

                                    @else

                                        <span class="bg-red-100 text-red-700 px-2 py-1 rounded-full text-xs">
                                            Tidak Aktif
                                        </span>

                                    @endif

                                </td>

                                <td>

                                    <div class="flex gap-2">

                                        <a
                                            href="{{ route('rooms.edit',$room->id) }}"
                                            class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded">

                                            Edit

                                        </a>

                                        <form
                                            action="{{ route('rooms.destroy',$room->id) }}"
                                            method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                onclick="return confirm('Hapus data?')"
                                                class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">

                                                Hapus

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="7"
                                    class="text-center py-10 text-gray-500">

                                    Tidak ada data

                                </td>

                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>

                <div class="mt-5">

                    {{ $rooms->links() }}

                </div>

            </div>

        </div>

    </div>
</x-app-layout>