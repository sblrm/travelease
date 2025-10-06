<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi - TravelEase</title>
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
        .destination {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
        .destination img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        p {
            font-size: 16px;
            color: #333;
        }
        .map {
            margin-top: 20px;
        }
        iframe {
            width: 100%;
            height: 300px;
            border-radius: 10px;
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

        <h1>Rute & Navigasi</h1>
        
        <div class="destination">
            <h2>Bali - Denpasar (DPS)</h2>
            <img src="bali.jpg" alt="Bali">
            <p>Jelajahi keindahan Bali dengan pantai yang menawan, budaya yang kaya, dan kehidupan malam yang luar biasa.</p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.8439094478915!2d115.18891961478502!3d-8.409517393855287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ec2f1a16a5%3A0x3030bfbca7cfc10!2sDenpasar%2C%20Bali!5e0!3m2!1sen!2sid!4v1635153445675!5m2!1sen!2sid" allowfullscreen=""></iframe>
            </div>
        </div>
        
        <div class="destination">
            <h2>Yogyakarta (JOG)</h2>
            <img src="yogyakarta.jpg" alt="Yogyakarta">
            <p>Yogyakarta adalah pusat budaya dan sejarah Indonesia dengan destinasi seperti Candi Borobudur dan Keraton Yogyakarta.</p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.304742872324!2d110.36948941477716!3d-7.795579994387087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5787c1e1a1db%3A0xa476ab1ef4b2a304!2sYogyakarta!5e0!3m2!1sen!2sid!4v1635153578967!5m2!1sen!2sid" allowfullscreen=""></iframe>
            </div>
        </div>
        
        <div class="destination">
            <h2>Lombok (LOP)</h2>
            <img src="lombok.jpg" alt="Lombok">
            <p>Lombok menawarkan pantai eksotis, Gunung Rinjani yang megah, dan pulau-pulau Gili yang menakjubkan.</p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.541902623238!2d116.10076861478179!3d-8.652933393776161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcc4774928c501b%3A0x3030bfbca7cfc50!2sLombok!5e0!3m2!1sen!2sid!4v1635153661234!5m2!1sen!2sid" allowfullscreen=""></iframe>
            </div>
        </div>
        
        <div class="destination">
            <h2>Labuan Bajo (LBJ)</h2>
            <img src="labuan_bajo.jpg" alt="Labuan Bajo">
            <p>Labuan Bajo terkenal dengan keindahan alamnya, Taman Nasional Komodo, serta surga bagi penyelam dan pencinta alam.</p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3938.940471647859!2d119.8761616147739!3d-8.48812099388647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db46665bf4b3e1f%3A0x3030bfbca7cfc20!2sLabuan%20Bajo!5e0!3m2!1sen!2sid!4v1635153721234!5m2!1sen!2sid" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</body>
</html>