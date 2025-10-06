<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rencana Travel - TravelEase</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h1 {
            color: #007bff;
        }
        .destination-category {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .trip-step {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .trip-icon {
            font-size: 20px;
        }
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <a href="index.html" class="back-button">Kembali</a>
    <div class="container">
        <h1>Rencana Travel</h1>
        
        <div class="destination-category">
            <h2>🌴 Bali</h2>
            <div class="trip-step"><span class="trip-icon">📍</span><strong>08:00 - Garuda Wisnu Kencana</strong> - Menyaksikan patung ikonik dan taman budaya (Tiket: Rp 125.000, Buka: 08:00 - 21:00).</div>
            <div class="trip-step"><span class="trip-icon">🌊</span><strong>10:00 - Tanah Lot</strong> - Pura indah di atas karang dengan pemandangan laut spektakuler (Tiket: Rp 60.000, Buka: 07:00 - 19:00).</div>
            <div class="trip-step"><span class="trip-icon">🏖️</span><strong>13:00 - Pantai Pandawa</strong> - Pantai indah dengan tebing megah (Gratis, Buka: 24 Jam).</div>
            <div class="trip-step"><span class="trip-icon">🌅</span><strong>17:00 - Uluwatu</strong> - Menyaksikan tari Kecak dengan latar sunset (Tiket: Rp 100.000, Buka: 07:00 - 19:00).</div>
        </div>

        <div class="destination-category">
            <h2>🏯 Yogyakarta</h2>
            <div class="trip-step"><span class="trip-icon">🕌</span><strong>08:00 - Candi Borobudur</strong> - Candi Buddha terbesar di dunia dengan panorama sunrise yang menakjubkan (Tiket: Rp 50.000, Buka: 06:00 - 17:00).</div>
            <div class="trip-step"><span class="trip-icon">🏰</span><strong>10:30 - Keraton Yogyakarta</strong> - Istana kerajaan penuh sejarah (Tiket: Rp 15.000, Buka: 08:00 - 14:00).</div>
            <div class="trip-step"><span class="trip-icon">🛍️</span><strong>14:00 - Jalan Malioboro</strong> - Pusat perbelanjaan oleh-oleh khas Yogyakarta.</div>
            <div class="trip-step"><span class="trip-icon">🌃</span><strong>18:00 - Alun-Alun Kidul</strong> - Suasana malam dengan becak warna-warni.</div>
        </div>

        <div class="destination-category">
            <h2>⛰️ Lombok</h2>
            <div class="trip-step"><span class="trip-icon">🏝️</span><strong>09:00 - Gili Trawangan</strong> - Pulau eksotis dengan air jernih dan pasir putih (Tiket: Rp 50.000, Open: 24 Jam).</div>
            <div class="trip-step"><span class="trip-icon">⛺</span><strong>14:00 - Gunung Rinjani</strong> - Trekking menuju gunung tertinggi di NTB (Tiket: Rp 150.000).</div>
            <div class="trip-step"><span class="trip-icon">🌆</span><strong>18:00 - Pantai Senggigi</strong> - Menikmati sunset dan kuliner khas Lombok.</div>
        </div>

        <div class="destination-category">
            <h2>🐉 Labuan Bajo</h2>
            <div class="trip-step"><span class="trip-icon">🦎</span><strong>08:00 - Pulau Komodo</strong> - Bertemu Komodo, kadal terbesar di dunia (Tiket: Rp 150.000, Buka: 07:00 - 17:00).</div>
            <div class="trip-step"><span class="trip-icon">🏖️</span><strong>12:00 - Pink Beach</strong> - Pantai unik dengan pasir merah muda (Gratis, Buka: 24 Jam).</div>
            <div class="trip-step"><span class="trip-icon">🚤</span><strong>15:00 - Pulau Padar</strong> - Trekking untuk melihat pemandangan ikonik Labuan Bajo.</div>
            <div class="trip-step"><span class="trip-icon">🌅</span><strong>18:00 - Bukit Cinta</strong> - Menikmati sunset terbaik di Labuan Bajo.</div>
        </div>
    </div>
</body>
</html>