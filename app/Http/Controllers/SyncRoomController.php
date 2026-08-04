<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Support\Facades\Http;

class SyncRoomController extends Controller
{
    public function sync()
    {
        $response = Http::timeout(30)
            ->get('https://api-ruangan.vercel.app/rooms');

        if (!$response->successful()) {
            return back()->with(
                'error',
                'Gagal mengambil data dari Web Service.'
            );
        }

        $rooms = $response->json();

        foreach ($rooms as $room) {

            Room::updateOrCreate(

                [
                    'kode_ruang' => $room['kode_ruang'],
                ],

                [
                    'nama_ruang' => $room['nama_ruangan'],
                    'gedung' => $room['nama_gedung'],
                    'kapasitas' => $room['kapasitas_ruang'],
                    'fasilitas' => $room['jenis_ruang'],
                    'status' => true,
                ]

            );
        }

        return back()->with(
            'success',
            'Sinkronisasi berhasil.'
        );
    }
}