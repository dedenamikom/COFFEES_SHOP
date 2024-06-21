<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exvl Coffee</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<style>
    .bg {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url("<?php echo base_url('assets/img/kopi/image1.jpg'); ?>");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    :root {
        --primary: #b6b6b6;
        --bg: #010101;
    }

    * {
        font-family: "Poppins", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
    }

    body {
        font-family: "Poppins", sans-serif;
        background-color: var(--bg);
    }

    /* Navbar */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.4rem 7%;
        background-color: rgba(1, 1, 1, 0.8);
        border-bottom: 1px solid #582e2e;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
    }

    .navbar .navbar-logo {
        font-size: 2rem;
        font-weight: 800;
        color: aliceblue;
        font-style: italic;
    }

    .navbar .navbar-logo span {
        color: var(--primary);
    }

    .navbar .navbar-nav ul li {
        list-style: none;
        display: inline-block;
    }

    .navbar .navbar-nav ul li .dropdown {
        display: none;
    }

    .navbar .navbar-nav ul li:hover .dropdown {
        display: block;
        background: #333;
        position: absolute;
        padding: 10px;
        border-radius: 10%;
    }

    .navbar .navbar-nav ul li:hover .dropdown li {
        display: block;
    }

    .navbar .navbar-nav ul li:hover .dropdown li a {
        padding: 5px;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    .navbar .navbar-nav a {
        color: azure;
        display: inline-block;
        font-size: 1rem;
        margin: 0 1.5rem;
    }

    .navbar .navbar-nav a:hover {
        color: var(--primary);
    }

    .navbar .navbar-nav a::after {
        content: "";
        display: block;
        padding-bottom: 2;
        border-bottom: 0.1rem solid var(--primary);
        transform: scaleX(0);
        transition: 0.3s linear;
    }

    .navbar .navbar-nav a:hover::after {
        transform: scaleX(1);
    }

    .navbar .navbar-extra a {
        color: aliceblue;
        margin: 0 0.5rem;
    }

    .navbar .navbar-extra a:hover {
        color: var(--primary);
    }

    #menu {
        display: none;
    }

    /* Section */

    .bg::after {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(0deg,
                rgb(17, 17, 23) 3%,
                rgba(29, 29, 21, 0) 25%);
    }

    .bg .content {
        padding: 2rem 7%;
        max-width: 60rem;
    }

    .bg .content h1 {
        font-size: 2.5em;
        margin: auto;
        font-style: inherit;
        color: #340a0a;
        line-height: 1;
    }

    .bg .content p {
        color: #010101;
    }

    .bg .content .cta {
        margin-top: 1rem;
        display: inline-block;
        padding: 0.5rem 1rem;
        font-size: 1rem;
        color: #e1cece;
        background-color: #340a0a;
        border-radius: 0.5rem;
        box-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
    }

    /*Menu*/

    .menuu {
        padding: 7rem 7% 1.4rem;
    }

    .menuu h2 {
        text-align: center;
        font-size: 2rem;
        margin-bottom: 1.5rem;
        color: #fff;
    }

    .menuu p {
        text-align: center;
        font-weight: 200;
        color: aliceblue;
    }

    .menuu .mn h3 {
        color: antiquewhite;
    }

    .menuu .mn {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .menuu .mn .coffee {
        text-align: center;
        padding-bottom: 5rem;
        width: 20%;
        border: 1px solid white;
        padding: 1rem;
        margin: 1rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    .menuu .mn .coffee p {
        text-align: center;
    }

    .menuu .mn .coffee img {
        border-radius: 15px;
        width: 63%;
    }

    .menuu .mn .coffee img .menuu .mn .coffee .menu-card-1 {
        margin-top: 1.5rem;
    }

    .menuu .mn .coffee .menu-card-harga {
        margin-top: 0.5rem;
        color: #fff;
        font-weight: 300;
    }

    footer {
        background-color: #5c3131;
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    /* Media Queries */

    /* Laptop */
    @media (max-width: 1366px) {
        html {
            font-size: 75%;
        }
    }

    /* Tablet */
    @media (max-width: 768px) {
        html {
            font-size: 62.5%;
        }

        #menu {
            display: inline-block;
        }

        .navbar .navbar-nav {
            position: absolute;
            top: 100%;
            right: -100%;
            background-color: antiquewhite;
            width: 30rem;
            height: 100vh;
            transition: 0.5s;
        }

        .navbar .navbar-nav.active {
            right: 0;
        }

        .navbar .navbar-nav ul li {
            color: var(--bg);
            display: block;
            margin: 1.5rem;
            padding: 0.5rem;
            font-size: 2.5rem;
        }

        .navbar .navbar-nav ul li::after {
            transform-origin: 0 0;
        }

        .navbar .navbar-nav ul li:hover::after {
            transform: scaleX(0.4);
        }

        .navbar .navbar-nav a {
            color: var(--bg);
            display: block;
            margin: 1.5rem;
            padding: 0.5rem;
            font-size: 2.5rem;
        }

        .navbar .navbar-nav a::after {
            transform-origin: 0 0;
        }

        .navbar .navbar-nav a:hover::after {
            transform: scaleX(0.4);
        }
    }

    /* Mobile */
    @media (max-width: 768px) {
        html {
            font-size: 62.5%;
        }
    }
</style>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Exvl<span>Coffee</span>.</a>

        <div class="navbar-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li>
                <li><a href="#minuman">Makanan & Minuman</a></li>
                <li><a href="#makanan">Tentang</a></li>
            </ul>
        </div>

        <div class="navbar-extra">
            <a href="#" id="menu"><i data-feather="menu"></i></a>
            <a href="<?php echo site_url('login'); ?>"><i data-feather="log-in"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Home Section Start -->
    <section class="bg" id="home">
        <div class="content">
            <h1>Exvl  Coffee <br /> tempat ngopi paling Exvlusif</h1>
            <p>Tempat ngopi paling nyaman dan enak di Yogyakarta</p>
            <a href="#" class="cta">Baca Selengkapnya</a>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Menu Section Start -->
    <section class="menuu" id="menuu">
        <h2>Menu</h2>
        <p>Beberapa menu yang tersedia di Exvl Coffee.</p>

        <div class="mn" id="minuman">
            <div class="coffee">
                <img src="<?php echo base_url('assets/img/kopi/espresso1.jpg'); ?>" alt="Coffee 1">
                <div class="menu-card-1">
                    <h3>Espresso</h3>
                    <p>Espresso yang kuat dan kaya rasa.</p>
                    <p class="menu-card-harga">Rp 20.000</p>
                </div>
            </div>

            <div class="coffee">
                <img src="<?php echo base_url('assets/img/kopi/americano1.jpg'); ?>" alt="Coffee 2">
                <div class="menu-card-1">
                    <h3>Latte</h3>
                    <p>Latte yang lembut dengan susu pilihan.</p>
                    <p class="menu-card-harga">Rp 25.000</p>
                </div>
            </div>

            <div class="coffee">
                <img src="<?php echo base_url('assets/img/kopi/Latte1.jpg'); ?>" alt="Coffee 3">
                <div class="menu-card-1">
                    <h3>Cappuccino</h3>
                    <p>Cappuccino dengan foam yang sempurna.</p>
                    <p class="menu-card-harga">Rp 22.000</p>
                </div>
            </div>
        </div>

        <div class="mn" id="makanan">
            <div class="coffee">
                <img src="<?php echo base_url('assets/img/kopi/Frenchfries.jpg'); ?>" alt="Food 1">
                <div class="menu-card-1">
                    <h3>Croissant</h3>
                    <p>Croissant yang renyah dan lezat.</p>
                    <p class="menu-card-harga">Rp 15.000</p>
                </div>
            </div>

            <div class="coffee">
                <img src="<?php echo base_url('assets/img/kopi/Burger1.jpg'); ?>" alt="Food 2">
                <div class="menu-card-1">
                    <h3>Donut</h3>
                    <p>Donut dengan taburan gula halus.</p>
                    <p class="menu-card-harga">Rp 10.000</p>
                </div>
            </div>

            <div class="coffee">
                <img src="<?php echo base_url('assets/img/kopi/salad1.jpg'); ?>" alt="Food 3">
                <div class="menu-card-1">
                    <h3>Scone</h3>
                    <p>Scone yang empuk dengan selai.</p>
                    <p class="menu-card-harga">Rp 12.000</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu Section End -->

    <!-- Footer Start -->
    <footer>
        <p>&copy; 2024 Exvl Coffee. All Rights Reserved.</p>
    </footer>
    <!-- Footer End -->

    <!-- Feather Icons Script -->
    <script>
        feather.replace();
    </script>
</body>

</html>