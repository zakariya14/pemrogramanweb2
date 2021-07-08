<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pertemuan11 Pemrograman Web2</title>
  <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/sign.css'); ?>">
</head>

<body class="text-center" action="<?php echo base_url('login/log_in'); ?>" method="post">
  <form action="" class="form-signin">
    <img src="<?php echo base_url('assets/img/shop.svg'); ?>" class="mb-4" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Please Sign in</h1>
    <label for="inputUsername" class="sr-only">Username</label>
    <input type="text" id="inputUsername" name="user" class="form-control" placeholder="Username" required>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="pass" class="form-control mb-3" placeholder="Password" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
    <?php
    if ($this->session->flashdata('kesalahan_login')) {

    ?>
      <div class="alert alert-danger mt-3">
        <?php echo $this->session->flashdata('kesalahan_login'); ?>
      </div>
    <?php } ?>
    <p class="mt-5 mb-3 text-muted"> &copy; 2020 - 2021</p>
  </form>

</body>

</html>