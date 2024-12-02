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
          .bubble {
                background-color: #E6E6FA;
                color: #483D8B;
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
                font-size: 1.375em; /* 22   px */
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
                top: 50px;
                left: 300px;
                text-align: right;
                position: relative; /* Membuat posisi relatif agar gambar bisa diposisikan absolut */
                height: 100px; /* Menentukan tinggi kontainer */
            }

            .image-konsultasipage img {
                position: absolute;
                bottom: 0;
                right: 0;
                width: 580px;
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
                    height: 25px;
                    top: 5px;
                    left: 20px;
                }

                .image-konsultasipage img {
                    width: 150px;
                    height: auto;
                }
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./../../../components/navbar.php') ?>
        <!-- END - Navbar -->

        <div class="container" style="max-width: 1140px">
            <div class="bubble">
                <h2>
                "Terima kasih atas kejujuran dan keterbukaan Anda dalam menjawab pertanyaan di laman konsultasi ini. Informasi 
                yang Anda berikan sangat penting untuk memahami situasi lebih lanjut, sehingga kami dapat memberikan bantuan dan 
                dukungan yang tepat untuk Anda. Kami menghargai langkah berani Anda untuk mencari bantuan."
                </h2>
            </div>

            <a href="/rehabilitasi/dast-10/result/" class="button">
                <p>SELANJUTNYA</p>
            </a>
            <div class="image-konsultasipage">
                <img 
                    src="/assets/cartoon-560.gif" class="giphy-embed" allowFullScreen
                />
            </div>
        </div>

        <!-- footer -->
        <?php include('./../../../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
