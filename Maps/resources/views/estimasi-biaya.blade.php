<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimasi Biaya Perjalanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px 40px;
            text-align: center;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #f1f1f1;
        }

        table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .total-cell {
            font-weight: bold;
            color: #007bff;
        }

        footer {
            margin-top: 40px;
            padding: 20px;
            text-align: center;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>

<header>
    <h1>Estimasi Biaya Perjalanan</h1>
</header>

<div class="container">
    <h2>Daftar Estimasi Antar Kota</h2>

    <table>
        <thead>
            <tr>
                <th>Asal</th>
                <th>Tujuan</th>
                <th>Transportasi</th>
                <th>Akomodasi</th>
                <th>Makanan</th>
                <th>Aktivitas</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $estimasiBiaya = [
                    ['asal' => 'Jakarta (CGK)', 'tujuan' => 'Yogyakarta (JOG)', 'transportasi' => 1200000, 'akomodasi' => 750000, 'makanan' => 500000, 'aktivitas' => 300000],
                    ['asal' => 'Jakarta (CGK)', 'tujuan' => 'Bali - Denpasar (DPS)', 'transportasi' => 1500000, 'akomodasi' => 1000000, 'makanan' => 600000, 'aktivitas' => 500000],
                    ['asal' => 'Jakarta (CGK)', 'tujuan' => 'Lombok (LOP)', 'transportasi' => 1700000, 'akomodasi' => 900000, 'makanan' => 550000, 'aktivitas' => 400000],
                    ['asal' => 'Jakarta (CGK)', 'tujuan' => 'Labuan Bajo (LBJ)', 'transportasi' => 2000000, 'akomodasi' => 1200000, 'makanan' => 600000, 'aktivitas' => 800000],

                    ['asal' => 'Yogyakarta (JOG)', 'tujuan' => 'Jakarta (CGK)', 'transportasi' => 1100000, 'akomodasi' => 700000, 'makanan' => 450000, 'aktivitas' => 300000],
                    ['asal' => 'Yogyakarta (JOG)', 'tujuan' => 'Bali - Denpasar (DPS)', 'transportasi' => 1300000, 'akomodasi' => 900000, 'makanan' => 500000, 'aktivitas' => 400000],
                    ['asal' => 'Yogyakarta (JOG)', 'tujuan' => 'Lombok (LOP)', 'transportasi' => 1600000, 'akomodasi' => 950000, 'makanan' => 500000, 'aktivitas' => 500000],
                    ['asal' => 'Yogyakarta (JOG)', 'tujuan' => 'Labuan Bajo (LBJ)', 'transportasi' => 1800000, 'akomodasi' => 1000000, 'makanan' => 550000, 'aktivitas' => 700000],

                    ['asal' => 'Bali - Denpasar (DPS)', 'tujuan' => 'Jakarta (CGK)', 'transportasi' => 1400000, 'akomodasi' => 950000, 'makanan' => 550000, 'aktivitas' => 400000],
                    ['asal' => 'Bali - Denpasar (DPS)', 'tujuan' => 'Yogyakarta (JOG)', 'transportasi' => 1250000, 'akomodasi' => 850000, 'makanan' => 500000, 'aktivitas' => 300000],
                    ['asal' => 'Bali - Denpasar (DPS)', 'tujuan' => 'Lombok (LOP)', 'transportasi' => 800000, 'akomodasi' => 700000, 'makanan' => 400000, 'aktivitas' => 300000],
                    ['asal' => 'Bali - Denpasar (DPS)', 'tujuan' => 'Labuan Bajo (LBJ)', 'transportasi' => 1200000, 'akomodasi' => 1000000, 'makanan' => 500000, 'aktivitas' => 600000],

                    ['asal' => 'Lombok (LOP)', 'tujuan' => 'Jakarta (CGK)', 'transportasi' => 1600000, 'akomodasi' => 850000, 'makanan' => 500000, 'aktivitas' => 350000],
                    ['asal' => 'Lombok (LOP)', 'tujuan' => 'Yogyakarta (JOG)', 'transportasi' => 1550000, 'akomodasi' => 800000, 'makanan' => 450000, 'aktivitas' => 400000],
                    ['asal' => 'Lombok (LOP)', 'tujuan' => 'Bali - Denpasar (DPS)', 'transportasi' => 750000, 'akomodasi' => 650000, 'makanan' => 400000, 'aktivitas' => 250000],
                    ['asal' => 'Lombok (LOP)', 'tujuan' => 'Labuan Bajo (LBJ)', 'transportasi' => 1000000, 'akomodasi' => 950000, 'makanan' => 450000, 'aktivitas' => 500000],

                    ['asal' => 'Labuan Bajo (LBJ)', 'tujuan' => 'Jakarta (CGK)', 'transportasi' => 2100000, 'akomodasi' => 1300000, 'makanan' => 600000, 'aktivitas' => 800000],
                    ['asal' => 'Labuan Bajo (LBJ)', 'tujuan' => 'Yogyakarta (JOG)', 'transportasi' => 1900000, 'akomodasi' => 1100000, 'makanan' => 550000, 'aktivitas' => 700000],
                    ['asal' => 'Labuan Bajo (LBJ)', 'tujuan' => 'Bali - Denpasar (DPS)', 'transportasi' => 1100000, 'akomodasi' => 1000000, 'makanan' => 500000, 'aktivitas' => 600000],
                    ['asal' => 'Labuan Bajo (LBJ)', 'tujuan' => 'Lombok (LOP)', 'transportasi' => 950000, 'akomodasi' => 800000, 'makanan' => 450000, 'aktivitas' => 500000],
                ];
            @endphp

            @foreach ($estimasiBiaya as $estimasi)
                <tr>
                    <td>{{ $estimasi['asal'] }}</td>
                    <td>{{ $estimasi['tujuan'] }}</td>
                    <td>Rp {{ number_format($estimasi['transportasi'], 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($estimasi['akomodasi'], 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($estimasi['makanan'], 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($estimasi['aktivitas'], 0, ',', '.') }}</td>
                    <td class="total-cell">
                        Rp {{ number_format($estimasi['transportasi'] + $estimasi['akomodasi'] + $estimasi['makanan'] + $estimasi['aktivitas'], 0, ',', '.') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<footer>
    &copy; {{ date('Y') }} TravelEase. Semua Hak Dilindungi.
</footer>

</body>
</html>
