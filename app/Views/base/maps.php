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
                <div class="tutorial-badge">
                    <i class="fas fa-map-marked-alt"></i> Panduan Lokasi
                </div>
                <h1 class="tutorial-title">Tutorial Menambahkan Peta ke Undangan</h1>
                <p class="tutorial-subtitle">Petunjuk lengkap untuk menyematkan Google Maps ke undangan digital Anda</p>
                <div class="header-divider"></div>
            </div>

            <div class="tutorial-steps">
                <!-- Step 1 -->
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3 class="step-title">Temukan Lokasi di Google Maps</h3>
                        <p class="step-description">Buka <a href="https://www.google.com/maps" target="_blank"
                                class="link">google.com/maps</a> dan cari lokasi pernikahan Anda.</p>
                        <div class="step-tip">
                            <i class="fas fa-lightbulb"></i> Tip: Gunakan alamat lengkap atau nama venue untuk pencarian
                            lebih akurat
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3 class="step-title">Tekan Tombol Share</h3>
                        <p class="step-description">Setelah menemukan lokasi, tekan tombol <strong>Share</strong> pada
                            menu.</p>
                        <div class="step-image">
                            <img src="<?= base_url() ?>/assets/base/img/tutorial/maps1.png"
                                alt="Tampilan Google Maps dengan tombol Share" class="img-fluid shadow">
                            <div class="image-caption">Tampilan Google Maps dengan tombol Share</div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="step-card highlight-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3 class="step-title">Pilih Embed Maps</h3>
                        <p class="step-description">Pada dialog yang muncul, pilih tab <strong>Embed Maps</strong>.</p>
                        <div class="step-image">
                            <img src="<?= base_url() ?>/assets/base/img/tutorial/maps2.png"
                                alt="Dialog berbagi dengan pilihan Embed Maps" class="img-fluid shadow">
                            <div class="image-caption">Pilih Embed Maps untuk mendapatkan kode HTML</div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="step-card">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3 class="step-title">Salin Kode HTML</h3>
                        <p class="step-description">Klik <strong>Copy HTML</strong> untuk menyalin kode embed peta.</p>
                        <div class="step-image">
                            <img src="<?= base_url() ?>/assets/base/img/tutorial/maps3.png"
                                alt="Tampilan embed code Google Maps" class="img-fluid shadow">
                            <div class="image-caption">Tombol Copy HTML untuk menyalin kode</div>
                        </div>
                        <div class="step-note">
                            <i class="fas fa-info-circle"></i> Kode ini berisi iframe yang akan menampilkan peta
                            interaktif
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="step-card">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3 class="step-title">Tempelkan ke Form Undangan</h3>
                        <p class="step-description">Masukkan kode HTML yang telah disalin ke dalam form yang disediakan,
                            lalu simpan.</p>
                        <div class="step-image">
                            <img src="<?= base_url() ?>/assets/base/img/tutorial/maps4.png" alt="Form input kode peta"
                                class="img-fluid shadow">
                            <div class="image-caption">Tempat untuk menempelkan kode peta</div>
                        </div>
                        <div class="step-success">
                            <i class="fas fa-check-circle"></i> Peta akan otomatis muncul di undangan Anda setelah
                            disimpan!
                        </div>
                    </div>
                </div>
            </div>

            <div class="tutorial-footer">
                <div class="support-box">
                    <i class="fas fa-question-circle"></i>
                    <div>
                        <h4>Butuh Bantuan?</h4>
                        <p>Hubungi tim support kami untuk panduan lebih lanjut</p>
                        <a href="#" class="support-button">Kontak Support</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
    .modern-tutorial-container {
        max-width: 800px;
        margin: 80px auto;
        padding: 0 20px;
        font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
    }

    .modern-tutorial {
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        padding: 40px;
        position: relative;
        overflow: hidden;
    }

    .tutorial-header {
        text-align: center;
        margin-bottom: 40px;
        position: relative;
    }

    .tutorial-badge {
        display: inline-block;
        background: linear-gradient(135deg, #fa9a00, #bb4c96);
        color: white;
        padding: 6px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .tutorial-badge i {
        margin-right: 8px;
    }

    .tutorial-title {
        color: #2c3e50;
        font-size: 2rem;
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
        background: linear-gradient(90deg, #fa9a00, #EA4335);
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
        border-radius: 12px;
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

    .link {
        color: #fa9a00;
        text-decoration: none;
        font-weight: 500;
    }

    .link:hover {
        text-decoration: underline;
    }

    .step-tip {
        background: #e8f5e9;
        border-left: 3px solid #34A853;
        padding: 10px 15px;
        border-radius: 0 6px 6px 0;
        margin-top: 10px;
        font-size: 0.9rem;
        color: #2e7d32;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .step-tip i {
        color: #34A853;
    }

    .step-image {
        margin-top: 15px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #eee;
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

    .step-note {
        background: #fff8e1;
        border-left: 3px solid #FBBC05;
        padding: 10px 15px;
        border-radius: 0 6px 6px 0;
        margin-top: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #E65100;
        font-size: 0.9rem;
    }

    .step-note i {
        color: #FBBC05;
    }

    .step-success {
        background: #e8f5e9;
        border-left: 3px solid #34A853;
        padding: 10px 15px;
        border-radius: 0 6px 6px 0;
        margin-top: 15px;
        display: flex;
        align-items: center;
        gap: 8px;
        color: #2e7d32;
        font-size: 0.9rem;
    }

    .step-success i {
        color: #34A853;
    }

    .tutorial-footer {
        margin-top: 50px;
    }

    .support-box {
        background: #f5f5f5;
        border-radius: 12px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .support-box i {
        font-size: 2rem;
        color: #fa9a00;
    }

    .support-box h4 {
        margin: 0 0 5px 0;
        color: #2c3e50;
    }

    .support-box p {
        margin: 0 0 10px 0;
        color: #7f8c8d;
        font-size: 0.9rem;
    }

    .support-button {
        display: inline-block;
        background: #fa9a00;
        color: white;
        padding: 8px 20px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 500;
        transition: background 0.3s;
    }

    .support-button:hover {
        background: #fa9a00;
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

        .support-box {
            flex-direction: column;
            text-align: center;
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