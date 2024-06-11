<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title><?php echo $title; ?> | <?php $sitetitle = $this->db->get('site')->result(); echo $sitetitle[0]->title ?></title>
	<?php $icon = $this->db->get('site')->result(); ?>
	<link rel="icon" href="<?php echo base_url('files/site/'.$icon[0]->icon) ?>">

	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/toastr/toastr.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/components.css">
</head>

<body class="<?php if($this->session->userdata('level')=="Peminjam") { echo "layout-top-nav"; }elseif(current_url()==base_url('publik')){ echo 'layout-top-nav'; }else{ echo "sidebar-mini layout-fixed"; } ?>">
  <div id="app">
    <div class="main-wrapper">
		<?php if($this->session->userdata('level')=="Admin"){ ?>
            <?php $this->load->view('templates/navbar'); ?>
            <?php $this->load->view('templates/sidebar'); ?>
        <?php } ?>
        <?php $this->load->view('ekstra/modal'); ?>

		<!-- Main Content -->
		<!-- <div class="main-content">
			<section class="section">
			<div class="section-header">
				<h1>Blank Page</h1>
			</div>

			<div class="section-body">
			</div>
			</section>
		</div> -->
		
