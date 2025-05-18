<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

  <div class="card p-4 shadow" style="width: 380px;">
    <h3 class="text-center mb-3">UTS WEBPRO2</h3>
    <p class="text-center mb-4">Masuk untuk mengelola data anda</p>

    <?php if ($this->session->flashdata('error')): ?>
      <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
    <?php endif; ?>

    <form action="<?= site_url('auth/login') ?>" method="post">
      <div class="mb-3 input-group">
        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
        <input type="email" name="email" class="form-control" placeholder="Email" required />
      </div>
      <div class="mb-3 input-group">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
        <input type="password" name="password" class="form-control" placeholder="Password" required />
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember" />
        <label class="form-check-label" for="remember">Ingat Saya</label>
      </div>
      <button type="submit" class="btn btn-primary w-100">Masuk</button>
    </form>
    <div class="text-center">
      <a href="#">Lupa Password?</a><br/>
      <a href="<?= site_url('auth/register') ?>">Daftar Di Sini</a>
    </div>
  </div>

</body>
</html>
