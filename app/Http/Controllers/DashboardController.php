<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Borrowing;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRoom = Room::count();
        $totalBorrowing = Borrowing::count();
        $waiting = Borrowing::where('status', 'Menunggu')->count();
        $approved = Borrowing::where('status', 'Disetujui')->count();
        $rejected = Borrowing::where('status', 'Ditolak')->count();
        $finished = Borrowing::where('status', 'Selesai')->count();

        return view('dashboard', compact(
            'totalRoom',
            'totalBorrowing',
            'waiting',
            'approved',
            'rejected',
            'finished'
        ));
    }
}