<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title> <?php if($title != 'Beranda') { echo $title.' -'; } ?> <?= SITE_NAME ?> | Modern, Praktis, dan Penuh Makna
    </title>
    <meta name="theme-color" content="#7ed9fc">
    <meta name="msapplication-navbutton-color" content="#7ed9fc">
    <meta name="apple-mobile-web-app-status-bar-style" content="#7ed9fc">
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="<?= SITE_NAME ?> adalah layanan undangan online. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. Selain itu kami juga menerima jasa pembuatan undangan cetak maupun Video.">
    <meta name="keywords"
        content="undangan digital,undangan online,undangan pernikahan,undangan murah, undangan praktis,undangan nikah,undangan website,creative digital,digital marketing lampung, undangan cetak, udangan kartu,undangan lampung murah,undangan online lampung">
    <meta name="author" content="Rayakan Digital | Modern, Praktis, dan Penuh Makna">
    <meta http-equiv="Copyright" content="Rayakan Digital | Modern, Praktis, dan Penuh Makna">
    <meta name="copyright" content="Rayakan Digital | Modern, Praktis, dan Penuh Makna">
    <meta property="og:type" content="article" />
    <meta property="profile:first_name" content="Rayakan Digital | Modern, Praktis, dan Penuh Makna" />
    <meta property="profile:last_name" content="Rayakan Digital | Modern, Praktis, dan Penuh Makna" />
    <meta property="profile:username" content="Rayakan Digital | Modern, Praktis, dan Penuh Makna" />
    <!-- facebook -->
    <meta property="og:title" content="Rayakan Digital | Modern, Praktis, dan Penuh Makna" />
    <meta property="og:type" content="blog">
    <meta property="og:description"
        content="<?= SITE_NAME ?> adalah layanan Rayakan Digital. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. Selain itu kami juga menerima jasa pembuatan undangan cetak maupun Video." />
    <meta property="og:image" content="<?php echo base_url() ?>/assets/base/img/favicon.ico" />
    <meta property="og:url" content="<?php echo base_url() ?>" />
    <meta property="og:site_name" content="Rayakan Digital | Modern, Praktis, dan Penuh Makna" />
    <!-- google -->
    <meta itemprop="name" content="Rayakan Digital | Modern, Praktis, dan Penuh Makna" />
    <meta itemprop="description"
        content="<?= SITE_NAME ?> adalah layanan Rayakan Digital. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. Selain itu kami juga menerima jasa pembuatan undangan cetak maupun Video." />


    <!-- </head> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/beranda/themes/assets/css/sw-main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/beranda/themes/assets/css/sw-responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap&family=Poppins:ital,wght@0,400;0,600;1,600&display=swap"
        rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body oncontextmenu="return false">
    <header class="header">
        <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 fixed-top"
            style="display: none;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="/assets/base/beranda/img/logo.png" alt="Rayakan Digital" height="40"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav me-3">
                        <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing">Harga</a></li>
                        <li class="nav-item"><a class="nav-link" href="#themes">Template</a></li>
                        <li class="nav-item"><a class="nav-link" href="#cara-order">Cara Order</a></li>
                        <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#testi">Ulasan</a></li>
                    </ul>
                    <a href="<?= base_url('login') ?>" class="btn sign btn-light me-2">Masuk</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
        </div>
        </nav>
    </header>
    <?php 
            echo view($view);
            ?>
    <!-- FOOTER -->
    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 mt-5 px-4 px-lg-5 wow fadeIn end"
        data-wow-delay="0.1s">
        <div class="row g-5 py-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="index.html" class="navbar-brand">
                    <h1 data-aos="fade-up" class="display-5">Rayakan Digital</h1>
                </a>
                <p>
                    Rayakan Digital adalah layanan undangan digital modern yang memudahkan Anda membagikan momen spesial
                    secara praktis dan elegan. Dilengkapi fitur canggih seperti QR Code RSVP, buku tamu digital, peta
                    lokasi, galeri foto, hitung mundur acara, hingga integrasi live streaming, setiap undangan kami
                    dirancang untuk menyampaikan kabar bahagia dengan cara yang menarik dan efisien. Rayakan momen
                    spesialmu, cukup satu tautan dari Rayakan Digital.
                </p>
                <p>
                    <!-- <i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA -->
                </p>
                <p><i class="fa fa-phone-alt me-2"></i>+62 895-3498-23366</p>
                <p><i class="fa fa-envelope me-2"></i>rayakandigital@gmail.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank"
                        href="https://x.com/rayakan_digital"><i class="fab fa-x-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank"
                        href="https://www.facebook.com/rayakan.digital/"><i class="fab fa-facebook"></i></a>
                    <a class="btn btn-square btn-outline-light rounded-circle me-2" target="_blank"
                        href="https://www.instagram.com/rayakan_digital/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Layanan</h4>
                        <a class="btn btn-link">Undangan Digital</a>
                        <a class="btn btn-link">Buku Tamu</a>
                        <a class="btn btn-link">QR Code</a>
                        <a class="btn btn-link">LIVE Streaming</a>
                        <a class="btn btn-link">Wedding Content Creator</a>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="text-light mb-4">Tutorial</h4>
                        <a class="btn btn-link" href="maps">Menambahkan Maps</a>
                        <a class="btn btn-link" href="youtube" >Menambahkan Video Youtube</a>
                        <a class="btn btn-link" href="import_tamu" >Import Tamu Menggunakan Excel</a>
                    </div>
                    <div class="col-sm-12">
                        <h4 class="text-light mb-4">Metode Pembayaran</h4>
                        <div class="w-100">
                            <div class="row g-3 align-items-center">
                                <div class="col-4 col-md-2">
                                    <img src="/assets/base/img/bank.png" alt="BRI" class="img-fluid bank-logo">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <div class="copyright container-fluid bg-dark text-white border-top border-secondary px-0">
        <div class="container py-3 px-3 text-center text-md-start">
            <div class="row text-center">
                <p>Copyright &#169;
                    <?= date('Y') ?>
                    <?= SITE_NAME ?>. All Rights Reserved
                </p>
            </div>
        </div>
    </div>
    </footer>
    <!-- End footer -->
    <!-- LIVE CHAT -->
    <div id="show_chat_to_top">
        <a href="https://api.whatsapp.com/send?phone=<?= $setting[0]->no_wa; ?>&text=<?= $setting[0]->pesan_wa; ?>"
            target="_blank" class="btn-whatsapp">
            <i class="fa-brands fa-whatsapp"></i> WhatsApp
        </a>
        <a href="#" id="back-to-top" title="Back to top"><i class="fa-solid fa-chevron-up"></i></a>
    </div>
    <!-- SCRIPT -->
    <script src="<?php echo base_url() ?>/assets/beranda/themes/assets/js/sw-plugins.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/beranda/themes/assets/js/sw-main.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/2.0.0/scrollReveal.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>

    <script>
    $(document).ready(function() {
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    });
    </script>


    <script type="text/javascript">
    $('.sw-counter').each(function() {
        var $this = $(this),
            countTo = $this.attr('data-count');
        $({
            countNum: $this.text()
        }).animate({
            countNum: countTo
        }, {
            duration: 1000,
            easing: 'linear',
            step: function() {
                $this.text(Math.floor(this.countNum));
            },
            complete: function() {
                $this.text(this.countNum);
                //alert('finished');
            }
        });
    });
    $(document).ready(function() {
        $('.btn-demo').on('click', function() {
            // get data from button edit
            const link_video = $(this).data('link');
            const nama_tema = $(this).data('nama');
            // Set data to Form Edit
            $('.demo-video').html(link_video);
            $('.nama_tema').html(nama_tema)
            // Call Modal Edit
            $('#sw-demo').modal('show');
        });
        $('#sw-demo').on('hide.bs.modal', function() {
            $('.demo-video').html('');
        });
    });
    </script>
    <!-- Facebook Pixel Code -->
</body>

</html>