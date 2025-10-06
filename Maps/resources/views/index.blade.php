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
                    <li><a href="/" class="active"><span class="nav-icon">📊</span> Dashboard</a></li>
                    <li><a href="ticket"><span class="nav-icon">🎫</span> Tiket</a></li>
                    {{-- <li><a href="#"><span class="nav-icon">🗺</span> Rute & Navigasi</a></li>
                    <li><a href="#"><span class="nav-icon">📍</span> Pelacakan</a></li> --}}
                    <li><a href="/estimasi-biaya"><span class="nav-icon">💰</span> Estimasi Biaya</a></li>
                    <li><a href="/rencana"><span class="nav-icon">📝</span> Rencana Travel</a></li>
                    <li><a href="/destinasi"><span class="nav-icon">🏖</span> Destinasi</a></li>
                    <li><a href="/ulasan"><span class="nav-icon">⭐</span> Ulasan</a></li>
                    <li><a href="/chatting"><span class="nav-icon">🤖</span> Tanya Travelbot!</a></li>
                    <li><a href="/pengaturan"><span class="nav-icon">⚙</span> Pengaturan</a></li>
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

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <div class="search-bar">
                    <span class="search-icon">🔍</span>
                    <input type="text" placeholder="Cari destinasi, hotel, atau aktivitas...">
                </div>
                <div class="notification">
                    🔔
                    <span class="notification-badge">3</span>
                </div>
            </div>

            <!-- Dashboard Overview Cards -->
            <div class="cards-container">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Perjalanan Mendatang</div>
                        <div class="card-icon blue">✈</div>
                    </div>
                    <div class="card-value">2</div>
                    <div class="card-description">Perjalanan dalam 30 hari ke depan</div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Total Pengeluaran</div>
                        <div class="card-icon green">💰</div>
                    </div>
                    <div class="card-value">Rp 8,5jt</div>
                    <div class="card-description">Bulan ini</div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Destinasi Dikunjungi</div>
                        <div class="card-icon yellow">🏖</div>
                    </div>
                    <div class="card-value">12</div>
                    <div class="card-description">Dari 50 daftar keinginan</div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ulasan Diberikan</div>
                        <div class="card-icon red">⭐</div>
                    </div>
                    <div class="card-value">8</div>
                    <div class="card-description">Dari 15 perjalanan</div>
                </div>
            </div>

            <!-- Tabs -->
            <div class="tabs">
                <div class="tab active">Ringkasan</div>
                <div class="tab">Perjalanan Terakhir</div>
                <div class="tab">Aktivitas</div>
                <div class="tab">Rekomendasi</div>
            </div>

            <!-- Navigasi & Rute Perjalanan -->
            <div class="section">
                <div class="section-header">
                    <div class="section-title">Navigasi & Rute Perjalanan</div>
                </div>

                <div class="route-details">
                    <select id="originSelect" class="route-point-dropdown"></select>
                    <div class="route-arrow">➡</div>
                    <select id="destinationSelect" class="route-point-dropdown"></select>

                    <button type="button" class="submit-button" onclick="drawRoute()">
                        Tampilkan Rute
                    </button>
                </div>

                <div id="map" style="width: 100%; height: 500px;"></div>
            </div>

            <!-- Pelacakan Lokasi -->
            <div class="section">
                <div class="section-header">
                    <div class="section-title">Pelacakan Lokasi</div>
                    <button class="more-button" id="activate-tracking">Aktifkan</button>
                </div>

                <div class="map-container">
                    <div id="tracking-iframe-container" style="margin-top: 20px;"></div>
                </div>

                <div class="route-metrics">
                    <div class="metric">
                        <span class="metric-icon">📍</span> Lokasi Saat Ini: Malioboro, Yogyakarta
                    </div>
                    <div class="metric">
                        <span class="metric-icon">👥</span> 3 Anggota Grup Terdeteksi
                    </div>
                    <div class="metric">
                        <span class="metric-icon">🔋</span> GPS Aktif (Baterai 85%)
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-header">
                    <div class="section-title">Estimasi Biaya Perjalanan</div>
                    {{-- <button class="more-button">Edit Anggaran</button> --}}
                </div>

                <div class="cost-summary">
                    <div class="cost-card">
                        <div class="cost-title">Total Anggaran</div>
                        <div class="cost-value">Rp 8.500.000</div>
                    </div>

                    <div class="cost-card">
                        <div class="cost-title">Pengeluaran</div>
                        <div class="cost-value">Rp 5.250.000</div>
                    </div>

                    <div class="cost-card">
                        <div class="cost-title">Sisa</div>
                        <div class="cost-value">Rp 3.250.000</div>
                    </div>
                </div>

                <table class="cost-breakdown">
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Anggaran</th>
                            <th>Aktual</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Transportasi</td>
                            <td>Rp 3.000.000</td>
                            <td>Rp 2.750.000</td>
                            <td>✅ Dalam Anggaran</td>
                        </tr>
                        <tr>
                            <td>Akomodasi</td>
                            <td>Rp 2.500.000</td>
                            <td>Rp 1.800.000</td>
                            <td>✅ Dalam Anggaran</td>
                        </tr>
                        <tr>
                            <td>Makanan</td>
                            <td>Rp 1.500.000</td>
                            <td>Rp 750.000</td>
                            <td>✅ Dalam Anggaran</td>
                        </tr>
                        <tr>
                            <td>Aktivitas</td>
                            <td>Rp 1.000.000</td>
                            <td>Rp 750.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script>
// Tracking lokasi user
document.getElementById('activate-tracking').addEventListener('click', function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            const lat = position.coords.latitude;
            const lng = position.coords.longitude;

            fetch('/submit-location', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ latitude: lat, longitude: lng })
            })
            .then(response => response.text())
            .then(html => {
                document.getElementById('tracking-iframe-container').innerHTML = html;
            });
        }, function(error) {
            alert('Gagal mendapatkan lokasi: ' + error.message);
        });
    } else {
        alert('Geolocation tidak didukung di browser Anda.');
    }
});

// Data kota dan koordinat
const cities = [
    { name: "Jakarta (CGK)", lat: -6.2088, lng: 106.8456 },
    { name: "Yogyakarta (JOG)", lat: -7.7956, lng: 110.3695 },
    { name: "Bali - Denpasar (DPS)", lat: -8.6500, lng: 115.2167 },
    { name: "Lombok (LOP)", lat: -8.7573, lng: 116.2766 },
    { name: "Labuan Bajo (LBJ)", lat: -8.4961, lng: 119.8856 }
];

// Populate dropdown asal & tujuan
const originSelect = document.getElementById('originSelect');
const destinationSelect = document.getElementById('destinationSelect');

function populateSelect(selectElement, placeholderText) {
    const placeholder = document.createElement('option');
    placeholder.value = "";
    placeholder.textContent = placeholderText;
    selectElement.appendChild(placeholder);

    cities.forEach((city) => {
        const option = document.createElement('option');
        option.value = `${city.lat},${city.lng}`;
        option.textContent = city.name;
        selectElement.appendChild(option);
    });
}

populateSelect(originSelect, 'Pilih Asal');
populateSelect(destinationSelect, 'Pilih Tujuan');

// Inisialisasi Leaflet map
const map = L.map('map').setView([-8.65, 115.22], 7);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; OpenStreetMap'
}).addTo(map);

// Variabel marker & layer route
let originMarker = null;
let destMarker = null;
let routeLayer = null;

const originIcon = L.icon({
    iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
    iconSize: [30, 40],
    iconAnchor: [15, 40]
});

const destIcon = L.icon({
    iconUrl: 'https://cdn-icons-png.flaticon.com/512/149/149059.png',
    iconSize: [30, 40],
    iconAnchor: [15, 40]
});

async function drawRoute() {
    const originValue = originSelect.value;
    const destinationValue = destinationSelect.value;

    if (!originValue || !destinationValue) {
        alert("Pilih asal dan tujuan!");
        return;
    }

    const [originLat, originLng] = originValue.split(',').map(Number);
    const [destLat, destLng] = destinationValue.split(',').map(Number);

    if (originMarker) map.removeLayer(originMarker);
    if (destMarker) map.removeLayer(destMarker);
    if (routeLayer) map.removeLayer(routeLayer);

    originMarker = L.marker([originLat, originLng], { icon: originIcon }).addTo(map).bindPopup('Asal').openPopup();
    destMarker = L.marker([destLat, destLng], { icon: destIcon }).addTo(map).bindPopup('Tujuan').openPopup();

    const url = `https://api.openrouteservice.org/v2/directions/driving-car/geojson`;
    const body = {
        coordinates: [
            [originLng, originLat],
            [destLng, destLat]
        ]
    };

    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': '5b3ce3597851110001cf62484a7ecf4cebe14c2993b1ba6fbe8878c6' // Ganti dengan API key kamu!
            },
            body: JSON.stringify(body)
        });

        const geojson = await response.json();

        if (!geojson || !geojson.features || !geojson.features.length) {
            alert('Tidak ada rute ditemukan!');
            return;
        }

        routeLayer = L.geoJSON(geojson, {
            style: {
                color: 'blue',
                weight: 5,
                opacity: 0.8
            }
        }).addTo(map);

        map.fitBounds(routeLayer.getBounds());
    } catch (error) {
        console.error('Gagal memuat rute:', error);
        alert('Terjadi kesalahan saat mengambil rute!');
    }
}
</script>
