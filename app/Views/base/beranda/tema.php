<section class="highlight-section py-5">
    <div class="container">
        <div data-aos="fade-down" class="row align-items-center">
            <!-- Kolom kiri -->
            <div class="mb-4 mb-md-0">
                <h2 class="section-title">Temukan Inspirasi Baru</h2>
                <p class="section-description">Jelajahi berbagai koleksi desain yang menarik dan personal. Sesuaikan
                    dengan gaya unik Anda.</p>
            </div>
        </div>
    </div>
</section>

<!-- PRODUCT -->
<section class="sw-container">
    </div>
    <div data-aos="fade-down" data-aos-delay="300" class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="isotop-nav text-center">
                    <ul>
                        <li class="btn sw-button <?php if($link =='all'){ echo 'active'; } ?>"><a
                                href="<?= site_url('tema') ?>">All</a></li>
                        <?php foreach($categories as $category) : ?>
                        <li class="btn sw-button <?php if($link == $category['slug']) echo 'active'; ?>"><a
                                href="<?= site_url('tema?category='.$category['slug']) ?>"><?= $category['name'] ?></a>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
            <div class="postList row">
                <!-- Add row class here -->
                <?php foreach ($tema as $row) { ?>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <article class="sw-theme">
                        <figure>
                            <ul class="attribute-list">
                                <li><span class="label-coral"><?= $row->categoryName ?></span></li>
                            </ul>
                            <img src="<?php echo base_url() ?>/assets/themes/<?= $row->nama_theme ?>/preview.png"
                                alt="<?= htmlentities($row->nama_theme) ?>" class="img-responsive" />
                        </figure>
                        <div class="desc">
                            <h3><?= htmlentities($row->nama_theme) ?></h3>
                            <div class="readmore text-center">
                                <a href="<?= base_url('demo/' . $row->nama_theme) ?>" target="_blank"
                                    class="btn sw-button btn-preview">Demo</a>
                                <a href="<?= base_url('order/' . $row->kode_theme) ?>"
                                    class="btn sw-button btn-shop">Buat Undangan</a>
                            </div>
                        </div>
                    </article>
                </div>
                <?php } ?>
            </div>
            <div class="text-center">
                <?= $pager->links('tema', 'bootstrap_pagination') ?>
            </div>
        </div>
</section>