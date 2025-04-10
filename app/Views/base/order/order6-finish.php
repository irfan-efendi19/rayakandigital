<div class="konten"
    style="display: flex; flex-grow: 1; overflow-x: hidden; flex-direction: row; margin-top: 60px; margin-bottom: 40px; height: calc(100vh - 100px);">
    <script type="text/javascript">
    window.setTimeout(function() {
        window.location.href = '<?= base_url('order/save') ?>';
    }, 3000);
    </script>

    <section class="fdb-block"
        style="padding-top: 20px; flex: 1; display: flex; align-items: center; justify-content: center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                    <div class="progress" style="margin-top: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                            aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>

                    <div id="konten-cerita" class="text-center">
                        <div class="d-flex flex-column align-items-center justify-content-center"
                            style="min-height: 300px;">
                            <img id="loading" src="<?= base_url() ?>/assets/base/img/loading.svg"
                                style="width: 120px;" />
                            <h3 class="mt-3" style="color: #2c3e50;">
                                Memproses data...
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

.konten {
    min-height: 100vh;
}
</style>