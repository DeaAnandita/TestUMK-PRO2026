<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    public function run(): void
    {

        $rooms = [
            [
                'kode_ruang' => 'A101',
                'nama_ruang' => 'Ruang Kuliah A101',
                'gedung' => 'Gedung A',
                'kapasitas' => 30,
                'fasilitas' => 'Proyektor, AC',
            ],
            [
                'kode_ruang' => 'A102',
                'nama_ruang' => 'Ruang Kuliah A102',
                'gedung' => 'Gedung A',
                'kapasitas' => 40,
                'fasilitas' => 'Proyektor, AC',
            ],
            [
                'kode_ruang' => 'B201',
                'nama_ruang' => 'Ruang Kuliah B201',
                'gedung' => 'Gedung B',
                'kapasitas' => 35,
                'fasilitas' => 'LCD, AC',
            ],
            [
                'kode_ruang' => 'B202',
                'nama_ruang' => 'Ruang Kuliah B202',
                'gedung' => 'Gedung B',
                'kapasitas' => 50,
                'fasilitas' => 'LCD, AC',
            ],
            [
                'kode_ruang' => 'LAB01',
                'nama_ruang' => 'Lab Komputer 1',
                'gedung' => 'Gedung C',
                'kapasitas' => 25,
                'fasilitas' => 'PC, Internet, AC',
            ],
            [
                'kode_ruang' => 'LAB02',
                'nama_ruang' => 'Lab Komputer 2',
                'gedung' => 'Gedung C',
                'kapasitas' => 25,
                'fasilitas' => 'PC, Internet, AC',
            ],
            [
                'kode_ruang' => 'LAB03',
                'nama_ruang' => 'Lab Multimedia',
                'gedung' => 'Gedung C',
                'kapasitas' => 20,
                'fasilitas' => 'PC, Speaker, Proyektor',
            ],
            [
                'kode_ruang' => 'SEM01',
                'nama_ruang' => 'Ruang Seminar',
                'gedung' => 'Gedung D',
                'kapasitas' => 100,
                'fasilitas' => 'Sound System, Proyektor',
            ],
            [
                'kode_ruang' => 'SID01',
                'nama_ruang' => 'Ruang Sidang',
                'gedung' => 'Gedung D',
                'kapasitas' => 20,
                'fasilitas' => 'TV, AC',
            ],
            [
                'kode_ruang' => 'AULA01',
                'nama_ruang' => 'Aula Universitas',
                'gedung' => 'Gedung Utama',
                'kapasitas' => 300,
                'fasilitas' => 'Sound System, LED Display',
            ],
        ];

        foreach ($rooms as $room) {
            Room::create($room);
        }
    }
}