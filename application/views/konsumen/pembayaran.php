<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu List</title>

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('<?php echo base_url('assets/img/kopi/hahaha.png'); ?>');
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            min-height: 0;
            margin: 0;
        }

        .container {
            width: 80%;
            margin-top: 0;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .nav {
            list-style-type: none;
            padding: 0;
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-bottom: 20px;
        }

        .nav li {
            display: inline;
        }

        .nav a {
            text-decoration: none;
            color: #007bff;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav a:hover {
            background-color: #e6e6e6;
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            width: 100%;
        }

        .btn_pesan {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
        }

        .btn_pesan:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <ul class="nav">
            <li><a href="<?php echo site_url('login/dashboard'); ?>"><i data-feather="home"></i> Home</a></li>
            <li><a href="<?php echo site_url('shopmenu'); ?>"><i data-feather="shopping-cart"></i> Shop</a></li>
        </ul>

        <?php
        $grand_total = 0;
        if ($keranjang = $this->cart->contents()) {
            foreach ($keranjang as $item) {
                $grand_total += $item['subtotal'];
            }
            echo "<h2>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.') . "</h2>";
        }
        ?>

        <form action="<?php echo site_url('shopmenu/proses_pesanan'); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap Anda" required>
            </div>

            <div class="form-group">
                <label for="alamat_lengkap">Alamat Lengkap</label>
                <input type="text" id="alamat_lengkap" name="alamat" placeholder="Alamat Lengkap Anda" required>
            </div>

            <div class="form-group">
                <label for="no_telp">No. Telepon</label>
                <input type="text" id="no_telp" name="no_telp" placeholder="Nomor Telepon Anda" required>
            </div>

            <div class="form-group">
                <label for="jasa_kirim">Jasa Pengiriman</label>
                <select name="jasa_kirim" id="jasa_kirim" required>
                    <option value="JNE">JNE</option>
                    <option value="TIKI">TIKI</option>
                    <option value="Pos Indonesia">Pos Indonesia</option>
                    <option value="GOJEK">GOJEK</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pilih_bank">Pilih BANK</label>
                <select name="pilih_bank" id="pilih_bank" required>
                    <option value="bca">BCA-1234567</option>
                    <option value="bni">BNI-1234567</option>
                    <option value="bri">BRI-1234567</option>
                </select>
            </div>

            <div class="form-group">
                <label for="pembayaran">Upload Pembayaran</label>
                <input type="file" id="pembayaran" name="pembayaran" required>
            </div>

            <div class="btn_pesan-container">
                <button type="submit" class="btn_pesan">Pesan</button>
            </div>
        </form>
    </div>

    <script>
        feather.replace()
    </script>
</body>

</html>
