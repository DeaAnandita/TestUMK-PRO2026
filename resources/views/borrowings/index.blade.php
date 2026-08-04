<x-app-layout>

<div class="py-8">

<div class="max-w-7xl mx-auto px-6">


    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">


        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                Riwayat Peminjaman
            </h1>

            <p class="text-gray-500 mt-1">
                Kelola dan lihat daftar pengajuan peminjaman ruang.
            </p>

        </div>


        <a href="{{ route('borrowings.create') }}"
           class="mt-4 md:mt-0 bg-blue-600 text-white px-5 py-3 rounded-xl hover:bg-blue-700 transition">

            + Ajukan Peminjaman

        </a>


    </div>




    {{-- Filter --}}
    <div class="bg-white rounded-xl shadow p-6 mb-6">


        <form method="GET">


            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">


                {{-- Search --}}
                <div>

                    <label class="text-sm text-gray-600">
                        Cari Ruangan
                    </label>


                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Nama ruang..."
                        class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    >

                </div>




                {{-- Status --}}
                <div>

                    <label class="text-sm text-gray-600">
                        Status
                    </label>


                    <select
                        name="status"
                        class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-500">


                        <option value="">
                            Semua Status
                        </option>


                        <option value="Menunggu"
                        {{ request('status')=='Menunggu'?'selected':'' }}>
                            Menunggu
                        </option>


                        <option value="Disetujui"
                        {{ request('status')=='Disetujui'?'selected':'' }}>
                            Disetujui
                        </option>


                        <option value="Ditolak"
                        {{ request('status')=='Ditolak'?'selected':'' }}>
                            Ditolak
                        </option>


                        <option value="Selesai"
                        {{ request('status')=='Selesai'?'selected':'' }}>
                            Selesai
                        </option>


                    </select>


                </div>





                {{-- Tanggal --}}
                <div>

                    <label class="text-sm text-gray-600">
                        Tanggal
                    </label>


                    <input
                        type="date"
                        name="tanggal"
                        value="{{ request('tanggal') }}"
                        class="mt-1 w-full rounded-lg border-gray-300 focus:ring-blue-500"
                    >

                </div>





                {{-- Button --}}
                <div class="flex items-end gap-2">


                    <button
                        class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">

                        🔍 Cari

                    </button>



                    <a href="{{ route('borrowings.index') }}"
                       class="bg-gray-200 text-gray-700 px-5 py-2 rounded-lg hover:bg-gray-300">

                        Reset

                    </a>


                </div>



            </div>


        </form>


    </div>






    {{-- Table --}}
    <div class="bg-white rounded-xl shadow overflow-hidden">


        <div class="p-6 border-b">

            <h2 class="text-xl font-semibold text-gray-800">

                Data Pengajuan Peminjaman

            </h2>

        </div>





        <div class="overflow-x-auto">


            <table class="w-full text-sm">


                <thead class="bg-gray-100">


                <tr>


                    <th class="px-6 py-4 text-left">
                        No
                    </th>


                    <th class="px-6 py-4 text-left">
                        Ruangan
                    </th>


                    <th class="px-6 py-4 text-left">
                        Peminjam
                    </th>


                    <th class="px-6 py-4">
                        Tanggal
                    </th>


                    <th class="px-6 py-4">
                        Jam
                    </th>


                    <th class="px-6 py-4">
                        Status
                    </th>


                    <th class="px-6 py-4">
                        Aksi
                    </th>


                </tr>


                </thead>




                <tbody>


                @forelse($borrowings as $item)


                <tr class="border-b hover:bg-gray-50">


                    <td class="px-6 py-4">

                        {{ $loop->iteration }}

                    </td>



                    <td class="px-6 py-4 font-semibold text-gray-800">

                        {{ $item->room->nama_ruang }}

                    </td>




                    <td class="px-6 py-4">

                        {{ $item->user->name }}

                    </td>




                    <td class="px-6 py-4">

                        {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}

                    </td>




                    <td class="px-6 py-4">

                        {{ $item->jam_mulai }}
                        -
                        {{ $item->jam_selesai }}

                    </td>




                    <td class="px-6 py-4">


                        @if($item->status == 'Disetujui')


                            <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-700">

                                Disetujui

                            </span>



                        @elseif($item->status == 'Ditolak')


                            <span class="px-3 py-1 rounded-full text-xs bg-red-100 text-red-700">

                                Ditolak

                            </span>



                        @elseif($item->status == 'Selesai')


                            <span class="px-3 py-1 rounded-full text-xs bg-blue-100 text-blue-700">

                                Selesai

                            </span>



                        @else


                            <span class="px-3 py-1 rounded-full text-xs bg-yellow-100 text-yellow-700">

                                Menunggu

                            </span>



                        @endif


                    </td>




                    <td class="px-6 py-4">


                        <a href="{{ route('borrowings.show',$item->id) }}"
                           class="text-blue-600 hover:underline">

                            Detail

                        </a>


                    </td>


                </tr>


                @empty


                <tr>


                    <td colspan="7"
                        class="text-center py-8 text-gray-500">


                        Belum ada data peminjaman.


                    </td>


                </tr>


                @endforelse



                </tbody>


            </table>


        </div>




        {{-- Pagination --}}
        <div class="p-6">


            {{ $borrowings->links() }}


        </div>



    </div>


</div>

</div>


</x-app-layout>