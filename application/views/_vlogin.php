<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPOK-APP | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: url('<?php echo base_url()?>assets/img/bg.jpg')">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="card" style="margin-left:250px; opacity: 0.8; width: 450px;">
    <div class="card-body login-card-body" style="background: black;">
      <center>
      <img src="<?php echo base_url()?>assets/img/logo.png"> <br> <br>
      <h5 class="login-box-msg" style="color: white; font-family: monospace;"><b>Sistem Informasi Pengelolaan Kendaraan Dinas</b></h5>
       <?=$this->session->flashdata('notif') ?>
      </center>

      <form action="<?php echo base_url()?>Clogin1/cek_login" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-danger btn-block">Log In</button>
            <!-- <a class="btn btn-danger btn-block" href="<?php echo base_url()?>admin/Cadmin">Log In</a> -->
          </div>
          <!-- /.col -->
        </div>
      </form>

      <br>
      <center>
      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center">Register a new membership</a>
      </p>

      <br>
      <p style="font-size: 13px; color: white;">Copyright © 2020 AndrichardWS. All rights reserved.</p>

      </center>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
