<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hasil Screening DUST-10</title>
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

            .textinsidecons {
                display: grid;
                gap: 12px;
            }

            .container h2 {
                text-align: center;
                font-weight: bolder;
            }

            .question-container {
                margin-top: 100px;
                width: 100%;
                height: 220px;
                max-width: 1200px;
                margin: auto;
                border: 4px solid #0460a0;
                padding: 20px;
                border-radius: 10px;
            }

            .result {
                font-size: 1.5rem;
                margin-top: 20px;
            }

            .image-konsultasipage {
                text-align: center;
                height: 300px;
            }

            .image-konsultasipage img {
                position: absolute;
                bottom: 0;
                width: 360px;
                height: auto;
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

            @media (max-width: 768px) {
                .image-konsultasipage img {
                    width: 160px;
                }
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./../../../components/navbar.php') ?>
        <!-- END - Navbar -->

        <?php
            // Ambil skor dari PHP Session atau dari sumber lain yang sesuai
            session_start();
            $score = isset($_SESSION['dust10Score']) ? $_SESSION['dust10Score'] : null;

            $statusMessage = "";
            $kataMotivasi = "";
            $kalimatBwh = "";
            $gbrIllustrasi = "";

            // Tentukan pesan dan gambar berdasarkan skor
            if ($score === 0) {
                $statusMessage = "Tidak ada masalah";
                $kataMotivasi = "Keep it 100! Hidupmu lebih berharga tanpa narkoba!";
                $kalimatBwh = "Hasil skrining kamu tidak ada indikasi menggunakan Narkoba, sehingga kamu dapat bangga terhadap diri kamu dan yang kamu lakukan sudah benar. Jika kamu dapat mempertahankan hal tersebut maka cita-cita akan lebih besar.";
                $gbrIllustrasi = "/assets/dust10resultAmanlah.png";
            } elseif ($score >= 1 && $score <= 2) {
                $statusMessage = "Tidak ada masalah";
                $kataMotivasi = "Jauhi narkoba dan bukalah pintu untuk peluang baru yang lebih baik. Masa depanmu sangat berharga!";
                $kalimatBwh = "Hasil skrining kamu ada indikasi menggunakan Narkoba sekalipun masih dalam taraf rendah, hal ini dapat memperburuk bila kamu tidak menjaga diri dan sebaiknya kamu mengikuti program-program yang ada di IBM.";
                $gbrIllustrasi = "/assets/dust10resultAmanlah.png";
            } elseif ($score >= 3 && $score <= 5) {
                $statusMessage = "Sedang";
                $kataMotivasi = "Percayalah, hidupmu lebih berharga daripada narkoba. Bersama kita akan melalui ini, satu hari demi satu hari.";
                $kalimatBwh = "Hasil skrining kamu ada indikasi penggunaan Narkoba taraf sedang. Hal ini dapat memperburuk bila kamu tidak menjaga diri dan sebaiknya kamu mendapatkan bantuan dari profesional yang menangani perawatan penyalahgunaan Narkoba.";
                $gbrIllustrasi = "/assets/dust10resultAmanlah.png";
            } elseif ($score >= 6 && $score <= 8) {
                $statusMessage = "Tinggi";
                $kataMotivasi = "Percayalah, hidupmu lebih berharga daripada narkoba. Bersama kita akan melalui ini, satu hari demi satu hari.";
                $kalimatBwh = "Hasil skrining kamu ada indikasi menggunakan narkoba dalam taraf tinggi. Hal ini dapat memperburuk bila kamu tidak menjaga diri dan kamu harus mendapatkan bantuan dari profesional yang menangani penyalahgunaan narkoba.";
                $gbrIllustrasi = "/assets/dust10resultWarning.png";
            } elseif ($score >= 9 && $score <= 10) {
                $statusMessage = "Sangat Tinggi";
                $kataMotivasi = "Ayo segera datangi Lembaga Rehab!!";
                $kalimatBwh = "Hasil skrining kamu ada indikasi penggunaan narkoba dalam taraf sangat tinggi. Hal ini dapat memperburuk bila kamu tidak menjaga diri dan kamu harus segera mendapatkan bantuan dari profesional yang menangani perawatan narkoba.";
                $gbrIllustrasi = "/assets/dust10resultWarning.png";
            }
        ?>

        <div class="container">
            <div class="textinsidecons">
                <h1>Instrument Dast 10</h1>
                <div style="display: flex; gap: 12px">
                    <h1 id="result" class="result">Skor Anda: <?= $score ? $score : "Tidak ada skor ditemukan." ?></h1>
                    <h1 class="result">//</h1>
                    <h1 id="statusMessage" class="result"><?= $statusMessage ?></h1>
                </div>
                <h3 id="kataMotivasi"><?= $kataMotivasi ?></h3>
                <p id="kalimatBwh"><?= $kalimatBwh ?></p>
            </div>
            <div class="image-konsultasipage">
                <img id="gbrIllustrasi" src="<?= $gbrIllustrasi ?>" alt="Gambar Illustrasi" />
            </div>
            <div>
                <a href="/rehabilitasi/dast-10/konsultasi/" class="button">Selanjutnya</a>
            </div>
        </div>

        <!-- footer -->
        <?php include('./../../../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
