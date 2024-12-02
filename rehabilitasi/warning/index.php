<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Rehabilitasi Page</title>
        <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="/css/components.css" />
        <link rel="stylesheet" href="/css/pages/landing-pages.css" />
        <style>
            /* Gaya dasar untuk halaman */
            .container {
                display: grid;
                gap: 24px;
            }

            .container h2 {
                text-align: center;
                font-weight: bolder;
            }

            .question-container {
                margin-top: 100px;
                width: 100%;
                height: auto;
                display: flex;
                flex-direction: column;
                gap: 12px;
                max-width: 1200px;
                margin: auto;
                padding: 20px;
                border-radius: 10px;
                background-color: #DC3545;
            }

            .kmnmtkl {
                display: grid;
                gap: 12px;
                height: fit-content;
            }

            .kmnmtkl h2 {
                font-size: 32px;
                color: white;
                text-align: left;
            }
            .kmnmtkl p {
                font-size: 22px;
                color: white;
                text-align: left;
                max-width: 1000px;
            }

            .result {
                font-size: 1.5rem;
                margin-top: 20px;
            }

            .image-konsultasipage {
                text-align: right;
                position: relative;
                height: 200px;
            }

            .image-konsultasipage img {
                position: absolute;
                bottom: 0;
                right: 0;
                width: 240px;
                height: auto;
            }

            .buttonys {
                text-decoration: none;
                background-color: #28A745;
                color: white;
                max-width: fit-content;
                padding: 16px 64px;
                border-radius: 8px;
                font-weight: bolder;
                margin: auto;
            }

            @media (max-width: 768px) {
                .image-konsultasipage img {
                    display: none;
                }

                .kmnmtkl h2 {
                    font-size: 24px;
                    color: white;
                }
                .kmnmtkl p {
                    font-size: 16px;
                    color: white;
                }
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./../../components/navbar.php') ?>
        <!-- END - Navbar -->

        <div class="container">
            <div class="textinsidecons">
                <h1>Rehabilitasi</h1>
            </div>
            <div class="question-container">
                <div class="kmnmtkl">
                    <h2>Selamat datang di laman Rehabilitasi!! </h2>
                    <p>
                    "Segala informasi yang Anda berikan di situs ini dijamin kerahasiaannya dan tidak akan disebarluaskan kepada pihak 
                    lain. Kami berkomitmen untuk menjaga privasi Anda dan memastikan bahwa data pribadi Anda tetap aman. Layanan konsultasi 
                    ini disediakan tanpa biaya sepeserpun, sehingga Anda dapat memanfaatkannya dengan tenang tanpa khawatir akan adanya pemungutan biaya."
                    </p>
                </div>
            </div>
            <a href="/rehabilitasi/dast-10/" class="buttonys">LANJUT</a>
            <div class="image-konsultasipage">
                <img src="/assets/dast10Image.png" alt="Gambar Konsultasi Page" />
            </div>
        </div>
        <!-- footer -->
        <?php include('./../../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
