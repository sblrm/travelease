<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata - TravelEase</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            text-align: center;
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
        .destinations {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding: 10px;
        }
        .destination {
            min-width: 250px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            text-align: left;
        }
        .destination img {
            width: 100%;
            border-radius: 10px;
        }
        .rating {
            color: #ffcc00;
            font-size: 18px;
        }
        p {
            font-size: 14px;
            color: #333;
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
        <h1>Destinasi Wisata</h1>
        
        <div class="destination-category">
            <h2>Bali</h2>
            <div class="destinations">
                <div class="destination">
                    <img src="/images/Garuda Wisnu Kencana.jpg" alt="GWK">
                    <h3>Garuda Wisnu Kencana</h3>
                    <p>Tiket: Rp 125.000</p>
                    <p>Patung budaya raksasa dan taman luas.</p>
                    <div class="rating">★★★★★</div>
                </div>
                <div class="destination">
                    <img src="/images/Tanah Lot.jpg" alt="Tanah Lot">
                    <h3>Tanah Lot</h3>
                    <p>Tiket: Rp 60.000</p>
                    <p>Pura unik di atas batu karang tujuan utama turis.</p>
                    <div class="rating">★★★★★</div>
                </div>
                <div class="destination">
                    <img src="/images/Ubud.jpg" alt="Ubud">
                    <h3>Ubud</h3>
                    <p>Gratis</p>
                    <p>Pusat seni dan budaya dan pasar tradisional di Bali.</p>
                    <div class="rating">★★★★☆</div>
                </div>
                <div class="destination">
                    <img src="/images/Pantai Kuta.jpg" alt="Pantai Kuta">
                    <h3>Pantai Kuta</h3>
                    <p>Gratis</p>
                    <p>Pantai terkenal dengan ombak yang indah.</p>
                    <div class="rating">★★★★☆</div>
                </div>
            </div>
        </div>
        
        <div class="destination-category">
            <h2>Yogyakarta</h2>
            <div class="destinations">
                <div class="destination">
                    <img src="/images/Candi Borobudur.png" alt="Borobudur">
                    <h3>Candi Borobudur</h3>
                    <p>Tiket: Rp 50.000</p>
                    <p>Candi Buddha terbesar di dunia.</p>
                    <div class="rating">★★★★★</div>
                </div>
                <div class="destination">
                    <img src="/images/Jalan Malioboro.jpg" alt="Malioboro">
                    <h3>Jalan Malioboro</h3>
                    <p>Gratis</p>
                    <p>Pusat perbelanjaan khas Yogyakarta.</p>
                    <div class="rating">★★★★☆</div>
                </div>
                <div class="destination">
                    <img src="/images/Keraton Yogyakarta.jpg" alt="Keraton Yogyakarta">
                    <h3>Keraton Yogyakarta</h3>
                    <p>Tiket: Rp 15.000</p>
                    <p>Istana Sultan Yogyakarta.</p>
                    <div class="rating">★★★★☆</div>
                </div>
                <div class="destination">
                    <img src="/images/Taman Sari.jpg" alt="Taman Sari">
                    <h3>Taman Sari</h3>
                    <p>Tiket: Rp 10.000</p>
                    <p>Kompleks pemandian kerajaan.</p>
                    <div class="rating">★★★★☆</div>
                </div>
            </div>
        </div>
        
        <div class="destination-category">
            <h2>Lombok</h2>
            <div class="destinations">
                <div class="destination">
                    <img src="/images/Gili Trawangan.jpg" alt="Gili Trawangan">
                    <h3>Gili Trawangan</h3>
                    <p>Tiket: Rp 50.000</p>
                    <p>Pulau eksotis dengan pasir putih.</p>
                    <div class="rating">★★★★★</div>
                </div>
                <div class="destination">
                    <img src="/images/Gunung Rinjani.jpg" alt="Gunung Rinjani">
                    <h3>Gunung Rinjani</h3>
                    <p>Tiket: Rp 150.000</p>
                    <p>Pendakian gunung tertinggi di NTB.</p>
                    <div class="rating">★★★★★</div>
                </div>
                <div class="destination">
                    <img src="/images/Pantai Pink.jpg" alt="Pantai Pink">
                    <h3>Pantai Pink</h3>
                    <p>Tiket: Rp 10.000</p>
                    <p>Pantai dengan pasir berwarna pink.</p>
                    <div class="rating">★★★★☆</div>
                </div>
                <div class="destination">
                    <img src="/images/Air Terjun Sendang Gile.webp" alt="Sendang Gile">
                    <h3>Air Terjun Sendang Gile</h3>
                    <p>Tiket: Rp 10.000</p>
                    <p>Air terjun yang indah di Lombok.</p>
                    <div class="rating">★★★★☆</div>
                </div>
            </div>
        </div>
            <div class="destination-category">
            <h2>Labuan Bajo</h2>
            <div class="destinations">
                <div class="destination">
                    <img src="/images/Pulau Komodo.jpg" alt="Pulau Komodo">
                    <h3>Pulau Komodo</h3>
                    <p>Tiket: Rp 150.000</p>
                    <p>Habitat asli Komodo, spesies langka dunia.</p>
                    <div class="rating">★★★★★</div>
                </div>
                <div class="destination">
                    <img src="/images/Pink Beach.jpg" alt="Pink Beach">
                    <h3>Pink Beach</h3>
                    <p>Tiket: Rp 50.000</p>
                    <p>Pantai dengan pasir unik berwarna pink yang memanjakan mata.</p>
                    <div class="rating">★★★★★</div>
                </div>
                <div class="destination">
                    <img src="/images/Pulau Padar.jpg" alt="Pulau Padar">
                    <h3>Pulau Padar</h3>
                    <p>Tiket: Rp 100.000</p>
                    <p>Pemandangan spektakuler dari puncak bukit.</p>
                    <div class="rating">★★★★☆</div>
                </div>
                <div class="destination">
                    <img src="/images/Gua Rangko.jpg" alt="Gua Rangko">
                    <h3>Gua Rangko</h3>
                    <p>Tiket: Rp 75.000</p>
                    <p>Kolam alami dalam gua yang eksotis dan bersejarah.</p>
                    <div class="rating">★★★★☆</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
