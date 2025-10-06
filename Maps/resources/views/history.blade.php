<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Perjalanan - TravelEase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .history-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .history-card:hover {
            transform: scale(1.05);
        }
        .history-card img {
            height: 200px;
            object-fit: cover;
        }
        .modal-header {
            background-color: #007bff;
            color: white;
        }
        .barcode {
            text-align: center;
            margin-top: 20px;
        }
	.back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 5px 10px;
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
    <div class="container mt-4">
        <h2 class="mb-3 text-primary">Riwayat Perjalanan</h2>
        
        <div class="row mb-3">
            <div class="col-md-6">
                <input type="text" class="form-control" placeholder="Cari perjalanan...">
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option value="">Filter Berdasarkan</option>
                    <option value="harga">Harga</option>
                    <option value="tanggal">Tanggal</option>
                </select>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary w-100">Cari</button>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card history-card">
                    <img src="https://source.unsplash.com/400x200/?bali,travel" class="card-img-top" alt="Bali">
                    <div class="card-body">
                        <h5 class="card-title">Jakarta - Bali</h5>
                        <p class="card-text">Tanggal: 17 December 2024</p>
                        <p class="card-text text-primary">Rp 2.500.000</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detailModalBali">Lihat Detail</button>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card history-card">
                    <img src="https://source.unsplash.com/400x200/?yogyakarta,travel" class="card-img-top" alt="Yogyakarta">
                    <div class="card-body">
                        <h5 class="card-title">Lampung - Yogyakarta</h5>
                        <p class="card-text">Tanggal: 21-23 Februari 2023</p>
                        <p class="card-text text-primary">Rp 1.800.000</p>
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#detailModalYogya">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Detail Perjalanan -->
    <div class="modal fade" id="detailModalBali" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Perjalanan - Bali</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Wisata Dikunjungi:</strong> Pantai Kuta, Ubud, Tanah Lot</p>
                    <p><strong>Hotel:</strong> The Ubud Resort</p>
                    <p><strong>Tiket Travel:</strong> Pesawat (Rp 1.000.000) - ID: TKT12345</p>
                    <p><strong>Akomodasi:</strong> Rp 1.000.000</p>
                    <p><strong>Makan & Transportasi:</strong> Rp 500.000</p>
                    <p><strong>Harga Total:</strong> Rp 2.500.000</p>
                    <p><strong>Lama Liburan:</strong> 5 Hari 4 Malam</p>
		    <p><strong>Tanggal:</strong> 17 - 21 December 2024</p>
                    <div class="barcode">
                        <img src="https://barcode.tec-it.com/barcode.ashx?data=TKT12345&code=Code128&dpi=96" alt="Barcode">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="detailModalYogya" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Perjalanan - Yogyakarta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>Wisata Dikunjungi:</strong> Candi Borobudur, Malioboro, Pantai Parangtritis</p>
                    <p><strong>Hotel:</strong> Malioboro Grand Hotel</p>
                    <p><strong>Tiket Travel:</strong> Kereta Api (Rp 500.000) - ID: TKT67890</p>
                    <p><strong>Akomodasi:</strong> Rp 800.000</p>
                    <p><strong>Makan & Transportasi:</strong> Rp 500.000</p>
                    <p><strong>Harga Total:</strong> Rp 1.800.000</p>
                    <p><strong>Lama Liburan:</strong> 3 Hari 2 Malam</p>
		    <p><strong>Tanggal:</strong> 21 Januari 2023</p>

                    <div class="barcode">
                        <img src="https://barcode.tec-it.com/barcode.ashx?data=TKT67890&code=Code128&dpi=96" alt="Barcode">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
