<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\Landingpage\Index::class, 'render'])->name('landingpage');
Route::get('/pilih-pinjaman', [App\Http\Controllers\Landingpage\Product::class, 'render'])->name('product');
Route::get('/detail-pinjaman/{id}', [App\Http\Controllers\Landingpage\DetailProduct::class, 'render'])->name('detail-produk');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', \App\Http\Livewire\Dashboards\Index::class)->name('dashboard');
// Proses Transaksi
Route::get('/proses-transaksi', \App\Http\Livewire\Process\ProcessTransaction\Index::class)->name('process-transaction');
// User
Route::get('/pengguna', \App\Http\Livewire\Dashboards\User\Index::class)->name('user');
Route::get('/pengguna-data', [App\Http\Controllers\Datatable\User::class, 'render'])->name('user.data');
Route::get('/ubah-pengguna/{id}', \App\Http\Livewire\Dashboards\User\Edit::class)->name('user.edit');
Route::get('/profil', \App\Http\Livewire\Dashboards\Profile\Index::class)->name('profile');
// History
Route::get('/riwayat', \App\Http\Livewire\Dashboards\Histories\Index::class)->name('riwayat');
Route::get('/riwayat-data', [App\Http\Controllers\Datatable\History::class, 'render'])->name('riwayat.data');
Route::get('/detail-riwayat/{id}', \App\Http\Livewire\Dashboards\Histories\Details\Index::class)->name('riwayat.detail');
