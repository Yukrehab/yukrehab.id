<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ubahlah sesuai topik</title>
        <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="/css/components.css" />
        <link rel="stylesheet" href="/css/pages/landing-pages.css" />
        <style>
            /* Gaya dasar untuk halaman */
            section {
                padding: 28px 48px;
            }

            .sec1 {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                max-width: 1100px;
                margin: 0 auto;
                gap: 24px;
            }

            .sec1 img {
                width: 100%;
                max-width: 390px;
                height: auto;
                object-fit: cover;
                object-position: center;
            }

            .sec1-text {
                max-width: 580px;
                display: grid;
                height: fit-content;
                gap: 10px;
                margin: auto;
            }

            .sec1-text h1 {
                font-size: 36px;
                margin: 0;
            }

            .sec1-text h2 {
                font-size: 28px;
                color: #0f99e8;
                margin-bottom: 10px;
            }

            .sec1-text p {
                font-size: 20px;
                color: #313131;
                line-height: 1.5;
            }

            .header-left {
                padding: 30px 40px  ;
            }

            .header-left h1 {
                text-align: left;
                display: flex;
                align-items: end;
                margin: 0 auto;
            }

            .header-center1 {
                text-align: center;
                display: flex;
                align-items: end;
                width: fit-content;
                margin: 0 auto;
            }

            .description {
                padding: 0 40px;
            }

            .description h1 {
                font-size: 50px;
                text-align: justify;
                display: flex;
                align-items: end;
                margin: 0 auto; 
            }

            .description p {
                font-size: 25px;
                text-align: justify;
            }

            .card-footer {
                display: flex;
                justify-content: center;
                padding: 20px;
            }

            .btn {
                background-color: #007acc;
                margin: 0 380px;
                align-item: center;
                color: white;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
                text-decoration: none;
            }

            .btn:hover {
                background-color: #005f99;
            }

            .btn-back {
                background-color: #0066cc;
            }

            .btn-next {
                background-color: #0066cc;
            }

        @media (max-width: 768px) {
                .sec1 {
                    display: block;
                    padding: 25px 50px;
                }

                .sec1 img {
                    width: 100%;
                    max-width: none;
                    margin: auto;
                    margin-bottom: 20px;
                }

                .sec1-text {
                    max-width: 100%;
                    margin: auto;
                    padding: 10px 0;
                }

                .btn {
                    margin: auto;
                    width: auto;
                    max-width: 300px;
                }
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./../../../components/navbar.php') ?>
        <!-- END - Navbar -->

        <div class="container">
            <div class="card">
                <div class="card-header">Lembaga Rehab</div>
                <div class="card-content">
                    <h3>Dehidrasi</h3>
                    <p>
                        Penyalahgunaan zat tersebut bisa menyebabkan
                        keseimbangan elektrolit berkurang. Akibatnya badan
                        kekurangan cairan. Jika efek ini terus terjadi, tubuh
                        akan kejang-kejang, muncul halusinasi, perilaku lebih
                        agresif, dan rasa sesak pada bagian dada. Jangka panjang
                        dari dampak dehidrasi ini dapat menyebabkan kerusakan
                        pada otak.
                    </p>

                    <h3>Halusinasi</h3>
                    <p>
                        Halusinasi menjadi salah satu efek yang sering dialami
                        oleh pengguna narkoba seperti ganja. Tidak hanya itu
                        saja, dalam dosis berlebih juga bisa menyebabkan muntah,
                        mual, rasa takut yang berlebih, serta gangguan
                        kecemasan. Apabila pemakaian berlangsung lama, bisa
                        mengakibatkan dampak yang lebih buruk seperti gangguan
                        mental, depresi, serta kecemasan terus-menerus.
                    </p>

                    <h3>Menurunnya Tingkat Kesadaran</h3>
                    <p>
                        Pemakai yang menggunakan obat-obatan tersebut dalam
                        dosis yang berlebih, efeknya justru membuat tubuh
                        terlalu rileks sehingga kesadaran berkurang drastis.
                        Beberapa kasus si pemakai tidur terus dan tidak
                        bangun-bangun. Hilangnya kesadaran tersebut membuat
                        koordinasi tubuh terganggu, sering bingung, dan terjadi
                        perubahan perilaku. Dampak narkoba yang cukup berisiko
                        tinggi adalah hilangnya ingatan sehingga sulit mengenali
                        lingkungan sekitar.
                    </p>

                    <h3>Kematian</h3>
                    <p>
                        Dampak narkoba yang paling buruk terjadi jika si pemakai
                        menggunakan obat-obatan tersebut dalam dosis yang tinggi
                        atau yang dikenal dengan overdosis. Pemakaian sabu-sabu,
                        opium, dan kokain bisa menyebabkan tubuh kejang-kejang
                        dan jika dibiarkan dapat menimbulkan kematian. Inilah
                        akibat fatal yang harus dihadapi jika sampai kecanduan
                        narkotika, nyawa menjadi taruhannya.
                    </p>

                    <h3>Gangguan Kualitas Hidup</h3>
                    <p>
                        Bahaya narkoba bukan hanya berdampak buruk bagi kondisi
                        tubuh, penggunaan obat-obatan tersebut juga bisa
                        mempengaruhi kualitas hidup misalnya susah
                        berkonsentrasi saat bekerja, mengalami masalah keuangan,
                        hingga harus berurusan dengan pihak kepolisian jika
                        terbukti melanggar hukum.
                    </p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-back" onclick="history.back()">
                        Kembali
                    </button>
                    <a href="/edukasi/artikel/4/" class="btn btn-next"
                        >Selanjutnya</a
                    >
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php include('./../../../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
