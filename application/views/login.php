<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Aplikasi Peminjaman Lab Komputer| <?php echo $title; ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/toastr/toastr.min.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/adminlte.min.css"> -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/components.css">
</head>

<body>
	<?php $this->load->view('ekstra/modal') ?>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
							<div class="shadow-light rounded-circle mx-auto d-flex justify-content-center align-items-center" style="width: 120px; height:120px">
								<img src="<?php echo base_url('assets/') ?>img/logo-unmer.png" alt="logo" width="100">
							</div>
            </div>

            <div class="card card-primary">
              <div class="card-header justify-content-center">
								<h4>Aplikasi Peminjaman Lab Komputer</h4>
							</div>

              <div class="card-body">
								<?php $site = $this->db->get('site')->result(); ?>
                <form action="<?php echo base_url('auth') ?>" method="post" autocomplete="off">
									<?php echo $this->session->flashdata('message'); ?>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="username" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
										<small class="text-danger"><?php echo form_error('username'); ?></small>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <button type="submit" name="masuk" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
										<div class="mt-2 ml-1 text-muted">
											<!-- Menemukan kesulitan? <a href="<?php echo base_url('publik') ?>">Pusat Bantuan</a> -->
										</div>

                  </div>
                </form>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Belum punya akun? <a href="#" data-toggle="modal" data-target="#mendaftar" >Register</a>
            </div>
            <div class="simple-footer">
              Copyright &copy; FTI Unmer 2023
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

	<!-- Bawaaan -->
	<script src="<?= base_url('assets/') ?>plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="<?= base_url('assets/') ?>plugins/toastr/toastr.min.js"></script>
  <script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
  <script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
  <script src="<?= base_url('assets/') ?>dist/js/user.js"></script></script>
	
  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/') ?>js/stisla.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/scripts.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/custom.js"></script>

</body>
</html>
