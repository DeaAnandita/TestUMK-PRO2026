# Sistem Peminjaman Ruang

Sistem Peminjaman Ruang merupakan aplikasi berbasis web yang digunakan untuk mengelola proses peminjaman ruang secara terkomputerisasi. Sistem ini menyediakan dua hak akses pengguna, yaitu Admin dan Dosen.

Admin dapat mengelola data ruangan, melakukan sinkronisasi data ruang dari Web Service, melihat seluruh pengajuan peminjaman, serta melakukan persetujuan atau penolakan pengajuan. Sedangkan Dosen dapat melihat informasi ruang yang tersedia, melakukan pengajuan peminjaman, dan memantau status peminjaman yang telah diajukan.


## Teknologi yang Digunakan

- Laravel 9
- PHP 8.0+
- MySQL
- Tailwind CSS
- Laravel Breeze Authentication
- PHPUnit


## Fitur Aplikasi

### Authentication
- Login Admin dan Dosen
- Sistem Role dan Middleware untuk pembatasan akses


### Manajemen Data Ruang
- Melihat daftar ruang
- Menambah data ruang
- Mengubah data ruang
- Menghapus data ruang
- Sinkronisasi data ruang melalui Web Service


### Peminjaman Ruang
- Pengajuan peminjaman ruang oleh Dosen
- Melihat riwayat peminjaman
- Approval atau Reject pengajuan oleh Admin
- Validasi bentrok jadwal peminjaman pada ruang yang sama


### Dashboard
Admin:
- Total jumlah ruang
- Total peminjaman
- Jumlah pengajuan menunggu
- Jumlah peminjaman disetujui
- Jumlah peminjaman ditolak
- Jumlah peminjaman selesai


Dosen:
- Total pengajuan
- Jumlah peminjaman disetujui
- Jumlah pengajuan menunggu
- Riwayat peminjaman terbaru


### Pencarian dan Filter
- Pencarian data ruang berdasarkan kode, nama, gedung, dan fasilitas
- Filter ruang berdasarkan gedung dan status
- Filter peminjaman berdasarkan status dan tanggal


# Instalasi


## 1. Clone Repository

```bash
git clone https://github.com/username/sistem-peminjaman-ruang.git