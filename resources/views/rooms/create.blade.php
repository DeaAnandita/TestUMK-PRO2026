<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-4">

    <div class="bg-white shadow rounded-xl">

        <div class="border-b p-6">

            <h2 class="text-2xl font-bold">

                Tambah Ruangan

            </h2>

        </div>

        <form
            action="{{ route('rooms.store') }}"
            method="POST"
            class="p-6 space-y-5">

            @csrf

            <div>

                <label>Kode Ruang</label>

                <input
                    type="text"
                    name="kode_ruang"
                    value="{{ old('kode_ruang') }}"
                    class="w-full border rounded-lg px-4 py-2">

                @error('kode_ruang')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror

            </div>

            <div>

                <label>Nama Ruang</label>

                <input
                    type="text"
                    name="nama_ruang"
                    value="{{ old('nama_ruang') }}"
                    class="w-full border rounded-lg px-4 py-2">

            </div>

            <div>

                <label>Gedung</label>

                <input
                    type="text"
                    name="gedung"
                    value="{{ old('gedung') }}"
                    class="w-full border rounded-lg px-4 py-2">

            </div>

            <div>

                <label>Kapasitas</label>

                <input
                    type="number"
                    name="kapasitas"
                    value="{{ old('kapasitas') }}"
                    class="w-full border rounded-lg px-4 py-2">

            </div>

            <div>

                <label>Fasilitas</label>

                <textarea
                    name="fasilitas"
                    rows="3"
                    class="w-full border rounded-lg px-4 py-2">{{ old('fasilitas') }}</textarea>

            </div>

            <div>

                <label>Status</label>

                <select
                    name="status"
                    class="w-full border rounded-lg px-4 py-2">

                    <option value="1">Aktif</option>

                    <option value="0">Tidak Aktif</option>

                </select>

            </div>

            <div class="flex gap-3">

                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">

                    Simpan

                </button>

                <a
                    href="{{ route('rooms.index') }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-2 rounded-lg">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

</x-app-layout>