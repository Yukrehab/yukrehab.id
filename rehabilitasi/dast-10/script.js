// Daftar pertanyaan dan poin untuk setiap jawaban
const questions = [
    {
        text: "Apakah anda menggunakan obat selain yang diperlukan untuk alasan medis?",
        pointYes: 1,
        pointNo: 0,
    },
    {
        text: "Apakah anda menyalahgunakan lebih dari satu zat pada satu waktu??",
        pointYes: 1,
        pointNo: 0,
    },
    {
        text: "Apakah anda selalu bisa berhenti menggunakan obat/narkoba ketika anda ingin? (jika tidak menggunakan)",
        pointYes: 1,
        pointNo: 0,
    },
    {
        text: "Apakah anda memiliki pengalaman tidak sadarkan diri ( black out) sebagai akibat dari penggunaan obat/narkoba?",
        pointYes: 1,
        pointNo: 0,
    },
    {
        text: "Apakah anda pernah merasa buruk atau bersalah tentang penggunaan obat/narkoba anda? jika tidak pernah pilih tidak",
        pointYes: 1,
        pointNo: 0,
    },
    {
        text: "Apakah pasangan anda/orang tua pernah mengeluh tentang ketergantungan anda dengan obat/narkotika?",
        pointYes: 1,
        pointNo: 0,
    },
    {
        text: "Apakah anda pernah mengabaikan keluarga anda karena penggunaan obat/narkotika?",
        pointYes: 1,
        pointNo: 0,
    },
    {
        text: "Apakah anda terlibat dalam kegiatan ilegal untuk mendapatkan obat/narkotika?",
        pointYes: 1,
        pointNo: 0,
    },
    {
        text: "Apakah anda pernah merasakan gejala putus zat (merasa sakit) ketika anda menghentikan pengangguran obat/narkotika",
        pointYes: 1,
        pointNo: 0,
    },
    {
        text: "Apakah anda memiliki masalah medis sebagai akibat dari penggunaan obat/narkotika (misalnya: kehilangan memori, hepatitis, kejang, pendarahan,dll)",
        pointYes: 1,
        pointNo: 0,
    },
];

let currentQuestionIndex = 0;
let score = <?php echo $_SESSION['dust10Score']; ?>;

function loadQuestion() {
    if (currentQuestionIndex < questions.length) {
        document.getElementById("question").textContent =
            questions[currentQuestionIndex].text;
    } else {
        showResult();
    }
}

function answerQuestion(isYes) {
    if (isYes) {
        score += questions[currentQuestionIndex].pointYes;
    } else {
        score += questions[currentQuestionIndex].pointNo;
    }

    currentQuestionIndex++;
    loadQuestion();
}

function showResult() {
    document.getElementById("question").style.display = "none";
    document
        .querySelectorAll(".answer-btn")
        .forEach((button) => (button.style.display = "none"));
    document.getElementById("result").textContent = "Skor Anda: " + score;

    // Simpan skor ke sesi PHP
    <?php $_SESSION['dust10Score'] = "<script>document.write(score);</script>"; ?>

    // Alihkan ke halaman hasil setelah 0.5 detik
    setTimeout(() => {
        window.location.href = "/rehabilitasi/dust-10/end/";
    }, 500);
}

// Mulai pertanyaan pertama saat halaman dimuat
loadQuestion();