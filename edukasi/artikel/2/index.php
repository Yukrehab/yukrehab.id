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
            <h1 style="text-align: center; margin : 30px 0 10px 0; font-size: 36px;">APA JENIS NARKOBA YANG PALING SERING DISALAHGUNAKAN?</h1>
            <p style="text-align: center; max-width: 480px; margin: auto">
            </p>
        </div>

        <main>
            <section class="sec1">
                    <div class="sec1-text">
                        <h2>1. Ganja</h2>
                        <div class="sec1-text-p">
                            <p>
                                Ganja, yang berasal dari tanaman Cannabis sativa, biasanya dihisap tetapi juga bisa 
                                dikonsumsi secara oral atau dalam bentuk teh. Sebagai stimulan sistem saraf pusat, 
                                ganja membuat pengguna merasa rileks dan meningkatkan kepekaan sensorik mereka, termasuk 
                                penglihatan, penciuman, rasa, dan pendengaran. Efek ini sering disebut sebagai "high". 
                                Namun, penggunaan jangka panjang dapat mempengaruhi perkembangan otak dan mengganggu 
                                fungsi berpikir, memori, dan belajar.  
                            </p>
                        </div>
                    </div>
                    <img
                        src="/assets/artikel/2/ganja.gif"
                        alt=""
                    />
                </section>
                <section class="sec1">
                    <div class="sec1-text">
                        <h2>2. Kokain (COC)</h2>
                        <div class="sec1-text-p">
                            <p>
                                Kokain adalah bubuk putih halus yang diekstraksi dari daun tanaman koka dan bertindak 
                                sebagai stimulan kuat. Kokain dapat dihirup, dioleskan ke gusi, atau disuntikkan. Efeknya 
                                termasuk euforia, peningkatan kewaspadaan dan energi sementara, serta penundaan rasa lapar 
                                dan lelah. Pengguna mungkin menunjukkan perilaku aneh dan kekerasan. Dosis berlebihan bisa 
                                menyebabkan kejang, stroke, pendarahan otak, atau gagal jantung. Penggunaan jangka panjang 
                                berisiko menyebabkan masalah kesehatan seperti kerusakan hidung (jika dihirup), infeksi dan abses 
                                (jika disuntik), serta ketergantungan, kekurangan gizi, penurunan berat badan, disorientasi, dan psikosis paranoid.
                            </p>
                        </div>
                    </div>
                    <img
                        src="/assets/artikel/2/kokain.png"
                        alt=""
                    />
                </section>
                <section class="sec1">
                    <div class="sec1-text">
                        <h2>3. Ekstasi</h2>
                        <div class="sec1-text-p">
                            <p>
                                Ekstasi (MDMA) adalah narkoba yang mirip dengan amfetamin dan halusinogen, memberikan efek 
                                stimulan dan sensorik. Setelah konsumsi, pengguna mungkin merasakan euforia, emosi meningkat, 
                                halusinasi, serta penurunan nafsu makan dan rasa haus. Dosis berlebihan bisa menyebabkan 
                                hipertermia, gangguan jantung, masalah mental, perilaku impulsif, dan overdosis.
                            </p>
                        </div>
                    </div>
                    <img
                        src="/assets/artikel/2/ekstasi.png"
                        alt=""
                    />
                </section>
                <section class="sec1">
                    <div class="sec1-text">
                        <h2>4. Heroin (MOP)</h2>
                        <div class="sec1-text-p">
                            <p>
                                Heroin (diacetylmorphine) adalah bubuk putih pahit yang sangat adiktif dan 2-3 kali lebih kuat 
                                dari morfin. Biasanya disuntikkan, dihisap, atau dihirup, heroin memberikan efek euforia, anti-kecemasan, 
                                dan penghilang rasa sakit. Efek samping meliputi depresi pernapasan, pupil menyempit, dan mual. 
                                Overdosis dapat menyebabkan pernapasan lambat, hipotensi, bibir biru, kejang, koma, dan kematian. 
                                Penggunaan suntikan juga berisiko menulari HIV/AIDS melalui jarum yang tercemar.
                            </p>
                        </div>
                    </div>
                    <img
                        src="/assets/artikel/2/heroin.png"
                        alt=""
                    />
                </section>
                <section class="sec1">
                    <div class="sec1-text">
                        <h2>5. Methamephetamine</h2>
                        <div class="sec1-text-p">
                            <p>
                                Methamphetamine, atau sabu-sabu, adalah narkoba stimulan yang sangat adiktif dan bekerja pada 
                                sistem saraf pusat. Berbentuk bubuk kristal putih, tidak berbau, dan terasa pahit, sabu-sabu 
                                biasanya ditelan, dihisap, atau disuntikkan. Obat ini dapat mempercepat detak jantung, menyebabkan 
                                suhu tubuh sangat tinggi, serta menimbulkan kecemasan, insomnia, dan gejala psikotik seperti halusinasi. 
                                Penggunaan jangka panjang dapat merusak gigi dan meningkatkan risiko tertular HIV, terutama jika disuntikkan.
                            </p>
                        </div>
                    </div>
                    <img
                        src="/assets/artikel/2/methamephetamine.png"
                        alt=""
                    />
                </section>
                <section class="sec1">
                    <div class="sec1-text">
                        <h2>6. Carisoprodol</h2>
                        <div class="sec1-text-p">
                            <p>
                                Carisoprodol adalah obat resep untuk mengatasi kejang dan nyeri otot, tetapi efek psikoaktifnya 
                                membuatnya rentan disalahgunakan, yang dapat menyebabkan ketergantungan. Pengguna yang kecanduan 
                                sering mengalami penurunan kemampuan fisik atau mental, peningkatan denyut jantung, tremor, kejang, 
                                serta kecemasan dan insomnia yang lebih buruk.
                            </p>
                        </div>
                    </div>
                    <img
                        src="/assets/artikel/2/carisoprodol.gif"
                        alt=""
                    />
                </section>
                <section class="sec1">
                    <div class="sec1-text">
                        <h2>7. Benzodiazepin (BZO)</h2>
                        <div class="sec1-text-p">
                            <p>
                                Benzodiazepin, yang bekerja pada sistem saraf pusat, menghasilkan sedasi dan relaksasi otot, 
                                serta menurunkan kecemasan. Meski bermanfaat, obat ini sering disalahgunakan dan dapat menyebabkan 
                                ketergantungan. Gejala overdosis termasuk kebingungan, pusing, kelemahan, bicara cadel, kurang 
                                koordinasi, sulit bernapas, dan koma. Penghentian tiba-tiba dapat memicu gejala putus obat dan kejang.
                            </p>
                        </div>
                    </div>
                    <img
                        src="/assets/artikel/2/benzodiazepin.png"
                        alt=""
                    />
                </section>
        </main>

            <section class="card-footer">
                    <button class="btn btn-back" onclick="history.back()">
                            Kembali
                    </button>
                    <a href="/edukasi/artikel/4/" class="btn btn-next">Selanjutnya</a>
            </section>

        <!-- footer -->
        <?php include('./../../../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
