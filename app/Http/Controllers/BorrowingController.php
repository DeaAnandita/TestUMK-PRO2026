<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBorrowingRequest;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with('room')
            ->where('user_id', auth()->id())
            ->latest()
            ->paginate(10);

        return view('borrowings.index', compact('borrowings'));
    }

    public function create()
    {
        $rooms = Room::where('status',1)->get();

        return view('borrowings.create', compact('rooms'));
    }

    public function edit(Borrowing $borrowing)
    {
        if ($borrowing->user_id != auth()->id()) {
            abort(403);
        }

        if ($borrowing->status != 'Menunggu') {
            return redirect()
                ->route('borrowings.index')
                ->with('error', 'Pengajuan yang sudah diproses tidak dapat diubah.');
        }

        $rooms = Room::where('status', 1)->get();

        return view('borrowings.edit', compact('borrowing', 'rooms'));
    }

    public function update(UpdateBorrowingRequest $request, Borrowing $borrowing)
    {
        if ($borrowing->user_id != auth()->id()) {
            abort(403);
        }

        if ($borrowing->status != 'Menunggu') {
            return redirect()
                ->route('borrowings.index')
                ->with('error', 'Pengajuan yang sudah diproses tidak dapat diubah.');
        }

        $borrowing->update($request->validated());

        return redirect()
            ->route('borrowings.index')
            ->with('success', 'Pengajuan berhasil diperbarui.');
    }

    public function store(StoreBorrowingRequest $request)
    {
        Borrowing::create([
            'user_id' => auth()->id(),
            'room_id' => $request->room_id,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'keperluan' => $request->keperluan,
            'status' => 'Menunggu'
        ]);

        return redirect()
            ->route('borrowings.index')
            ->with('success','Pengajuan berhasil dibuat.');
    }
}