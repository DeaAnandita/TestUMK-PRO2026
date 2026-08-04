<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    {{-- Kode Ruang --}}
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Kode Ruang
        </label>

        <input
            type="text"
            name="kode_ruang"
            value="{{ old('kode_ruang', $room->kode_ruang ?? '') }}"
            class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">

        @error('kode_ruang')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Nama Ruang --}}
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Nama Ruang
        </label>

        <input
            type="text"
            name="nama_ruang"
            value="{{ old('nama_ruang', $room->nama_ruang ?? '') }}"
            class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">

        @error('nama_ruang')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Gedung --}}
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Gedung
        </label>

        <input
            type="text"
            name="gedung"
            value="{{ old('gedung', $room->gedung ?? '') }}"
            class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">

        @error('gedung')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Kapasitas --}}
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            Kapasitas
        </label>

        <input
            type="number"
            name="kapasitas"
            value="{{ old('kapasitas', $room->kapasitas ?? '') }}"
            class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">

        @error('kapasitas')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

</div>

{{-- Fasilitas --}}
<div class="mt-6">
    <label class="block text-sm font-medium text-gray-700 mb-2">
        Fasilitas
    </label>

    <textarea
        name="fasilitas"
        rows="4"
        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">{{ old('fasilitas', $room->fasilitas ?? '') }}</textarea>

    @error('fasilitas')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- Status --}}
<div class="mt-6">
    <label class="block text-sm font-medium text-gray-700 mb-2">
        Status
    </label>

    <select
        name="status"
        class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">

        <option value="1"
            {{ old('status', $room->status ?? 1) == 1 ? 'selected' : '' }}>
            Aktif
        </option>

        <option value="0"
            {{ old('status', $room->status ?? 1) == 0 ? 'selected' : '' }}>
            Tidak Aktif
        </option>

    </select>

    @error('status')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="flex justify-end gap-3 mt-8">

    <a href="{{ route('rooms.index') }}"
       class="px-5 py-2 rounded-lg bg-gray-500 hover:bg-gray-600 text-white">
        Batal
    </a>

    <button
        type="submit"
        class="px-5 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white">

        Simpan

    </button>

</div>