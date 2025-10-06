<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket - TravelEase</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 40%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #007bff;
        }
        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pesan Tiket</h1>
        <form action="confirm.html" method="POST">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="tujuan">Tujuan</label>
            <select id="tujuan" name="tujuan" required>
                <option value="bali">Bali - Denpasar (DPS)</option>
                <option value="yogyakarta">Yogyakarta (JOG)</option>
                <option value="lombok">Lombok (LOP)</option>
                <option value="labuanbajo">Labuan Bajo (LBJ)</option>
            </select>
            
            <label for="tanggal">Tanggal Keberangkatan</label>
            <input type="date" id="tanggal" name="tanggal" required>
            
            <label for="jumlah">Jumlah Penumpang</label>
            <input type="number" id="jumlah" name="jumlah" min="1" required>
            
            <button type="submit">Pesan Sekarang</button>
        </form>
    </div>
</body>
</html>