<?php 
session_start(); 

// Reset session jika tombol reset ditekan
if (isset($_POST['reset'])) {
    $_SESSION['dust10Score'] = 0; 
    $_SESSION['currentQuestionIndex'] = 0;
}

// Inisialisasi skor jika belum ada di sesi
if (!isset($_SESSION['dust10Score'])) {
    $_SESSION['dust10Score'] = 0; 
}

// Daftar pertanyaan
$questions = [
    "Apakah Anda menggunakan obat-obatan/narkoba selain yang diperlukan untuk alasan medis?",
    "Apakah Anda menyalahgunakan lebih dari satu zat (obat-obatan/narkoba) pada suatu waktu?",
    "Apakah Anda selalu tidak bisa menghentikan penyalahgunaan zat (obat-obatan/Narkoba) ketika anda ingin?",
    "Apakah Anda pernah mengalami 'kehilangan memori/ nge-blank (blackouts)/kilas balik (flashbacks)' sebagai akibat dari penyalahgunaan obat-obatan/ Narkoba?",
    "Apakah anda pernah merasa tidak enak/buruk/bersalah tentang penyalahgunaan zat (obat-obatan/ Narkoba)?",
    "Apakah pasangan/orang tua/saudara anda pernah keberatan/mengeluh tentang keterlibatan Anda dengan obat-obatan/ Narkoba?",
    "Apakah anda diabaikan keluarga/pasangan/saudara karena penyalahgunaan obat-obatan/Narkoba?",
    "Apakah Anda terlibat dalam kegiatan illegal/melanggar hukum untuk mendapatkan obat-obatan/Narkoba?",
    "Apakah Anda pernah merasakan gejala putus zat (merasa sakit) ketika Anda menghentikan penyalahgunaan obat-obatan/Narkoba?",
    "Apakah Anda memiliki masalah medis sebagai akibat dari penyalahgunaan obat-obatan/ Narkoba (misalnya, kehilangan memori, hepatitis, kejang, pendarahan, dan lain-lain)?"
];

// Tentukan indeks pertanyaan saat ini
$currentQuestionIndex = isset($_SESSION['currentQuestionIndex']) ? $_SESSION['currentQuestionIndex'] : 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['reset'])) {
    if (isset($_POST['answer'])) {
        if ($_POST['answer'] == 'yes') {
            $_SESSION['dust10Score'] += 1;
        }
        $_SESSION['currentQuestionIndex'] += 1;
    }
    
    // Cek jika sudah selesai semua pertanyaan
    if ($_SESSION['currentQuestionIndex'] >= count($questions)) {
        header('Location: ./end/'); // Redirect to the results page
        exit();
    }
    $currentQuestionIndex = $_SESSION['currentQuestionIndex'];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Screening DUST-10</title>
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

            .textinsidecons {
                display: grid;
                gap: 8px;
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

            .question {
                width: 90%;
                font-size: 1.5rem;
                margin-bottom: 20px;
                font-weight: bolder;
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

            .result {
                font-size: 1.5rem;
                margin-top: 20px;
                color: white;
            }

            .results {
                max-width: fit-content;
                margin: 0 auto;
            }

            .image-konsultasipage {
                text-align: right;
                position: relative;
                height: 100px;
            }

            .image-konsultasipage img {
                position: absolute;
                bottom: 0;
                right: 0;
                width: 240px;
                height: auto;
            }

            @media (max-width: 768px) {
                .image-konsultasipage img {
                    display: none;
                }

                .question-container {
                    height: auto;
                }

                .question {
                    width: 90%;
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
            <h1>Skrining</h1>
            <p>
                Silahkan menjawab sesuai keluhan yang dialami, jika sesuai tekan tombol “Ya” jika tidak sesuai silahkan tekan tombol “TIDAK”
            </p>
        </div>
        <h2>PENGISIAN DUST-10</h2>
        <div class="question-container">
            <div id="question" class="question">
                <p><?php echo $questions[$currentQuestionIndex]; ?></p>
            </div>
        </div>
        <div class="results">
            <form method="post" action="">
                <button type="submit" name="answer" value="yes" class="answer-btn yes">YA</button>
                <button type="submit" name="answer" value="no" class="answer-btn no">TIDAK</button>
                <!-- Tambahkan tombol reset -->
                <button type="submit" name="reset" class="reset-btn">Reset</button>
            </form>
        </div>
        <div class="image-konsultasipage">
            <img src="/assets/dust10Image.png" alt="Gambar Konsultasi Page" />
        </div>
    </div>

    <!-- footer -->
    <?php include('./../../components/footer.php') ?>
    <!-- END - footer -->
</body>
</html>
