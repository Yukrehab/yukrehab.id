<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Yuk Rehab - Aplikasi Rehabilitasi oleh BNN Jateng</title>
        <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon" />
        <link rel="stylesheet" href="/css/main.css" />
        <link rel="stylesheet" href="/css/components.css" />
        <style>
            .listttt {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                width: max-content;
                gap: 48px;
                margin: auto;
            }
            .linkcard {
                text-decoration: none;
            }
            .card {
                width: 300px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                display: grid;
                gap: 6px;
            }

            .card:hover {
                filter: blur(1px);
            }

            .card-header {
                border-radius: 0 0 -10px -10px;
                background-color: #00a2ff;
                color: white;
                text-align: center;
                padding: 15px;
                font-weight: 900;
                font-size: 18px;
            }

            .card-image {
                background-color: #00a2ff;
                padding: 20px;
                width: 300px; /* Ukuran kontainer yang lebih besar */
                height: 300px; /* Ukuran kontainer yang lebih besar */
                border: 1px solid #fff;
                border-radius: 5px;
                overflow: hidden; /* Pastikan gambar tidak meluap dari kontainer */
                text-align: center; /* Mengatur teks di dalam kontainer, jika ada */
                display: flex; /* Menggunakan flexbox untuk menyejajarkan gambar */
                align-items: center; /* Menyelaraskan gambar secara vertikal */
                justify-content: center; /* Menyelaraskan gambar secara horizontal */
            }

            .card-image img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* Memastikan gambar mengisi kontainer dengan proporsi yang benar */
                display: block; /* Menghilangkan jarak bawah pada gambar */
                border: 1px solid #fff; /* Menambahkan border pada gambar jika diperlukan */
                border-radius: 5px; /* Menambahkan border-radius pada gambar jika diperlukan */
            }

            @media (max-width: 768px) {
                .listttt {
                    grid-template-columns: repeat(1, minmax(0, 1fr));
                }
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include('./../components/navbar.php') ?>
        <!-- END - Navbar -->
        <div style="padding: 24px; display: grid; gap: 48px">
            <div>
                <h1 style="text-align: center">Edukasi.</h1>
                <p style="text-align: center; max-width: 480px; margin: auto">
                    Halaman ini memberikan informasi mengenai pengertian narkoba
                    dan bahayanya bagi kesehatan, serta edukasi tentang
                    penyalahgunaan narkotika
                </p>
            </div>
            <!-- item -->
            <div class="listttt">
                <a href="/edukasi/artikel/1" class="linkcard">
                    <div class="card">
                        <div class="card-header">Apa Itu Narkoba?</div>
                        <div class="card-image">
                            <img 
                                src="/assets/artikel/cover_1.jpg" 
                                alt="Narkoba" 
                            />
                        </div>
                    </div>
                </a>
                <a href="/edukasi/artikel/2" class="linkcard">
                    <div class="card">
                        <div class="card-header">Jenis Jenis Narkoba</div>
                        <div class="card-image">
                            <img
                                src="/assets/artikel/cover_2.jpg"
                                alt="Narkoba"
                            />
                        </div>
                    </div>
                </a>
                <a href="/edukasi/artikel/4" class="linkcard">
                    <div class="card">
                        <div class="card-header">Bahaya Narkoba?</div>
                        <div class="card-image">
                            <img
                                src="/assets/artikel/cover_4.jpg"
                                alt="Narkoba"
                            />
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- footer -->
        <?php include('./../components/footer.php') ?>
        <!-- END - footer -->
    </body>
</html>
