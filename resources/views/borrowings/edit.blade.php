<x-app-layout>

    <div class="max-w-4xl mx-auto py-8">

        <div class="bg-white rounded-xl shadow">

            <div class="border-b px-6 py-4">

                <h2 class="text-2xl font-bold text-gray-800">
                    Edit Pengajuan Peminjaman
                </h2>

                <p class="text-gray-500">
                    Perbarui data pengajuan peminjaman ruangan.
                </p>

            </div>

            <form
                action="{{ route('borrowings.update', $borrowing->id) }}"
                method="POST"
                class="p-6">

                @csrf
                @method('PUT')

                @include('borrowings._form')

            </form>

        </div>

    </div>

</x-app-layout>