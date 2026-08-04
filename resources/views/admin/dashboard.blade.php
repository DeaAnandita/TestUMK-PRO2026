<x-app-layout>

    <div class="p-6">

        <h1 class="text-3xl font-bold">
            Dashboard Admin
        </h1>

        <p class="mt-3">
            Selamat datang,
            {{ auth()->user()->name }}
        </p>

    </div>

</x-app-layout>