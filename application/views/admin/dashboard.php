<div class="main-content">
<section class="section">
	<div class="section-header">
		<h1><?= $title; ?></h1>
	</div>

	<div class="section-body">
	<div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;Quick View</h3>
      </div>
      <div class="card-body">
		<div class="row mb-5">
			<div class="col-12">
			<h1 class="text-center mt-3"><?php $nama_situs = $this->db->get('site')->result(); echo $nama_situs[0]->title ?></h1>
			<h3 class="text-center">Selamat Datang, <?php echo $this->session->nama_lengkap; ?></h3>
				<?php echo $this->session->flashdata('message'); ?>
			</div>
		</div>
        <div class="row pt-5">
          <div class="col-lg-4 col-6">
				<div class="card card-statistic-1">
					<div class="card-icon bg-primary">
						<i class="far fa-user"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4>Pendaftar Baru</h4>
						</div>
						<div class="card-body">
							<?php
							$query = "SELECT count(*) as total FROM user WHERE status=0";
							$result = $this->db->query($query)->result();
							foreach ($result as $q) : ?>
								<h3 class="mb-0"><?php echo $q->total; ?></ class="mb-0">
							<?php endforeach; ?>
						</div>
						<p class="mb-2 text-right pr-3">
							<a href="<?php echo base_url('admin/newuser') ?>">selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
						</p>
					</div>
				</div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
			<div class="card card-statistic-1">
				<div class="card-icon bg-danger">
					<i class="fas fa-users"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Total Pengguna</h4>
					</div>
					<div class="card-body">
						<?php
							$query = "SELECT count(*) as total FROM user WHERE level='Peminjam'";
							$result = $this->db->query($query)->result();
							foreach ($result as $q) : ?>
							<h3><?php echo $q->total; ?></h3>
						<?php endforeach; ?>
					</div>
					<p class="mb-2 text-right pr-3">
						<a href="<?php echo base_url('admin/users') ?>">selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
					</p>
				</div>
			</div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
			<div class="card card-statistic-1">
				<div class="card-icon bg-warning">
					<i class="far fa-calendar"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header">
						<h4>Jadwal</h4>
					</div>
					<div class="card-body">
						<?php
						$query = "SELECT count(*) as total FROM jadwal INNER JOIN peminjaman WHERE jadwal.id_peminjaman=peminjaman.id_peminjaman";
						$result = $this->db->query($query)->result();
						foreach ($result as $q) : ?>
							<h3><?php echo $q->total; ?></h3>
						<?php endforeach; ?>
					</div>
					<p class="mb-2 text-right pr-3">
						<a href="<?php echo base_url('admin/jadwal') ?>">selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
					</p>
				</div>
			</div>
          <!-- ./col -->
        </div>
      </div>
    </div>
  </div>
	</div>
</section>
</div>
