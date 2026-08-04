<x-app-layout>

<div class="max-w-4xl mx-auto py-8">

    <div class="bg-white shadow rounded-xl">

        <div class="border-b p-6">

            <h2 class="text-2xl font-bold">
                Ajukan Peminjaman
            </h2>

        </div>
            <form
                action="{{ route('borrowings.store') }}"
                method="POST"
                class="p-6">

                @csrf

                @include('borrowings._form')
            </form>
    </div>

</div>

</x-app-layout>