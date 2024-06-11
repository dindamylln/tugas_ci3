<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?= $title; ?></h1>
		</div>

		<div class="section-body">
			<div class="container-fluid">
				<div class="card card-primary">
					<div class="card-body">
						<form action="<?php echo base_url('admin/storeRoom') ?>" method="POST" enctype="multipart/form-data">
							<?= $this->session->flashdata('message'); ?>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="kode_ruangan">Kode Ruangan</label>
										<input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan" placeholder="Masukkan kode ruangan">
									</div>
									<div class="form-group">
										<label for="nama_ruangan">Nama Ruangan</label>
										<input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" placeholder="Masukkan nama ruangan">
									</div>
									<div class="form-group">
										<label for="status_ruangan">Status Ruangan</label>
										<select class="form-control" id="status_ruangan" name="status_ruangan">
											<option>Nganggur</option>
											<option>Dipakai</option>	
										</select>
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<label>Pilih Gambar</label>
									<input type="file" id="imageinput" onchange="return filename()" name="image" class="form-control image">
									<img src="<?php echo base_url('files/site/default.png') ?>" width="200">
								</div>
								</div>
							</div>
							<div class="card-footer d-flex justify-content-end">
								<a href="<?php echo base_url('admin/room') ?>" class="btn btn-sm btn-light mr-2">
									<i class="fa fa-chevron-left mr-1"></i> Kembali
								</a>
								<button class="btn btn-sm btn-primary">
									<i class="fa fa-save mr-1"></i> Simpan
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
