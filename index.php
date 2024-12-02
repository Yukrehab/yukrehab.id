<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yuk Rehab - Aplikasi Rehabilitasi oleh BNNP Jateng</title>
        <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="/css/components.css" />
        <link rel="stylesheet" href="/css/pages/landing-pages.css" />
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./components/navbar.php') ?>
        <!-- END - Navbar -->
        <!-- Hero Section -->
        <div class="container containerLand">
            <!-- kiri -->
            <div class="hero-left"> 
                <div class="landhero-kiri">
                    <h1 class="title">Berani Rehab!!!</h1>
                    <p class="description">
                        Konsultasi, Rehabilitasi, update informasi rehabilitasi
                        dan narkoba, semua <br />
                        bisa di
                        <strong class="highlight">YUK REHAB!</strong>
                    </p>
                </div>
                <!-- menu -->
                <div class="menu-grid">
                    <a href="./konsultasi" class="menu-item">
                        <div class="menu-card">
                            <img
                                src="./assets/menu/menu-1.png"
                                alt="Konsultasi"
                                class="menu-image"
                            />
                            <h2 class="menu-title">Konsultasi</h2>
                        </div>
                    </a>
                    <a href="./rehabilitasi" class="menu-item">
                        <div class="menu-card">
                            <img
                                src="./assets/menu/menu-2.png"
                                alt="Rehabilitasi"
                                class="menu-image"
                            />
                            <h2 class="menu-title">Rehabilitasi</h2>
                        </div>
                    </a>
                    <a href="./edukasi" class="menu-item">
                        <div class="menu-card">
                            <img
                                src="./assets/menu/menu-3.png"
                                alt="Edukasi"
                                class="menu-image"
                            />
                            <h2 class="menu-title">Edukasi</h2>
                        </div>
                    </a>
                </div>
            </div>
            <!-- kanan -->
            <div class="hero-right">
                <img
                    src="./assets/landingPageImg.png"
                    alt="Hero Image"
                    class="hero-image"
                />
            </div>
        </div>
        <!-- END Hero Section -->

        <div class="isitengah">
            <div class="dalamtengah">
                <h1>Segera Konsultasi</h1>
                <p>
                    Konsultasikan masalah anda terkait dengan ketergantungan
                    narkoba. ketahui dampak, resiko dan cara pencegahanya
                </p>
                <a href="./konsultasi">Konsultasi</a>
            </div>
            <div class="dalamtengah">
                <h1>Buat janji rehab</h1>
                <p>
                    Buat jadwal untuk melakukan rehabilitasi lebih lanjut.
                    ketahui dampak, resiko dan cara pencegahanya
                </p>
                <a href="./rehabilitasi">Buat janji rehab</a>
            </div>
        </div>

        <!-- footer -->
        <?php include('./components/footer.php') ?>
        <!-- END - footer -->

        <!-- switcher theme -->
        <?php include('./components/switcher_theme.php') ?>
        <!-- END - switcher-theme -->
    </body>
</html>
