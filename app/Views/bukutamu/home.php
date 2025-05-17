<!DOCTYPE html>
<html lang="id">

<head>
    <?php foreach ($mempelai->getResult() as $row) {
        $nama_panggilan_pria = $row->nama_panggilan_pria;
        $nama_lengkap_pria = $row->nama_pria;
        $nama_ayah_pria = $row->nama_ayah_pria;
        $nama_ibu_pria = $row->nama_ibu_pria;
        $nama_panggilan_wanita = $row->nama_panggilan_wanita;
        $nama_lengkap_wanita = $row->nama_wanita;
        $nama_ayah_wanita = $row->nama_ayah_wanita;
        $nama_ibu_wanita = $row->nama_ibu_wanita;
        $posisi_mempelai = $row->posisi_mempelai;
    }
    ?>
    <?php foreach ($data->getResult() as $row){
        $kunci = $row->kunci;
    }
    ?>
    <title>
        <?php if($posisi_mempelai == 0) echo $nama_panggilan_pria." & ".$nama_panggilan_wanita; else echo $nama_panggilan_wanita." & ".$nama_panggilan_pria;?>
    </title>
    <!-- META YANG DIBUTUHKAN -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta property="og:title"
        content="<?php if($posisi_mempelai == 0) echo $nama_panggilan_pria." & ".$nama_panggilan_wanita; else echo $nama_panggilan_wanita." & ".$nama_panggilan_pria;?>">
    <meta name="keywords" content="ngulemind,undangan,pernikahan,online,website,wedding,invitation,digital,video">
    <meta property="og:url" content="<?php echo base_url() ?>">
    <meta property="og:image" content="<?= base_url() ?>/assets/users/<?= $kunci; ?>/kita.png">
    <meta property="og:image:alt"
        content="<?php if($posisi_mempelai == 0) echo $nama_panggilan_pria." & ".$nama_panggilan_wanita; else echo $nama_panggilan_wanita." & ".$nama_panggilan_pria;?>">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <meta property="og:type" content="website" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="icon" href="<?= base_url() ?>/assets/users/<?= $kunci; ?>/kita.png">

    <!-- Framework CSS Modern - Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bukutamu/css/style.css">

    <!-- Skrip -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body style="background-image: url('<?= base_url() ?>/assets/users/<?= $kunci; ?>/bg-tamu.png');">
    <?php
    $satu_hari = mktime(0,0,0,date("n"),date("j"),date("Y"));
    function tglIndonesia($str){
        $tr = trim($str);
        $str = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
        return $str;
    }
    $tanggal_sekarang = date('Y/m/d');
    if(!empty($countdown->getResult())){
        foreach ($countdown->getResult() as $row){
            $tgl_acara = $row->tgl_acara;
            $clock = $row->tgl_acara.' '.$row->waktu_mulai;
            $tempat = $row->tempat_acara;
            $alamat = $row->alamat_acara;
        }
    } else {
        $tgl_acara = $acara[0]->tgl_acara;
        $clock = $acara[0]->tgl_acara.' '.$acara[0]->waktu_mulai;
        $tempat = $acara[0]->tempat_acara;
        $alamat = $acara[0]->alamat_acara;
    }
    ?>

    <div class="container py-5">
        <div class="row mb-5">
            <div class="col-md-8 mb-4">
                <div id="weddingCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <?php
                        foreach ($slider as $key => $data) {
                            $active = ($key == 0) ? 'active' : '';
                            echo '<button type="button" data-bs-target="#weddingCarousel" data-bs-slide-to="' . $key . '" class="' . $active . '" aria-label="Slide ' . ($key+1) . '"></button>';
                        }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <?php
                        foreach($slider as $key => $data) {
                            $active = ($key == 0) ? 'active' : '';
                            echo '<div class="carousel-item ' . $active . '">';
                            echo '<img src="' . base_url() . '/assets/users/' . $kunci . '/' . $data['nama_slider'] . '.png" class="d-block w-100" alt="Gambar Pernikahan">';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#weddingCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Sebelumnya</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#weddingCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Berikutnya</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="couple-card mb-4">
                    <h3 class="text-center mb-3"><span class="accent-text"><?php echo $nama_panggilan_pria; ?> &
                            <?php echo $nama_panggilan_wanita; ?></span></h3>
                    <p class="text-center mb-3 fw-bold" id="tanggal-acara-resepsi"></p>
                    <p class="text-center mb-2"><i
                            class="fas fa-map-marker-alt me-2 accent-text"></i><?php echo $tempat; ?></p>
                    <p class="text-center"><i class="fas fa-location-dot me-2 accent-text"></i><?php echo $alamat; ?>
                    </p>
                </div>
                <div class="date-card">
                    <h4 class="text-center mb-2" id="tanggal-sekarang-acara"><?php echo $tanggal_sekarang; ?></h4>
                    <h2 class="text-center" id="jam"></h2>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <h3 class="section-title">Sistem Kehadiran Tamu</h3>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-3">
                <div class="card h-100 text-center p-4">
                    <div class="feature-icon">
                        <i class="fas fa-qrcode"></i>
                    </div>
                    <h5 class="card-title mb-3">Scan QR Code</h5>
                    <a id="btn-scan-qr" class="d-block mb-3">
                        <img src="<?php echo base_url() ?>/assets/dashboard/img/qrscan.png" alt="Pemindai QR"
                            class="img-fluid" style="max-width: 120px;">
                    </a>
                    <canvas hidden="" id="qr-canvas"></canvas>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 text-center p-4">
                    <div class="feature-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h5 class="card-title mb-3">Ambil Foto</h5>
                    <div id="canvas-camera">
                        <a id="btn-capture" onClick="configure()">
                            <img src="<?php echo base_url() ?>/assets/bukutamu/img/photo-capture.png" alt="Kamera"
                                class="img-fluid" style="max-width: 120px;">
                        </a>
                        <div id="camera" hidden="" style="display:none;"></div>
                        <div id="webcam" hidden="" style="display:none;" class="mt-3">
                            <button type="button" class="btn btn-primary" id="btn-capture" onClick="preview()">
                                <i class="fas fa-camera me-2"></i>Ambil Foto
                            </button>
                        </div>
                        <div id="simpan" hidden="" style="display:none" class="mt-3">
                            <button type="button" class="btn btn-danger me-2" id="reset" onClick="batal()">
                                <i class="fas fa-trash me-1"></i>Hapus
                            </button>
                            <button type="button" class="btn btn-primary" name="save" id="save">
                                <i class="fas fa-save me-1"></i>Simpan
                            </button>
                            <input type="hidden" name="image" class="image-tag">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 p-4">
                    <div class="feature-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h5 class="card-title text-center mb-3">Identitas Tamu</h5>

                    <div class="mb-3" id="qr-result">
                        <label class="form-label">Kode QR</label>
                        <input id="outputData" type="text" class="form-control" onfocus="autofill(this.value)"
                            placeholder="Scan QR Code" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Tamu</label>
                        <input id="nama_tamu" type="text" class="form-control" placeholder="Contoh: Jack Dawson"
                            value="" disabled required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input id="alamat_tamu" type="text" class="form-control" placeholder="Alamat Tamu" value=""
                            disabled required>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 p-4">
                    <div class="feature-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h5 class="card-title text-center mb-3">Daftar Hadir</h5>

                    <div class="attendance-list">
                        <?php if(empty($hadir)) { ?>
                        <div class="text-center py-4">
                            <i class="fas fa-users text-muted mb-3" style="font-size: 32px;"></i>
                            <p class="mb-0">Belum ada tamu yang datang</p>
                        </div>
                        <?php } else { ?>
                        <div class="list-group">
                            <?php foreach($hadir as $row) { ?>
                            <div class="list-group-item guest-item p-3 mb-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="mb-1"><?= $row->nama_tamu ?></h6>
                                        <small class="text-muted"><?= $row->alamat_tamu ?></small>
                                    </div>
                                    <i class="fas fa-check-circle text-success"></i>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Error -->
    <div class="modal fade" id="modalGagal" tabindex="-1" aria-labelledby="modalGagalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalGagalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <i class="fas fa-exclamation-circle text-danger" style="font-size: 48px;"></i>
                    </div>
                    <p class="text-center">Maaf, tamu ini sudah melakukan check-in atau tidak dapat ditemukan.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Meneruskan variabel PHP ke JavaScript -->
    <script>
    var base_url = '<?php echo base_url() ?>';
    var tanggal_resepsi = '<?php echo $tgl_acara; ?>';
    var tanggal_sekarang = '<?php echo $tanggal_sekarang; ?>';

    // Meneruskan variabel session ke JavaScript
    var session_success = <?php echo json_encode(session()->get("success")); ?>;
    var session_deleted = <?php echo json_encode(session()->get("deleted")); ?>;
    var session_updated = <?php echo json_encode(session()->get("updated")); ?>;
    var session_error = <?php echo json_encode(session()->get("error")); ?>;
    </script>

    <!-- Memasukkan file JavaScript eksternal -->
    <script src="<?php echo base_url() ?>/assets/bukutamu/js/moment-with-locales.js"></script>
    <script src="<?php echo base_url() ?>/assets/bukutamu/js/script.js"></script>
</body>

</html>