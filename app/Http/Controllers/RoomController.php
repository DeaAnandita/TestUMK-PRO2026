<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $rooms = Room::when($search, function ($query) use ($search) {
            $query->where('kode_ruang', 'like', "%$search%")
                ->orWhere('nama_ruang', 'like', "%$search%")
                ->orWhere('gedung', 'like', "%$search%");
        })
        ->latest()
        ->paginate(10)
        ->withQueryString();

        return view('rooms.index', compact('rooms', 'search'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(StoreRoomRequest $request)
    {
        Room::create($request->validated());

        return redirect()
            ->route('rooms.index')
            ->with('success', 'Ruangan berhasil ditambahkan.');
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(UpdateRoomRequest $request, Room $room)
    {
        $room->update($request->validated());

        return redirect()
            ->route('rooms.index')
            ->with('success', 'Ruangan berhasil diubah.');
    }

    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()
            ->route('rooms.index')
            ->with('success', 'Ruangan berhasil dihapus.');
    }
}