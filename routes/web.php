<?php

use App\Livewire\Admin\BookingIndex;
use App\Livewire\Admin\Car\CarCreate;
use App\Livewire\Admin\Car\CarEdit;
use App\Livewire\Admin\Car\CarIndex;
use App\Livewire\Admin\CustomerIndex;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\HistoryIndex;
use App\Livewire\Admin\Slider\SliderCreate;
use App\Livewire\Admin\Slider\SliderIndex;
use App\Livewire\Home\History;
use App\Livewire\Home\Homepage;
use App\Livewire\Home\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', Homepage::class)->name('home');
Route::get('/sukses/{id}', Success::class)->name('success');
Route::get('/histori-booking', History::class)->name('history');

//PREFIX
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', Dashboard::class)->name('admin.dashboard');
    Route::get('/daftar-mobil', CarIndex::class)->name('admin.daftar-mobil.index');
    Route::get('/daftar-mobil/buat', CarCreate::class)->name('admin.daftar-mobil.create');
    Route::get('/daftar-mobil/{id}/edit', CarEdit::class)->name('admin.daftar-mobil.edit');

    Route::get('/slider', SliderIndex::class)->name('admin.slider.index');
    Route::get('/slider/buat', SliderCreate::class)->name('admin.slider.create');

    Route::get('/booking', BookingIndex::class)->name('admin.booking.index');
    Route::get('/histori', HistoryIndex::class)->name('admin.history.index');
    Route::get('/pelanggan', CustomerIndex::class)->name('admin.customer.index');
});

Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
