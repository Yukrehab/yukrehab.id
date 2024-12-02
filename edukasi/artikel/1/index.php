<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Artikel</title>
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

        <div>
            <h1 style="text-align: center; margin : 30px 0 10px 0; font-size: 36px;">APA ITU NARKOBA?</h1>
            <p style="text-align: center; max-width: 480px; margin: auto">
            </p>
        </div>
        
        <main>
            <section class="sec1">
                <img 
                    src="/assets/artikel/1/drugs_1.gif"
                    alt=""
                />

                    <div class="sec1-text">
                        <h2>Apa Itu Narkoba?</h2>
                        <div class="sec1-text-p">
                            <p>
                                Narkoba adalah singkatan dari narkotika, psikotropika, dan 
                                obat-obatan terlarang. Istilah ini mencakup berbagai zat 
                                yang dapat menurunkan kesadaran, mempengaruhi fungsi otak, 
                                dan berpotensi menyebabkan ketergantungan.  
                            </p>
                        </div>
                    </div>
                </section>
                <section class="sec1">
                    <div class="sec1-text">
                        <div class="sec1-text-p">
                            <p>
                                Narkotika: Zat atau obat yang berasal dari tanaman atau dibuat 
                                secara sintetis yang dapat menimbulkan efek seperti penurunan 
                                kesadaran atau halusinasi. Contoh termasuk morfin dan heroin 
                            </p>
                            <br>
                            <p>
                                Psikotropika: Obat yang mempengaruhi fungsi mental, seperti 
                                antidepresan dan obat penenang, tetapi jika disalahgunakan bisa 
                                berbahaya 
                            </p>
                            <br>
                            <p>
                                Obat Terlarang: Obat-obatan yang dilarang penggunaannya di luar 
                                resep medis dan biasanya digunakan untuk tujuan rekreasi
                            </p>
                        </div>
                    </div>
                    <img 
                        src="/assets/artikel/1/drugs_2.jpg"
                        alt=""
                    />
                </section>
                <section class="sec1">
                    <img 
                        src="/assets/artikel/1/drugs_3.jpg"
                        alt=""
                    />

                    <div class="sec1-text">
                        <div class="sec1-text-p">
                            <p>
                                Obat-obatan tersebut dapat menimbulkan kecanduan jika dikonsumsi 
                                tanpa berhati-hatian. Penggunaan yang tidak sesuai aturan dapat 
                                menyebabkan risiko serius, termasuk gangguan mental dan fisik, serta 
                                bahaya besar bagi kesehatan diri dan orang lain. jadi segera jauhi Narkoba yaaa
                            </p>
                        </div>
                    </div>
            </section>
        </main>

            <section class="card-footer">
                    <button class="btn btn-back" onclick="history.back()">
                            Kembali
                    </button>
                    <a href="/edukasi/artikel/2/" class="btn btn-next">Selanjutnya</a>
            </section>

        <!-- footer -->
        <?php include('./../../../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
