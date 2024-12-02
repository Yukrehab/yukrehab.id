    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yuk Rehab - Aplikasi Rehabilitasi oleh BNN Jateng</title>
        <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="/css/components.css" />
        <style>
            .bubble {
                background-color: #0378c5;
                color: #fff;
                padding: 36px 48px;
                display: grid;
                gap: 12px;
                border-radius: 24px;
                border: 2px solid #6c757d;
                margin-bottom: 20px; /* Menambahkan jarak bawah untuk elemen berikutnya */
            }

            .bubble h1 {
                font-size: 2.25rem; /* 36px */
                margin: 0;
            }

            .bubble p {
                font-size: 1.125rem; /* 18px */
                max-width: 840px;
                margin: 0;
            }

            .button {
                text-decoration: none; /* Menghapus garis bawah dari link */
                background-color: #0378c5;
                padding: 12px 24px;
                border-radius: 12px;
                border: 1px solid #6c757d;
                text-align: center; /* Pastikan teks di tengah */
                color: #fff;
                font-size: 24px; /* Ukuran font */
                display: inline-block; /* Menyesuaikan ukuran dengan konten */
                transition: background-color 0.3s, font-weight 0.3s; /* Transisi halus */
            }

            .button:hover {
                background-color: #0d456d;
                font-weight: bold;
            }

            .button p {
                margin: 0; /* Menghapus margin default dari elemen p */
            }

            .image-konsultasipage {
                text-align: right;
                position: relative; /* Membuat posisi relatif agar gambar bisa diposisikan absolut */
                height: 100px; /* Menentukan tinggi kontainer */
            }

            .image-konsultasipage img {
                position: absolute;
                bottom: 0;
                right: 0;
                width: 240px;
                height: auto; /* Memastikan gambar proporsional */
            }

            @media (max-width: 768px) {
                .bubble h1 {
                    font-size: 24px;
                }

                .bubble p {
                    font-size: 16px;
                }

                .bubble {
                    padding: 24px;
                }

                .image-konsultasipage {
                    height: 40px;
                }

                .image-konsultasipage img {
                    width: 120px;
                    height: auto;
                }
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./../components/navbar.php'); ?>
        <!-- END - Navbar -->

        <div class="container" style="max-width: 1140px">
            <div class="bubble">
                <h1>Selamat datang di laman Konsultasi!!</h1>
                <p>
                    Disini anda akan diberikan beberapa pertanyaan terkait
                    dengan masalah yang anda alami. Mulai dari jenis zat, lama
                    penggunaan, dan keluhan yang anda rasakan. Setelah itu, anda
                    dapat melihat hasil konsultasi. Mohon dijawab sesuai dengan
                    apa yang anda alami.
                </p>
            </div>

            <a href="/konsultasi/warning/" class="button">
                <p>MULAI</p>
            </a>

            <div class="image-konsultasipage">
                <img
                    src="/assets/konsultasiImg.png"
                    alt="Gambar Konsultasi Page"
                />
            </div>
        </div>
        
         <!-- footer -->
         <?php include('./../components/footer.php'); ?>
        <!-- END - footer -->
    </body>
</html>
