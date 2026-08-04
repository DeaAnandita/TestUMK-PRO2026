<x-app-layout>

<div class="max-w-7xl mx-auto py-8">

<div class="bg-white rounded-xl shadow">

<div class="border-b p-6 flex justify-between">

<h2 class="text-2xl font-bold">

Approval Pengajuan

</h2>

<form>

<select
name="status"
onchange="this.form.submit()"
class="rounded-lg">

<option value="">Semua</option>

<option value="Menunggu">Menunggu</option>

<option value="Disetujui">Disetujui</option>

<option value="Ditolak">Ditolak</option>

<option value="Selesai">Selesai</option>

</select>

</form>

</div>

<div class="overflow-x-auto">

<table class="min-w-full">

<thead class="bg-gray-100">

<tr>

<th>Dosen</th>

<th>Ruangan</th>

<th>Tanggal</th>

<th>Jam</th>

<th>Status</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>

@foreach($borrowings as $item)

<tr class="border-b">

<td>{{ $item->user->name }}</td>

<td>{{ $item->room->nama_ruang }}</td>

<td>{{ $item->tanggal }}</td>

<td>

{{ $item->jam_mulai }}

-

{{ $item->jam_selesai }}

</td>

<td>{{ $item->status }}</td>

<td>

@if($item->status=='Menunggu')

<div class="flex gap-2">

<form
method="POST"
action="{{ route('approvals.approve',$item->id) }}">

@csrf
@method('PUT')

<button
class="bg-green-600 text-white px-3 py-1 rounded">

Approve

</button>

</form>

<form
method="POST"
action="{{ route('approvals.reject',$item->id) }}">

@csrf
@method('PUT')

<button
class="bg-red-600 text-white px-3 py-1 rounded">

Reject

</button>

</form>

</div>

@endif

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

<div class="p-5">

{{ $borrowings->links() }}

</div>

</div>

</div>

</x-app-layout>