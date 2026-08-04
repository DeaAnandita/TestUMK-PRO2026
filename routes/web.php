<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\SyncRoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

});

Route::middleware(['auth','admin'])->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

});

Route::middleware(['auth','dosen'])->group(function () {

    Route::get('/dosen/dashboard', function () {
        return view('dosen.dashboard');
    });

});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::resource('rooms', RoomController::class);

}); 

Route::middleware(['auth','dosen'])->group(function () {

    Route::resource('borrowings', BorrowingController::class);

});

Route::middleware(['auth','admin'])->group(function () {

    Route::get('/approvals',[ApprovalController::class,'index'])
        ->name('approvals.index');

    Route::put('/approvals/{borrowing}/approve',
        [ApprovalController::class,'approve'])
        ->name('approvals.approve');

    Route::put('/approvals/{borrowing}/reject',
        [ApprovalController::class,'reject'])
        ->name('approvals.reject');

});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::post('/rooms/sync', [SyncRoomController::class, 'sync'])
        ->name('rooms.sync');

});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
