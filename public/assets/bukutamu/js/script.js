
(function($) {
    /*=================
     FORMAT TANGGAL
    ======================= */
    moment.locale('id'); //set indonesian format

    //output = Senin, 17 Agustus 2020
    var date_resepsi = moment(tanggal_resepsi).format('dddd, Do MMMM YYYY'); 
    var date_sekarang = moment(tanggal_sekarang).format('dddd, Do MMMM YYYY'); 
    $('#tanggal-acara-resepsi').html(date_resepsi);
    $('#tanggal-sekarang-acara').html(date_sekarang);
})(window.jQuery);



// Main script handling QR scanning, webcam, and other functionality
$(document).ready(function() {
    // Save button handler
    $('#save').on('click', function(event) {
        event.preventDefault();
        var image = $('.image-tag').val();
        var qrcode2 = $('#outputData').val();
        var nama = $('#nama_tamu').val();
        $.ajax({
            url: base_url + '/add_hadir',
            method: "POST",
            data: {
                qrcode: qrcode2,
                image: image,
                nama: nama
            },
            async: true,
            dataType: 'html',
            success: function($hasil) {
                if ($hasil == 'sukses') {
                    location.reload();
                } else {
                    $('#modalHadir').modal('hide');
                    $('#modalGagal').modal('show');
                }
                console.log($hasil);
            }
        });
    });

    // QR code scanning functionality
    const qrcode = window.qrcode;
    const video = document.createElement("video");
    const canvasElement = document.getElementById("qr-canvas");
    const canvas = canvasElement.getContext("2d");
    const qrResult = document.getElementById("qr-result");
    const outputData = document.getElementById("outputData");
    const btnScanQR = document.getElementById("btn-scan-qr");
    let scanning = false;

    qrcode.callback = res => {
        if (res) {
            $("#outputData").val(res);
            scanning = false;

            video.srcObject.getTracks().forEach(track => {
                track.stop();
            });

            qrResult.hidden = false;
            canvasElement.hidden = true;
            btnScanQR.hidden = false;
            document.getElementById('outputData').focus();
            Webcam.set({
                width: 187,
                height: 140,
                dest_width: 187, // device capture size
                dest_height: 140,
                crop_width: 187, // final cropped size
                crop_height: 140,
                image_format: 'jpg',
                jpeg_quality: 100
            });
            Webcam.attach('#camera');
            document.getElementById('btn-capture').hidden = true;
            document.getElementById('webcam').style.display = '';
            document.getElementById('webcam').hidden = false;
            document.getElementById('camera').style.display = '';
            document.getElementById('camera').hidden = false;
        }
    };

    btnScanQR.onclick = () => {
        navigator.mediaDevices
            .getUserMedia({
                video: {
                    facingMode: "environment"
                }
            })
            .then(function(stream) {
                scanning = true;
                qrResult.hidden = false;
                btnScanQR.hidden = true;
                canvasElement.hidden = false;
                Webcam.unfreeze();
                document.getElementById('simpan').style.display = 'none';
                document.getElementById('btn-capture').hidden = false;
                document.getElementById('camera').style.display = 'none';
                document.getElementById('webcam').hidden = true;
                document.getElementById('camera').hidden = true;

                video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
                video.srcObject = stream;
                video.play();
                tick();
                scan();
            });
    };

    function tick() {
        canvasElement.height = video.videoHeight;
        canvasElement.width = video.videoWidth;
        canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

        scanning && requestAnimationFrame(tick);
    }

    function scan() {
        try {
            qrcode.decode();
        } catch (e) {
            setTimeout(scan, 300);
        }
    }
});

// Webcam preview functions
function preview() {
    const x = document.getElementById('camera');
    // untuk preview gambar sebelum di upload
    Webcam.snap(function(data_uri) {
        $(".image-tag").val(data_uri);
        Webcam.freeze();
        // ganti display webcam menjadi none dan simpan menjadi terlihat
        document.getElementById('webcam').hidden = true;
        document.getElementById('simpan').hidden = false;
        //document.getElementById('webcam').style.display = 'none';
        document.getElementById('simpan').style.display = '';
        x.getElementsByTagName("video")[0].hidden = true;
    });
}

function batal() {
    // batal preview
    Webcam.unfreeze();
    const x = document.getElementById('camera');
    // ganti display webcam dan simpan seperti semula
    document.getElementById('webcam').hidden = false;
    document.getElementById('simpan').hidden = true;
    document.getElementById('webcam').style.display = '';
    x.getElementsByTagName("video")[0].hidden = false;
    //document.getElementById('simpan').style.display = 'none';
}

// Autofill function
function autofill() {
    var qrcode = $("#outputData").val();
    $.ajax({
        url: base_url + '/bukutamu/autofill',
        data: '&qrcode=' + qrcode,
        success: function(data) {
            var hasil = JSON.parse(data);
            $.each(hasil, function(key, val) {
                document.getElementById('nama_tamu').value = val.nama_tamu;
                document.getElementById('alamat_tamu').value = val.alamat_tamu;
            });
        }
    });
}

// Clock function
window.onload = function() {
    jam();
}

function jam() {
    var e = document.getElementById('jam'),
        d = new Date(),
        h, m, s;
    h = d.getHours();
    m = set(d.getMinutes());
    s = set(d.getSeconds());

    e.innerHTML = h + ':' + m + ':' + s;

    setTimeout('jam()', 1000);
}

function set(e) {
    e = e < 10 ? '0' + e : e;
    return e;
}

// SweetAlert notifications
$(function() {
    if (session_success) {
        Swal.fire({
            icon: 'success',
            title: 'Great!',
            text: session_success
        });
    }
    
    if (session_deleted) {
        Swal.fire({
            icon: 'warning',
            title: 'Great!',
            text: session_deleted
        });
    }
    
    if (session_updated) {
        Swal.fire({
            icon: 'success',
            title: 'Great!',
            text: session_updated
        });
    }
    
    if (session_error) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: session_error
        });
    }
});