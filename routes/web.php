<?php

use App\Http\Controllers\BuyAccountController;
use App\Http\Controllers\PenitipanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopUpController;
use App\Models\GamesData;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
})->name('topup');

Route::get('/beli-akun', function () {
    return view('beli-akun');
})->name('beli-akun');

Route::get('/dashboard', function () {
    $role = auth()->user()->role;
    if ($role == 'Admin') {
        $daftarPemesanan = DB::table('orders')->latest()->get();
        foreach ($daftarPemesanan as $pemesanan) {
            $game = GamesData::getGameById($pemesanan->game_id);
            $pemesanan->game = $game;
        }

        return view('dashboard', [
            'daftarPemesanan' => $daftarPemesanan,
        ]);
    }

    $userId = auth()->user()->id;
    $daftarPemesanan =DB::table('orders')->where('user_id', $userId)->latest()->get();
    foreach ($daftarPemesanan as $pemesanan) {
        $game = GamesData::getGameById($pemesanan->game_id);
        $pemesanan->game = $game;
    }

    return view('customer-dashboard', [
        'daftarPemesanan' => $daftarPemesanan,
    ]);

})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/topup/{id}', [TopUpController::class, 'create'])->name('topup.create');
    Route::post('/topup/{id}', [TopUpController::class, 'store'])->name('topup.store');
    Route::put('/topup/{id}/status', [TopUpController::class, 'updateStatus'])->name('topup.update-status');

    Route::get('/buy-account/{id}', [BuyAccountController::class, 'create'])->name('buy-account.create');
    Route::post('/buy-account/{id}', [BuyAccountController::class, 'store'])->name('buy-account.store');
    Route::put('/buy-account/{id}/status', [BuyAccountController::class, 'updateStatus'])->name('buy-account.update-status');
});

require __DIR__.'/auth.php';
