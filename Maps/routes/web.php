<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LocationController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/route-map', function (Request $request) {
    return view('route-map', [
        'origin' => $request->get('origin'),
        'destination' => $request->get('destination')
    ]);
});

Route::get('/chatting', function () {
    return view('chatting');
});

Route::get('/estimasi-biaya', function () {
    return view('estimasi-biaya');
});

// <ul>
// <li><a href="/" class="active"><span class="nav-icon">📊</span> Dashboard</a></li>
// <li><a href="ticket"><span class="nav-icon">🎫</span> Tiket</a></li>
// <li><a href="#"><span class="nav-icon">🗺</span> Rute & Navigasi</a></li>
// <li><a href="#"><span class="nav-icon">📍</span> Pelacakan</a></li>
// <li><a href="/estimasi-biaya"><span class="nav-icon">💰</span> Estimasi Biaya</a></li>
// <li><a href="/rencana"><span class="nav-icon">📝</span> Rencana Travel</a></li>
// <li><a href="/destinasi"><span class="nav-icon">🏖</span> Destinasi</a></li>
// <li><a href="/ulasan"><span class="nav-icon">⭐</span> Ulasan</a></li>
// <li><a href="/chatting"><span class="nav-icon">🤖</span> Tanya Travelbot!</a></li>
// <li><a href="/pengaturan"><span class="nav-icon">⚙</span> Pengaturan</a></li>
// </ul>

Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/estimasi-biaya', function () {
    return view('estimasi-biaya');
});

Route::get('/rencana', function () {
    return view('rencana');
});

Route::get('/destinasi', function () {
    return view('destinasi');
});

Route::get('/ulasan', function () {
    return view('ulasan');
});

Route::get('/pengaturan', function () {
    return view('pengaturan');
});

Route::post('/chatbot', [LocationController::class, 'sendMessage']);

Route::post('/submit-location', [LocationController::class, 'submitLocation']);
