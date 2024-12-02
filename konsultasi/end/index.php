<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Konsultasi Page</title>
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
                height: 220px;
                display: flex;
                flex-direction: column;
                gap: 12px;
                max-width: 1200px;
                margin: auto;
                padding: 20px;
                border-radius: 10px;
                background-color: #1adc73;
            }

            .kmnmtkl {
                display: grid;
                gap: 12px;
                height: fit-content;
                margin: auto;
            }

            .kmnmtkl h2 {
                font-size: 32px;
                color: white;
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
                width: 480px;
                height: auto;
            }

            .buttonys {
                text-decoration: none;
                background-color: #0378c5;
                color: white;
                max-width: fit-content;
                padding: 16px 64px;
                border-radius: 8px;
                font-weight: bolder;
                margin: auto;
            }

            .answer-btn {
                padding: 10px 20px;
                font-size: 1rem;
                margin: 10px;
                cursor: pointer;
                border: none;
                border-radius: 5px;
            }

            .answer-btn.yes {
                background-color: #007bff;
                color: white;
            }

            .answer-btn.no {
                background-color: #dc3545;
                color: white;
            }

            @media (max-width: 768px) {
                .image-konsultasipage img {
                    display: none;
                }

                .kmnmtkl h2 {
                    font-size: 24px;
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
            <div class="textinsidecons" style="max-width: 1000px">
                <h1>Apakah kamu ingin mengetahui tingkat resiko pemakainmu?</h1>
            </div>
            <div style="display: flex">
                <a class="buttonys answer-btn yes" href="/rehabilitasi/">
                    YA
                </a>
                <a class="buttonys answer-btn no" href="/"> TIDAK </a>
            </div>
            <div class="image-konsultasipage">
                <img
                    src="/assets/questionImg.png"
                    alt="Gambar Konsultasi Page"
                />
            </div>
        </div>
        <!-- footer -->
        <?php include('./../../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
