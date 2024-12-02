<?php 
session_start();

// Inisialisasi variabel
$nama = "";
$telepon = "";
$errorMsg = "";
$waMessage = "";
$showPopup = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['saveData'])) {
        $nama = trim($_POST['nama']);
        $telepon = trim($_POST['telepon']);
        
        // Validasi input
        if (empty($nama) || empty($telepon)) {
            $errorMsg = "Harap lengkapi Nama dan No. Telpon Anda.";
        } else {
            // Simpan data ke session
            $_SESSION['nama'] = $nama;
            $_SESSION['telepon'] = $telepon;
            
            // Ambil jawaban dari form
            $screeningAnswers = isset($_SESSION['question1']) ? json_decode($_SESSION['question1'], true) : [];
            $question2Answer = isset($_SESSION['question2']) ? $_SESSION['question2'] : '';
            
            // Simpan jawaban di session
            $_SESSION['screeningAnswers'] = $screeningAnswers;
            $_SESSION['question2Answer'] = $question2Answer;
            
            // Siapkan pesan WhatsApp
            $dust10Score = isset($_SESSION['dust10Score']) ? $_SESSION['dust10Score'] : 'Belum ada skor';
            $screeningAnswersText = empty($screeningAnswers) ? 'Tidak ada' : implode(", ", $screeningAnswers);
            $waMessage = "Hi, CS! Saya ingin mengajukan jadwal konsultasi kepada BNN.\n\n";
            $waMessage .= "Nama: $nama\n";
            $waMessage .= "No. Telpon: $telepon\n";
            $waMessage .= "Skor DUST-10: $dust10Score\n";
            $waMessage .= "Obat-obatan yang digunakan: $screeningAnswersText\n";
            $waMessage .= "Pemakaian 3 bulan terakhir: $question2Answer";

            // Tampilkan popup
            $showPopup = true;
        }
    }
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
            /* CSS abaikan saja */
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

            .form-container {
                display: grid;
                gap: 16px;
                margin-top: 20px;
            }

            .form-container input {
                padding: 10px;
                font-size: 1rem;
                border: 1px solid #ccc;
                border-radius: 5px;
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

            .hubungi-cs-btn,
            .save-data-btn {
                padding: 10px 20px;
                font-size: 1rem;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 20px;
                text-align: center;
                border: 1px solid #000;
                display: block;
            }

            .hubungi-cs-btn {
                background-color: #28a745;
                color: white;
                text-decoration: none;
            }

            .save-data-btn {
                background-color: #007bff;
                color: white;
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

            /* #hubungi-cs-link {
                display: none; Awalnya link disembunyikan
            } */

            /* Popup Styles */
            .popup {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgb(0, 0, 0);
                background-color: rgba(0, 0, 0, 0.4);
                padding-top: 60px;
            }

            .popup-content {
                background-color: #fefefe;
                margin: 5% auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
                max-width: 600px;
                border-radius: 10px;
                text-align: center;
            }

            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }

            @media (max-width: 768px) {
                .image-konsultasipage img {
                    display: none;
                }

                .question {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./../components/navbar.php') ?>
        <!-- END - Navbar -->

        <div class="container">
            <div class="textinsidecons">
                <h1>Rehabilitasi Berkelanjutan</h1>
                <p>
                    Silahkan mengisi identitas terlebih dahulu, kemudian tekan
                    tombol "Simpan Data" sebelum menghubungi CS.
                </p>
            </div>

            <div class="form-container">
                <?php if ($errorMsg): ?>
                <p style="color: red"><?php echo $errorMsg; ?></p>
                <?php endif; ?>
                <form method="post">
                    <input
                        type="text"
                        name="nama"
                        value="<?php echo htmlspecialchars($nama); ?>"
                        placeholder="Nama Lengkap"
                    />
                    <input
                        type="text"
                        name="telepon"
                        value="<?php echo htmlspecialchars($telepon); ?>"
                        placeholder="No. Telpon"
                    />
                    <button type="submit" name="saveData" class="save-data-btn">
                        Simpan Data
                    </button>
                </form>
            </div>
        </div>

        <!-- The Popup -->
        <?php if ($showPopup): ?>
        <div class="popup" style="display: block">
            <div class="popup-content">
                <span
                    class="close"
                    onclick="document.querySelector('.popup').style.display='none'; document.getElementById('hubungi-cs-link').style.display='block';"
                    >&times;</span
                >
                <h1>Apakah data anda sudah benar?</h1>
                <p>
                    Nama:
                    <?php echo htmlspecialchars($nama); ?>
                </p>
                <p>
                    No. Telpon:
                    <?php echo htmlspecialchars($telepon); ?>
                </p>
                <p>
                    Skor DUST-10:
                    <?php echo htmlspecialchars($dust10Score); ?>
                </p>
                <!-- Mengganti $screeningAnswersText dengan format yang benar -->
                <p>
                    Obat-obatan yang digunakan:
                    <?php echo htmlspecialchars(implode(", ", $_SESSION['screeningAnswers'])); ?>
                </p>
                <p>
                    Penggunaan dalam 3 bulan terakhir:
                    <?php echo htmlspecialchars($_SESSION['question2Answer']); ?>
                </p>
                <a
                    href="https://api.whatsapp.com/send?phone=+6281368623918&text=<?php echo urlencode($waMessage); ?>"
                    id="hubungi-cs-link"
                    class="hubungi-cs-btn"
                    target="_blank"
                    >Hubungi CS
                </a>
            </div>
        </div>
        <?php endif; ?>

         <!-- Navbar -->
         <?php include('./../components/footer.php') ?>
        <!-- END - Navbar -->
    </body>
</html>
