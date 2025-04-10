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

    <div class="konten"
        style="display: flex;flex-grow: 1;overflow-x: hidden;flex-direction: row;margin-top: 60px;margin-bottom: 40px;">
        <section class="fdb-block" style="padding-top: 20px;flex:1; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-8 col-xl-6">

                        <div class="row">
                            <div class="col text-center">
                                <h1 style="color: #3498db;margin-bottom:0px;">Tutorial!</h1>
                                <p tyle="font-size: 15px;font-weight:500; ">Susunan Data untuk Import Data Tamu (Excel)
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col text-left">
                                <p tyle="font-size: 15px;font-weight:500; ">Berikut susunan Data untuk import data buku
                                    tamu (.xls) :</p>
                                <img src="<?= base_url() ?>/assets/base/img/tutorial/excel_tamu.png" width="100%">
                                <p tyle="font-size: 15px;font-weight:500; "><strong>Penjelasan : </strong></p>
                                <p tyle="font-size: 15px;font-weight:500; ">1. Kolom A : Nama Tamu Undangan</p>
                                <p tyle="font-size: 15px;font-weight:500; ">2. Kolom B : Alamat Tamu Undangan</p>
                                <p tyle="font-size: 15px;font-weight:500; ">3. Kolom C : No Whatsapp Tamu Undangan untuk
                                    dikirim Undangan</p>
                                <p tyle="font-size: 15px;font-weight:500; ">4. Kolom D : Tanggal Undangan dikirim ke
                                    Tamu Undangan</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

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