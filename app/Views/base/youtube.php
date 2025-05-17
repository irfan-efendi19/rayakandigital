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

    <div class="modern-tutorial-container">
        <section class="modern-tutorial">
            <div class="tutorial-header">
                <h1 class="tutorial-title">Tutorial Menambahkan Video ke Undangan</h1>
                <p class="tutorial-subtitle">Panduan mudah untuk menyematkan video YouTube ke undangan digital Anda</p>
                <div class="header-divider"></div>
            </div>

            <div class="tutorial-steps">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3 class="step-title">Upload Video ke YouTube</h3>
                        <p class="step-description">Pastikan video Anda sudah diupload ke YouTube.com sebelum memulai
                            proses ini.</p>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3 class="step-title">Buka dan Bagikan Video</h3>
                        <p class="step-description">Buka video Anda di YouTube dan tekan tombol "Bagikan" di bawah
                            video.</p>
                        <div class="step-image">
                            <img src="<?= base_url() ?>/assets/base/img/tutorial/youtube1.png"
                                alt="Tombol Bagikan YouTube" class="img-fluid shadow">
                            <div class="image-caption">Tampilan tombol bagikan di YouTube</div>
                        </div>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3 class="step-title">Salin Link Video</h3>
                        <p class="step-description">Akan muncul tampilan berbagi. Salin link dengan menekan tombol
                            "Salin".</p>
                        <div class="step-image">
                            <img src="<?= base_url() ?>/assets/base/img/tutorial/youtube2.png"
                                alt="Dialog berbagi YouTube" class="img-fluid shadow">
                            <div class="image-caption">Dialog berbagi YouTube</div>
                        </div>
                    </div>
                </div>

                <div class="step-card highlight-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3 class="step-title">Perhatikan Format Link</h3>
                        <p class="step-description"><strong>Pastikan</strong> link YouTube memiliki format seperti ini:
                        </p>
                        <div class="code-block">
                            <code>https://youtu.be/xxxxxxxx</code>
                        </div>
                        <div class="step-note">
                            <i class="fas fa-exclamation-circle"></i> Jika format berbeda, video mungkin tidak akan
                            tampil
                        </div>
                    </div>
                </div>

                <div class="step-card">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3 class="step-title">Tempelkan Link ke Form</h3>
                        <p class="step-description">Masukkan link yang sudah disalin ke dalam form yang tersedia di
                            platform kami, kemudian simpan.</p>
                        <div class="step-image">
                            <img src="<?= base_url() ?>/assets/base/img/tutorial/youtube3.png"
                                alt="Form input link YouTube" class="img-fluid shadow">
                            <div class="image-caption">Tampilan form input link video</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tutorial-footer">
                <p class="support-text">Butuh bantuan lebih lanjut? <a href="#" class="support-link">Hubungi tim support
                        kami</a></p>
            </div>
        </section>
    </div>

    <style>
    .modern-tutorial-container {
        max-width: 1200px;
        margin: 80px auto 60px;
        padding: 0 20px;
        font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }

    .modern-tutorial {
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        padding: 40px;
    }

    .tutorial-header {
        text-align: center;
        margin-bottom: 40px;
    }

    .tutorial-title {
        color: #2c3e50;
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .tutorial-subtitle {
        color: #7f8c8d;
        font-size: 1.1rem;
        font-weight: 400;
        margin-bottom: 20px;
    }

    .header-divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #fa9a00, #9b59b6);
        margin: 0 auto;
        border-radius: 2px;
    }

    .tutorial-steps {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .step-card {
        display: flex;
        background: #f9f9f9;
        border-radius: 10px;
        padding: 25px;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .step-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .step-card.highlight-step {
        background: #f0f7fd;
        border-left: 4px solid #fa9a00;
    }

    .step-number {
        background: #fa9a00;
        color: white;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        flex-shrink: 0;
        margin-right: 20px;
    }

    .step-content {
        flex: 1;
    }

    .step-title {
        color: #2c3e50;
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .step-description {
        color: #34495e;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .step-image {
        margin-top: 15px;
        border-radius: 8px;
        overflow: hidden;
    }

    .shadow {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .image-caption {
        font-size: 0.85rem;
        color: #7f8c8d;
        text-align: center;
        margin-top: 8px;
        font-style: italic;
    }

    .code-block {
        background: #2c3e50;
        color: #ecf0f1;
        padding: 12px 15px;
        border-radius: 6px;
        font-family: 'Courier New', monospace;
        margin: 10px 0;
        overflow-x: auto;
    }

    .step-note {
        background: #fff8e1;
        border-left: 3px solid #ffc107;
        padding: 10px 15px;
        border-radius: 0 4px 4px 0;
        margin-top: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #e65100;
        font-size: 0.9rem;
    }

    .tutorial-footer {
        text-align: center;
        margin-top: 50px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }

    .support-text {
        color: #7f8c8d;
    }

    .support-link {
        color: #fa9a00;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s;
    }

    .support-link:hover {
        color: #fa9a00;
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .modern-tutorial {
            padding: 25px;
        }

        .step-card {
            flex-direction: column;
        }

        .step-number {
            margin-right: 0;
            margin-bottom: 15px;
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