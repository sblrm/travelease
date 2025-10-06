<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan - TravelEase</title>
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
      
        h1 {
            color: #007bff;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .review-section {
            margin-top: 40px;
            text-align: left;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .review-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-height: 600px;
            overflow-y: auto;
            padding: 10px;
            width: 100%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 20px;
        }
        .review {
            background: linear-gradient(135deg, #f9f9f9, #ffffff);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: transform 0.3s;
        }
        .review:hover {
            transform: scale(1.02);
        }
        .review h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }
        .review p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }
        .review span {
            font-size: 14px;
            color: #ff9800;
            font-weight: bold;
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
        <h1>Ulasan Pengguna</h1>
        <div class="review-section">
            <div class="review-container">
                <div class="review">
                    <h3>Arya</h3>
                    <p>Pelayanan sangat baik! Tiket cepat didapatkan.</p>
                    <span>⭐ 5.0</span>
                </div>
                <div class="review">
                    <h3>Putri</h3>
                    <p>Harga cukup bersaing dan banyak promo.</p>
                    <span>⭐ 4.5</span>
                </div>
                <div class="review">
                    <h3>Budi</h3>
                    <p>Proses pembelian mudah dan tidak ribet.</p>
                    <span>⭐ 4.8</span>
                </div>
                <div class="review">
                    <h3>Siti</h3>
                    <p>Sayangnya customer service agak lambat merespons.</p>
                    <span>⭐ 3.9</span>
                </div>
                <div class="review">
                    <h3>Dewi</h3>
                    <p>Pilihan tiket banyak dan mudah dicari.</p>
                    <span>⭐ 4.7</span>
                </div>
                <div class="review">
                    <h3>Andi</h3>
                    <p>Pembayaran aman dan cepat diproses.</p>
                    <span>⭐ 4.6</span>
                </div>
                <div class="review">
                    <h3>Rina</h3>
                    <p>Aplikasi sangat user-friendly dan nyaman digunakan.</p>
                    <span>⭐ 4.9</span>
                </div>
                <div class="review">
                    <h3>Fajar</h3>
                    <p>Promo yang ditawarkan benar-benar menguntungkan!</p>
                    <span>⭐ 5.0</span>
                </div>
                <div class="review">
                    <h3>Vina</h3>
                    <p>Tiket yang saya beli sesuai dengan ekspektasi.</p>
                    <span>⭐ 4.8</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
