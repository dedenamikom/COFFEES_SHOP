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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/user/style.css'); ?>" />
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
</style>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Exvl<span>Coffee</span>.</a>

        <div class="navbar-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li>
                <li> <a href="#menuu">Menu</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="<?php echo site_url('shopmenu'); ?>" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="<?php echo site_url('kopi/logout'); ?>"><i data-feather="log-in"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Section Start-->
    <section class="bg" id="home">
        <main class="content">
            <h1>
                SUDAH KAH NGOPI <br />
                HARI INI?
            </h1>
            <p>
                Ada Banyak Caraku Untuk Menanti Kedatanganmu <br />
                Tanpa Rasa Bosan, Duduk Manis <br />
                Sembari Kunikmati Kopiku Dengan Perlahan.
            </p>
            <a href="#" class="cta">Buy Now</a>
        </main>
    </section>
    <!-- Section End-->

    <!--Menu Minuman Section Start-->
    <section id="menuu" class="menuu">
        <div class="content">
            <h2>Best Coffees</h2>
            <p>
                "Temukan kenikmatan di setiap tegukan dengan menu kopi pilihan kami,
                disiapkan dengan bahan-bahan terbaik."
            </p>
            <div class="mn">
                <div class="coffee">
                    <img src="<?php echo base_url('assets/img/kopi/espresso1.jpg'); ?>" alt="Espresso" class="menu-card-img" />
                    <h3 class="menu-card-1">* Espresso *</h3>
                    <p class="menu-card-harga">IDR 20.000</p>
                </div>
                <div class="coffee">
                    <img src="<?php echo base_url('assets/img/kopi/americano1.jpg'); ?>" alt="Americano" class="menu-card-img" />
                    <h3 class="menu-card-1">* Americano *</h3>
                    <p class="menu-card-harga">IDR 20.000</p>
                </div>
                <div class="coffee">
                    <img id="4" src="<?php echo base_url('assets/img/kopi/latte1.jpg') ?>" alt="Latte" class="menu-card-img" />
                    <h3 class="menu-card-1">* Latte *</h3>
                    <p class="menu-card-harga">IDR 25.000</p>
                </div>
                <div class="coffee">
                    <img src="<?php echo base_url('assets/img/kopi/coldbrew1.jpg')  ?>" alt="V60" class="menu-card-img" />
                    <h3 class="menu-card-1">* ColdBrew *</h3>
                    <p class="menu-card-harga">IDR 20.000</p>
                </div>
                <div class="coffee">
                    <img id="4" src="<?php echo base_url('assets/img/kopi/Flat White.jpg')  ?>" alt="Latte" class="menu-card-img" />
                    <h3 class="menu-card-1">* Flat White *</h3>
                    <p class="menu-card-harga">IDR 30.000</p>
                </div>
                <div class="coffee">
                    <img id="4" src="<?php echo base_url('assets/img/kopi/Affogato.jpg') ?>" alt="Latte" class="menu-card-img" />
                    <h3 class="menu-card-1">* Affogato *</h3>
                    <p class="menu-card-harga">IDR 35.000</p>
                </div>
                <div class="coffee">
                    <img id="4" src="<?php echo base_url('assets/img/kopi/macchato.jpg')  ?>" alt="Latte" class="menu-card-img" />
                    <h3 class="menu-card-1">* Macchiato *</h3>
                    <p class="menu-card-harga">IDR 20.000</p>
                </div>
                <div class="coffee">
                    <img id="4" src="<?php echo base_url('assets/img/kopi/Mocha2.jpg')  ?>" alt="Latte" class="menu-card-img" />
                    <h3 class="menu-card-1">* Mocha *</h3>
                    <p class="menu-card-harga">IDR 25.000</p>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!--Menu Minuman Section End-->

    <!--About Section Start-->
    <section id="about" class="about">
        <h2>About Us</h2>

        <div class="gambar">
            <div class="about-img">
                <img src="<?php echo base_url('assets/img/kopi/logo_contactNew.png'); ?>" alt="About Us" />
            </div>
            <div class="content">
                <h3>Why Must Buy Our Coffee?</h3>
                <p>
                    Selamat datang di coffee shop kami, di mana setiap cangkir kopi
                    adalah kisah perjalanan dari biji kopi yang dipetik dengan teliti
                    hingga disajikan dalam secangkir yang hangat. Sebagai pecinta kopi
                    sejati, kami mengambil inspirasi dari berbagai budaya kopi di
                    seluruh dunia dan memadukannya dengan tradisi kopi klasik serta
                    inovasi kreatif untuk menciptakan pengalaman kopi yang unik dan
                    memuaskan. Kami adalah lebih dari sekadar coffee shop; kami adalah
                    tempat bagi para pencinta kopi untuk berkumpul, berbagi cerita, dan
                    menikmati keindahan dunia kopi dalam suasana hangat dan ramah.
                    Kualitas adalah prioritas utama kami, dengan setiap biji kopi
                    dipilih secara teliti dari perkebunan yang terpercaya, dan kami
                    bangga dengan kerjasama kami dengan para petani kopi untuk mendukung
                    praktik pertanian yang berkelanjutan dan adil. Pengalaman Anda di
                    coffee shop kami bukan hanya tentang kopi.
                </p>
            </div>
        </div>
    </section>
    <!--About Section End-->

    <!--Contact Section Start-->
    <section id="contact" class="contact" style="background: url('<?php echo base_url('assets/img/kopi/bg_contact.jpg'); ?>') no-repeat center center; background-size: cover;">
        <h2>Contact Us</h2>
        <p>Kopi Terbaik Sejak 2024</p>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i data-feather="map-pin"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>
                            5181 SE Woodstock Blvd,<br />
                            Portland OR 97206,<br />
                            Indonesian
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i data-feather="phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>087766554433</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i data-feather="mail"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>EXVL@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="" />
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="" />
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" value="send" />
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Contact Section End-->

    <!--Footer Start-->
    <footer style="background: url('<?php echo base_url('assets/img/kopi/footer.jpg'); ?>');">
        <p>&copy; 2024 ExvlCoffee. All Rights Reserved.</p>
        <p>Since 2024</p>
    </footer>
    <!--Footer End-->

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>

    <!-- My JavaScript -->
    <script src="<?php echo base_url('assets/user/style.js'); ?>"></script>
</body>

</html>