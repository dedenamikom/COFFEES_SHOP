<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-image: url('<?php echo base_url('assets/img/kopi/hahaha.png'); ?>');
            background-size: cover;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu-container {
            margin-top: 75px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
            min-height: 100%;
        }

        .menu-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            text-align: center;
            width: 200px;
            background-color: rgba(200, 200, 200, 0.8);
        }

        .menu-item img {
            border-radius: 10px;
            max-width: 100%;
            height: auto;
            filter: drop-shadow(10px 10px 10px #0009);
        }

        .menu-item h3 {
            font-size: 18px;
            margin: 15px 0;
            color: #2b1700;
            text-shadow: 0px 1px 0px #b8860b;
        }

        .menu-item p {
            font-size: 16px;
            color: #333;
        }

        .add-to-cart-btn {
            background-color: black;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            font-size: 16px;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background-color: #555;
        }

        .add-to-cart-btn a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="menu-container">
        <?php
        $chunks = array_chunk($minuman, 1);
        foreach ($chunks as $chunk) { ?>
            <div class="menu-item">
                <?php foreach ($chunk as $kopi) { ?>
                    <img src="<?php echo base_url('assets/img/minuman/' . $kopi->foto); ?>">
                    <h3><?php echo $kopi->namaKopi; ?></h3>
                    <p>Rp.<?php echo number_format($kopi->harga, 0, ',', '.'); ?></p>
                    <?php echo anchor("shopmenu/addToCart/{$kopi->idKopi}", 'Add To Cart', 'class="add-to-cart-btn"'); ?> 
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <script src="<?php echo base_url('assets/user/style.js'); ?> "></script>
</body>

</html>