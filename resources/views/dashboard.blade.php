<x-app-layout>

<div class="max-w-7xl mx-auto py-8">

<div class="grid md:grid-cols-3 lg:grid-cols-6 gap-5">

<div class="bg-blue-500 text-white rounded-xl p-5">

<h2 class="text-4xl font-bold">

{{ $totalRoom }}

</h2>

<p>Total Ruangan</p>

</div>

<div class="bg-indigo-500 text-white rounded-xl p-5">

<h2 class="text-4xl font-bold">

{{ $totalBorrowing }}

</h2>

<p>Total Pengajuan</p>

</div>

<div class="bg-yellow-500 text-white rounded-xl p-5">

<h2 class="text-4xl font-bold">

{{ $waiting }}

</h2>

<p>Menunggu</p>

</div>

<div class="bg-green-600 text-white rounded-xl p-5">

<h2 class="text-4xl font-bold">

{{ $approved }}

</h2>

<p>Disetujui</p>

</div>

<div class="bg-red-500 text-white rounded-xl p-5">

<h2 class="text-4xl font-bold">

{{ $rejected }}

</h2>

<p>Ditolak</p>

</div>

<div class="bg-gray-700 text-white rounded-xl p-5">

<h2 class="text-4xl font-bold">

{{ $finished }}

</h2>

<p>Selesai</p>

</div>

</div>

</div>

</x-app-layout>