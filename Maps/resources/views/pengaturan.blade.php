<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - TravelEase</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eef2f7;
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

        h1 {
            color: #007bff;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .settings-section {
            margin-top: 40px;
            text-align: left;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .settings-container {
            width: 100%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 20px;
        }
        .profile {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        .profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }
        .profile h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
        .settings-list {
            list-style: none;
            padding: 0;
        }
        .settings-list li {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
            color: #555;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .settings-list li:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.html" class="back-button">Kembali</a>
        <h1>Pengaturan</h1>
        <div class="settings-section">
            <div class="settings-container">
                <div class="profile">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="User Profile">
                    <h3>User</h3>
                </div>
                <ul class="settings-list">
                    <li>Edit Profil <span>&#9654;</span></li>
                    <li>Keamanan <span>&#9654;</span></li>
                    <li>Notifikasi <span>&#9654;</span></li>
                    <li>Privasi <span>&#9654;</span></li>
                    <li>Langganan Saya <span>&#9654;</span></li>
                    <li>Bantuan & Dukungan <span>&#9654;</span></li>
                    <li>Syarat dan Kebijakan <span>&#9654;</span></li>
                    <li>Hapus Cache <span>&#9654;</span></li>
                    <li>Mode Hemat Data <span>&#9654;</span></li>
                    <li>Laporkan Masalah <span>&#9654;</span></li>
                    <li>Tambah Akun <span>&#9654;</span></li>
                    <li>Keluar <span>&#9654;</span></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
