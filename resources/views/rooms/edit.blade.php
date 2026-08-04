<x-app-layout>

<div class="max-w-5xl mx-auto py-8">

    <div class="bg-white shadow rounded-xl">

        <div class="border-b px-6 py-4">

            <h2 class="text-2xl font-bold text-gray-800">

                Edit Data Ruangan

            </h2>

            <p class="text-gray-500">

                Perbarui informasi ruangan.

            </p>

        </div>

        <form
            action="{{ route('rooms.update', $room->id) }}"
            method="POST"
            class="p-6">

            @csrf
            @method('PUT')

            @include('rooms._form')

        </form>

    </div>

</div>

</x-app-layout>