<!-- Login Content -->
<div class="login-container">
  <!-- Left Side -->
  <div class="login-left">
    <a href="<?= SITE_UTAMA ?>" class="logo"><img src="/assets/base/beranda/img/logo.png" alt="Rayakan Digital" height="40"></a></a>
    <h2>MASUK</h2>
    <p>Selamat Datang Kembali, Silahkan Masukkan Email dan Kata Sandi</p>

    <?php 
    $session = session();
    $errors = $session->getFlashdata('errors');
    if ($errors != null): ?>
      <div class="alert-danger" id="ikierror">
        <strong>Error!</strong>
        <?php foreach ($errors as $err) echo $err; ?>
      </div>
    <?php endif; ?>

    <form method="post" action="<?= base_url('do_auth'); ?>">
      <input type="email" placeholder="Masukkan email" name="email" required>
      <input type="password" placeholder="Masukkan password" name="password" id="password" required>

      <button type="submit" class="btn primary">Masuk</button>
    </form>
  </div>

  <!-- Right Side -->
  <div class="login-right">
    <div class="illustration">
    </div>
  </div>
</div>
<!-- Login Content -->