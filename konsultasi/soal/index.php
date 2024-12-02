<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['question1'] = $_POST['question1'];
    $_SESSION['question2'] = $_POST['question2'];

    // Redirect ke halaman lain jika perlu
    header('Location: /konsultasi/thankyou/');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Konsultasi Page</title>
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="/css/components.css" />
        <link rel="stylesheet" href="/css/pages/landing-pages.css" />
        <style>
            /* General styling */
            .container {
                max-width: 900px;
                margin: auto;
            }
            .question {
                margin: 20px 0;
            }
            .question h2 {
                font-size: 1.5rem;
                margin-bottom: 20px;
            }
            .options {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }
            .options button {
                flex: 1 1 45%;
                padding: 10px;
                font-size: 1rem;
                border: 2px solid #0460a0;
                color: black;
                border-radius: 5px;
                cursor: pointer;
            }
            .options button.selected {
                background-color: #004b7a;
            }
            .options-single button.selected {
                background-color: #004b7a;
            }
            .next-btn {
                display: block;
                margin-top: 20px;
                padding: 10px;
                background-color: #0460a0;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 1.2rem;
                cursor: pointer;
            }
            .next-btn:disabled {
                background-color: #cccccc;
                cursor: not-allowed;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./../../components/navbar.php') ?>
        <!-- END - Navbar -->
        <div class="container">
            <div id="question1" class="question">
                <h2>
                    Dalam Hidup Kamu, Zat apa dibawah ini yang pernah kamu
                    gunakan?
                </h2>
                <div class="options">
                    <button onclick="toggleSelection(this, 'question1')">
                        Produk tembakau
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        Inhalansia
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        Minuman Alkohol
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        Obat tidur
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        Kanabis
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        HALUSINOGEN
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        Kokain
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        OPIOID
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        Stimulun Jenis amfetamin
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        LAINYA / ZAT NARKOBA BARU
                    </button>
                    <button onclick="toggleSelection(this, 'question1')">
                        TIDAK PERNAH
                    </button>
                </div>
            </div>

            <div id="question2" class="question" style="display: none">
                <h2>
                    Dalam 3 Bulan terakhir, seberapa sering kamu menggunakan zat
                    tersebut?
                </h2>
                <div class="options options-single">
                    <button onclick="selectSingleOption(this, 'question2')">
                        Tidak Pernah
                    </button>
                    <button onclick="selectSingleOption(this, 'question2')">
                        Tiap Minggu
                    </button>
                    <button onclick="selectSingleOption(this, 'question2')">
                        Sekali atau dua kali
                    </button>
                    <button onclick="selectSingleOption(this, 'question2')">
                        Selalu atau Hampir selalu
                    </button>
                    <button onclick="selectSingleOption(this, 'question2')">
                        Tiap Bulan
                    </button>
                </div>
            </div>

            <button id="nextBtn" class="next-btn" onclick="goToNextQuestion()">
                Selanjutnya
            </button>
        </div>

        <!-- Form untuk mengirim jawaban ke server -->
        <form id="answerForm" method="post" action="">
            <input type="hidden" name="question1" id="question1Input" />
            <input type="hidden" name="question2" id="question2Input" />
        </form>

        <script>
            const userAnswers = {
                question1: [],
                question2: null,
            };

            function toggleSelection(element, question) {
                element.classList.toggle("selected");
                const answer = element.textContent;

                if (userAnswers[question].includes(answer)) {
                    userAnswers[question] = userAnswers[question].filter(
                        (item) => item !== answer
                    );
                } else {
                    userAnswers[question].push(answer);
                }

                console.log(userAnswers);
            }

            function selectSingleOption(element, question) {
                document
                    .querySelectorAll(`#${question} .options-single button`)
                    .forEach((btn) => {
                        btn.classList.remove("selected");
                    });

                element.classList.add("selected");
                userAnswers[question] = element.textContent;

                console.log(userAnswers);
            }

            function goToNextQuestion() {
                const question1 = document.getElementById("question1");
                const question2 = document.getElementById("question2");
                const nextBtn = document.getElementById("nextBtn");

                if (question1.style.display !== "none") {
                    if (userAnswers.question1.length === 0) {
                        alert("Please select at least one option");
                        return;
                    }

                    question1.style.display = "none";
                    question2.style.display = "block";
                    nextBtn.textContent = "Selanjutnya";
                } else {
                    if (!userAnswers.question2) {
                        alert("Please select one option");
                        return;
                    }

                    // Kirim jawaban ke server melalui form
                    document.getElementById("question1Input").value =
                        JSON.stringify(userAnswers.question1);
                    document.getElementById("question2Input").value =
                        userAnswers.question2;
                    document.getElementById("answerForm").submit();
                }
            }
        </script>

        <!-- footer -->
        <?php include('./../../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
