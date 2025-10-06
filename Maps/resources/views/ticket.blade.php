<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket - TravelEase</title>
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
            position: relative;
        }
        h1 {
            color: #007bff;
        }
        .ticket-list {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .ticket {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 250px;
            text-align: center;
            padding: 15px;
            cursor: pointer;
        }
        .ticket img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }
        h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        p {
            font-size: 16px;
            color: #28a745;
            font-weight: bold;
        }
        span {
            font-size: 14px;
            color: #555;
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
    <div class="container">
        <a href="index.html" class="back-button">Kembali</a>
        <h1>Tiket</h1>
        <div class="ticket-list">
            <div class="ticket" onclick="location.href='bali.html'">
                <img src="/images/Pura Uluwatu.jpg" alt="Bali">
                <h2>Bali - Denpasar (DPS)</h2>
                <p>Rp 1.500.000</p>
                <span>⭐ 4.8 (240 ulasan)</span>
            </div>
            <div class="ticket" onclick="location.href='yogyakarta.html'">
                <img src="/images/Keraton Yogyakarta.jpg" alt="Yogyakarta">
                <h2>Yogyakarta (JOG)</h2>
                <p>Rp 950.000</p>
                <span>⭐ 4.6 (186 ulasan)</span>
            </div>
            <div class="ticket" onclick="location.href='lombok.html'">
                <img src="/images/Lombok.jpg" alt="Lombok">
                <h2>Lombok (LOP)</h2>
                <p>Rp 1.250.000</p>
                <span>⭐ 4.5 (120 ulasan)</span>
            </div>
            <div class="ticket" onclick="location.href='labuanbajo.html'">
                <img src="/images/Labuan Bajo.jpg" alt="Labuan Bajo">
                <h2>Labuan Bajo (LBJ)</h2>
                <p>Rp 2.100.000</p>
                <span>⭐ 4.9 (96 ulasan)</span>
            </div>
        </div>
    </div>
</body>
</html>