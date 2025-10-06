<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <title>TravelEase - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}?v=1.0">

</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <span class="logo-icon">✈</span>
                <h1>TravelEase</h1>
            </div>

            <div class="nav-menu">
                <ul>
                    <li><a href="#" class="active"><span class="nav-icon">📊</span> Dashboard</a></li>
                    <li><a href="#"><span class="nav-icon">🎫</span> Tiket</a></li>
                    <li><a href="#"><span class="nav-icon">🗺</span> Rute & Navigasi</a></li>
                    <li><a href="#"><span class="nav-icon">📍</span> Pelacakan</a></li>
                    <li><a href="/estimasi-biaya"><span class="nav-icon">💰</span> Estimasi Biaya</a></li>
                    <li><a href="#"><span class="nav-icon">📝</span> Rencana Travel</a></li>
                    <li><a href="#"><span class="nav-icon">🏖</span> Destinasi</a></li>
                    <li><a href="#"><span class="nav-icon">⭐</span> Ulasan</a></li>
                    <li><a href="/chatting"><span class="nav-icon">🤖</span> Tanya Travelbot!</a></li>
                    <li><a href="#"><span class="nav-icon">⚙</span> Pengaturan</a></li>
                </ul>
            </div>

            <div class="user-profile">
                <div class="avatar">A</div>
                <div class="user-info">
                    <div class="user-name">Andi Pratama</div>
                    <div class="user-role">Traveler</div>
                </div>
            </div>
        </div>

        @yield('contents')


    </div>
</body>
