<div class="space-y-6">

    {{-- Ruangan --}}
    <div>

        <label class="block mb-2 font-medium text-gray-700">
            Ruangan
        </label>

        <select
            name="room_id"
            class="w-full rounded-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500">

            @foreach($rooms as $room)

                <option
                    value="{{ $room->id }}"
                    {{ old('room_id', $borrowing->room_id ?? '') == $room->id ? 'selected' : '' }}>

                    {{ $room->kode_ruang }} - {{ $room->nama_ruang }}

                </option>

            @endforeach

        </select>

        @error('room_id')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

    </div>

    {{-- Tanggal --}}
    <div>

        <label class="block mb-2 font-medium text-gray-700">
            Tanggal
        </label>

        <input
            type="date"
            name="tanggal"
            value="{{ old('tanggal', $borrowing->tanggal ?? '') }}"
            class="w-full rounded-lg border-gray-300">

        @error('tanggal')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

    </div>

    <div class="grid md:grid-cols-2 gap-5">

        {{-- Jam Mulai --}}
        <div>

            <label class="block mb-2 font-medium text-gray-700">
                Jam Mulai
            </label>

            <input
                type="time"
                name="jam_mulai"
                value="{{ old('jam_mulai', $borrowing->jam_mulai ?? '') }}"
                class="w-full rounded-lg border-gray-300">

            @error('jam_mulai')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>

        {{-- Jam Selesai --}}
        <div>

            <label class="block mb-2 font-medium text-gray-700">
                Jam Selesai
            </label>

            <input
                type="time"
                name="jam_selesai"
                value="{{ old('jam_selesai', $borrowing->jam_selesai ?? '') }}"
                class="w-full rounded-lg border-gray-300">

            @error('jam_selesai')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

        </div>

    </div>

    {{-- Keperluan --}}
    <div>

        <label class="block mb-2 font-medium text-gray-700">
            Keperluan
        </label>

        <textarea
            name="keperluan"
            rows="4"
            class="w-full rounded-lg border-gray-300">{{ old('keperluan', $borrowing->keperluan ?? '') }}</textarea>

        @error('keperluan')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror

    </div>

    <div class="flex justify-end gap-3">

        <a
            href="{{ route('borrowings.index') }}"
            class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded-lg">

            Kembali

        </a>

        <button
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg">

            Simpan

        </button>

    </div>

</div>