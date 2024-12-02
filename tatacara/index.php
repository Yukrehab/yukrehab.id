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
        <style>
            .container {
                max-width: 800px;
                margin: 20px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                text-align: center;
                color: #00bfa6;
                margin-bottom: 40px;
            }

            h2 {
                color: #333;
                font-size: 20px;
                margin-bottom: 20px;
            }

            .section {
                margin-bottom: 40px;
            }

            .section img {
                width: 80px;
                height: auto;
                vertical-align: middle;
                margin-right: 20px;
            }

            .section .button {
                display: inline-block;
                background-color: #00bfa6;
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                margin-right: 10px;
            }

            .section .button-secondary {
                background-color: #f1f1f1;
                color: #333;
            }

            .instructions {
                margin: 20px 0;
            }

            .instructions li {
                margin-bottom: 10px;
                line-height: 1.6;
            }

            .cta-button {
                display: inline-block;
                background-color: #007bff;
                color: #fff;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                margin-top: 20px;
            }

            .cta-button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./../components/navbar.php') ?>
        <!-- END - Navbar -->

        <div class="container">
            <h1>TATA CARA</h1>
            <div class="section">
                <h2>Tata Cara:</h2>
                <h3>KONSULTASI:</h3>
                <div class="instructions">
                    <ol>
                        <li>
                            Klik
                            <img
                                src="path_to_icon_konsultasi"
                                alt="Konsultasi"
                            />
                            Atau
                            <img
                                src="path_to_icon_konsultasi_alt"
                                alt="Konsultasi Alt"
                            />
                        </li>
                        <li>
                            Lalu Anda klik
                            <a href="" class="button">MULAI</a> untuk mengisi
                            pertanyaan yang sudah disiapkan
                        </li>
                        <li>
                            Selanjutnya Anda bisa mengisi pertanyaan sesuai
                            dengan kondisi kalian
                        </li>
                        <li>
                            Jika selesai mengisi pertanyaan kalian bisa klik
                            <a href="" class="button button-secondary">YA!</a>
                            untuk lanjut melihat skor penggunaan zat
                        </li>
                        <li>
                            Lalu kalian bisa lanjut untuk melihat dampak dan
                            solusi dari zat yang Anda gunakan
                        </li>
                        <li>
                            Yang terakhir kalian bisa langsung lanjut ke
                            rehabilitasi jika ingin
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section">
                <h3>REHABILITASI:</h3>
                <div class="instructions">
                    <ol>
                        <li>
                            Pertama Anda klik
                            <img
                                src="path_to_icon_rehabilitasi"
                                alt="Jadwal Rehab"
                            />
                            Atau
                            <img
                                src="path_to_icon_rehabilitasi_alt"
                                alt="Jadwal Rehab Alt"
                            />
                        </li>
                        <li>
                            Lalu kalian klik
                            <a href="" class="button">MULAI</a> untuk lanjut
                            skrining
                        </li>
                        <li>
                            Lalu pilihlah jawaban yang sesuai dengan diri Anda
                        </li>
                        <li>
                            Setelah menjawab Anda akan mendapat hasil dari
                            skrining
                        </li>
                        <li>Lanjut Anda bisa memilih jadwal yang tersedia</li>
                        <li>
                            Jika sudah memilih hari selanjutnya kalian klik
                            <a href="" class="cta-button">Buat Jadwal</a> untuk
                            membuat jadwal untuk rehabilitasi
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php include('./../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
