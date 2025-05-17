<!DOCTYPE html>
<html>

<head>
    <title><?= SITE_NAME ?> - Digital Invitation Indonesia</title>
    <link rel="icon" href="<?php echo base_url() ?>/assets/base/img/favicon.png">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
        content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian...  ">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#6c5ce7" />
    <meta name="author" content="hambaAllah">

    <!-- Required CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/beranda/themes/assets/css/sw-order.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

</head>

<body oncontextmenu="return false">
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md fixed-top justify-content-center">
                <a class="navbar-brand" href="<?php echo base_url() ?>">
                    <img src="<?php echo base_url() ?>/assets/base/img/logo.png" height="35" alt="image">
                </a>
            </nav>
        </div>
    </header>

    <div class="terms-modern-container">
        <section class="terms-hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Syarat dan Ketentuan</h1>
                    <p class="hero-subtitle">Harap baca dengan seksama sebelum menggunakan layanan kami</p>
                    <div class="hero-divider"></div>
                </div>
            </div>
        </section>

        <section class="terms-content">
            <div class="container">
                <div class="terms-card">
                    <div class="intro-section">
                        <p>Dengan mengakses dan menggunakan layanan Rayakan Digital, Anda setuju untuk terikat dengan
                            Syarat dan Ketentuan berikut:</p>
                    </div>

                    <div class="terms-list">
                        <div class="term-item">
                            <div class="term-number">1</div>
                            <div class="term-details">
                                <h3>Penggunaan Layanan</h3>
                                <p>Anda bertanggung jawab atas semua aktivitas yang terjadi di akun Anda. Jangan gunakan
                                    layanan kami untuk hal-hal ilegal, spam, atau penyebaran konten yang tidak sesuai.
                                </p>
                            </div>
                        </div>

                        <div class="term-item">
                            <div class="term-number">2</div>
                            <div class="term-details">
                                <h3>Kepemilikan Konten</h3>
                                <p>Konten yang Anda unggah (foto, video, teks) tetap menjadi milik Anda. Namun, Anda
                                    memberikan izin kepada kami untuk menampilkan dan menyimpan konten tersebut selama
                                    layanan berjalan.</p>
                            </div>
                        </div>

                        <div class="term-item">
                            <div class="term-number">3</div>
                            <div class="term-details">
                                <h3>Pembayaran</h3>
                                <p>Layanan premium hanya bisa diakses setelah pembayaran dilakukan. Semua pembayaran
                                    bersifat final dan tidak dapat dikembalikan kecuali dalam kasus kesalahan dari pihak
                                    kami.</p>
                            </div>
                        </div>

                        <div class="term-item">
                            <div class="term-number">4</div>
                            <div class="term-details">
                                <h3>Perubahan Layanan</h3>
                                <p>Kami berhak untuk mengubah, menghentikan, atau menambah fitur kapan saja tanpa
                                    pemberitahuan sebelumnya demi meningkatkan kualitas layanan.</p>
                            </div>
                        </div>

                        <div class="term-item">
                            <div class="term-number">5</div>
                            <div class="term-details">
                                <h3>Penangguhan Akun</h3>
                                <p>Kami dapat menangguhkan atau menghentikan akun Anda jika ditemukan pelanggaran
                                    terhadap ketentuan ini atau penyalahgunaan layanan.</p>
                            </div>
                        </div>

                        <div class="term-item">
                            <div class="term-number">6</div>
                            <div class="term-details">
                                <h3>Kontak</h3>
                                <p>Untuk pertanyaan terkait kebijakan ini, silakan hubungi tim kami melalui halaman
                                    kontak.</p>
                            </div>
                        </div>
                    </div>

                    <div class="acceptance-section">
                        <p>Dengan menggunakan layanan kami, Anda dianggap telah membaca, memahami, dan menyetujui semua
                            ketentuan yang berlaku.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
    .terms-modern-container {
        font-family: 'Inter', 'Segoe UI', system-ui, sans-serif;
        color: #333;
        line-height: 1.6;
    }

    .terms-hero {
        background: linear-gradient(135deg, #fa9a00, #bb4c96);
        color: white;
        padding: 4rem 0;
        text-align: center;
        margin-bottom: 2rem;
    }

    .terms-hero h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .hero-subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
        font-weight: 400;
    }

    .hero-divider {
        width: 80px;
        height: 4px;
        background: rgba(255, 255, 255, 0.5);
        margin: 1.5rem auto;
        border-radius: 2px;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .terms-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        padding: 3rem;
        margin-top: -50px;
        position: relative;
        z-index: 2;
    }

    .intro-section {
        margin-bottom: 2.5rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid #eee;
    }

    .intro-section p {
        font-size: 1.1rem;
        color: #555;
    }

    .terms-list {
        margin: 2rem 0;
    }

    .term-item {
        display: flex;
        margin-bottom: 2.5rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid #f5f5f5;
    }

    .term-item:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .term-number {
        font-size: 1.8rem;
        font-weight: 700;
        color: #fa9a00;
        min-width: 50px;
        margin-right: 1.5rem;
    }

    .term-details h3 {
        font-size: 1.2rem;
        color: #2c3e50;
        margin-bottom: 0.8rem;
        font-weight: 600;
    }

    .term-details p {
        color: #555;
        font-size: 1rem;
    }

    .acceptance-section {
        background: #f8f9fa;
        padding: 1.5rem;
        border-radius: 8px;
        margin-top: 2rem;
        font-style: italic;
        text-align: center;
        border-left: 4px solid #fa9a00;
    }

    @media (max-width: 768px) {
        .terms-hero {
            padding: 3rem 0;
        }

        .terms-hero h1 {
            font-size: 2rem;
        }

        .terms-card {
            padding: 1.5rem;
            margin-top: -30px;
        }

        .term-item {
            flex-direction: column;
        }

        .term-number {
            margin-bottom: 0.5rem;
        }
    }
    </style>


    <footer class="fdb-block footer-small footer">
        <div class="container text-center">
            <div class="row justify-content-center mb-3">
                <div class="col-auto">
                    <p class="lead footer-social mb-0">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank"
                            href="https://x.com/rayakan_digital"><i class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank"
                            href="https://www.facebook.com/rayakan.digital/"><i class="fab fa-facebook"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank"
                            href="https://www.instagram.com/rayakan_digital/"><i class="fab fa-instagram"></i></a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-footer mb-0">Copyright &#169; <?= date('Y') ?> <?= SITE_NAME ?>. All Rights Reserved
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <script src="<?php echo base_url() ?>/assets/base/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/jquery.nav.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/base/js/main.js"></script>
</body>

</html>