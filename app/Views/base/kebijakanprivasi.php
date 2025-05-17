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

    <div class="privacy-policy-container">
        <div class="privacy-header">
            <div class="container">
                <h1>Kebijakan Privasi</h1>
                <p class="subtitle">Bagaimana kami melindungi dan menggunakan informasi Anda</p>
            </div>
        </div>

        <div class="privacy-content">
            <div class="container">
                <div class="privacy-card">
                    <div class="card-section">
                        <h2 class="section-title">
                            <span class="icon">📋</span>
                            Pengumpulan Data
                        </h2>
                        <p>Kami mengumpulkan informasi pribadi tertentu dari Anda agar Rayakan Digital dapat memberikan
                            layanan terbaik. Anda akan langsung memberikan informasi pribadi (contohnya saat
                            pendaftaran, pengisian formulir, atau mengunjungi halaman) dan beberapa informasi akan
                            secara otomatis dikumpulkan ketika Anda menggunakan website Rayakan Digital.</p>
                    </div>

                    <div class="card-section">
                        <h2 class="section-title">
                            <span class="icon">🔍</span>
                            Data Teknis
                        </h2>
                        <p>Ketika Anda menggunakan aplikasi dan/atau mengunjungi website, kami akan memproses data
                            teknis seperti (namun tidak terbatas pada) alamat IP Anda, halaman yang pernah Anda
                            kunjungi, browser internet yang Anda gunakan, halaman web yang sebelumnya/selanjutnya Anda
                            kunjungi dan durasi setiap kunjungan/sesi.</p>
                        <p>Dengan data ini, kami dapat menyelesaikan kesulitan teknis atau memperbaiki kemampuan akses
                            ke bagian-bagian tertentu dari aplikasi maupun website. Kami menggunakan informasi pribadi
                            dalam bentuk anonim dan agregat untuk menganalisis fitur-fitur yang paling sering digunakan
                            serta pola penggunaan.</p>
                    </div>

                    <div class="card-section">
                        <h2 class="section-title">
                            <span class="icon">🤝</span>
                            Penggunaan Data
                        </h2>
                        <p>Anda dengan ini setuju bahwa data Anda akan digunakan oleh pemrosesan data internal kami
                            untuk memberikan layanan yang lebih baik kepada Anda. Kami dapat mempekerjakan perusahaan
                            dan pihak ketiga untuk memfasilitasi atau memberikan layanan atas nama kami, seperti bantuan
                            pelanggan, analisis web, pemeliharaan sistem, hingga audit profesional.</p>
                    </div>

                    <div class="card-section">
                        <h2 class="section-title">
                            <span class="icon">🔒</span>
                            Keamanan Data
                        </h2>
                        <p>Pihak ketiga hanya memiliki akses atas informasi pribadi Anda untuk melakukan tugas-tugas
                            atas nama kami dan secara kontraktual terikat untuk menjaga kerahasiaan dan tidak
                            menggunakan data tersebut untuk tujuan lain.</p>
                        <p>Kami tidak menjual atau menyewakan informasi pribadi Anda kepada pihak ketiga.</p>
                    </div>

                    <div class="card-section">
                        <h2 class="section-title">
                            <span class="icon">🔄</span>
                            Perubahan Kebijakan
                        </h2>
                        <p>Kami dapat mengubah Kebijakan Privasi ini untuk mencerminkan perubahan dalam layanan kami.
                            Jika terdapat perubahan, kami akan memberitahu Anda melalui email atau pemberitahuan di
                            website setidaknya satu hari sebelum perubahan berlaku.</p>
                    </div>

                    <div class="card-section acceptance">
                        <p>Dengan menggunakan aplikasi dan/atau mengunjungi website kami, Anda mengakui bahwa Anda telah
                            membaca, memahami, dan menyetujui Kebijakan Privasi ini.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    .privacy-policy-container {
        font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        color: #333;
        line-height: 1.6;
    }

    .privacy-header {
        background: linear-gradient(90deg, #fa9a00, #bb4c96);
        color: white;
        padding: 3rem 0;
        text-align: center;
        margin-bottom: 2rem;
    }

    .privacy-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .privacy-header .subtitle {
        font-size: 1.2rem;
        opacity: 0.9;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .privacy-card {
        background: white;
        border-radius: 10px;
        padding: 2.5rem;
        margin-bottom: 3rem;
    }

    .card-section {
        margin-bottom: 2.5rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid #eee;
    }

    .card-section:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .section-title {
        font-size: 1.4rem;
        color: #2c3e50;
        margin-bottom: 1.2rem;
        display: flex;
        align-items: center;
    }

    .section-title .icon {
        margin-right: 10px;
        font-size: 1.2em;
    }

    p {
        margin-bottom: 1rem;
        font-size: 1rem;
    }

    .acceptance {
        background: #f8f9fa;
        padding: 1.5rem;
        border-radius: 8px;
        font-style: italic;
    }

    @media (max-width: 768px) {
        .privacy-header {
            padding: 2rem 0;
        }

        .privacy-header h1 {
            font-size: 2rem;
        }

        .privacy-card {
            padding: 1.5rem;
        }

        .section-title {
            font-size: 1.2rem;
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