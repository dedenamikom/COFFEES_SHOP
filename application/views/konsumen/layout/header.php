<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/user/style.css'); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Exvl<span>Coffee</span>.</a>

        <div class="navbar-nav">
            <ul>
                <li>
                    <a href="<?php echo site_url('login/dashboard'); ?>">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('shopmenu'); ?>">
                        <i class="fas fa-shopping-cart"></i> Shop
                    </a>
                </li>

                <li class="cart-item-count">
                    <?php $keranjang = 'Keranjang Belanja: ' . $this->cart->total_items() . ' items' ?>
                    <?php echo anchor('shopmenu/detail_keranjang', $keranjang) ?>
                </li>
            </ul>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="<?php echo site_url('checkout'); ?>" id="checkout"><i data-feather="credit-card"></i></a>
            <a href="#" id="menu"><i data-feather="menu"></i></a>

        </div>
    </nav>
    <!-- Navbar End -->
    <script>
        feather.replace()
    </script>
</body>

</html>