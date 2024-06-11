<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?= $title; ?></h1>
		</div>

		<div class="section-body">
			<div class="container-fluid">
				<div class="card card-primary">
					<div class="card-body">
						<form action="<?php echo base_url('admin/updateRoom') ?>" method="POST" enctype="multipart/form-data">
							<?= $this->session->flashdata('message'); ?>
							<div class="row">
								<div class="col-md-6">
									<input type="hidden" name="id_ruangan" value="<?php echo $form->id_ruangan ?>">
									<div class="form-group">
										<label for="kode_ruangan">Kode Ruangan</label>
										<input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan" value="<?php echo $form->kode_ruangan ?>" placeholder="Masukkan kode ruangan">
									</div>
									<div class="form-group">
										<label for="nama_ruangan">Nama Ruangan</label>
										<input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value="<?php echo $form->nama_ruangan ?>" placeholder="Masukkan nama ruangan">
									</div>
									<div class="form-group">
										<label for="status_ruangan">Status Ruangan</label>
										<select class="form-control" id="status_ruangan" name="status_ruangan" value="<?php echo $form->status_ruangan ?>">
											<option value="Nganggur" <?php echo $form->status_ruangan == 'Nganggur' ? 'selected' : ''  ?> >Nganggur</option>
											<option value="Dipakai" <?php echo $form->status_ruangan == 'Dipakai' ? 'selected' : ''  ?> >Dipakai</option>	
										</select>
									</div>
								</div>
								<div class="col-md-6">
								<div class="form-group">
									<label>Pilih Gambar</label>
									<input type="file" id="imageinput" onchange="return filename()" name="image" class="form-control image">
									<img class="mt-3" src="<?php echo base_url("files/site/$form->image") ?>" width="200">
								</div>
								</div>
							</div>
							<div class="card-footer d-flex justify-content-end">
								<a href="<?php echo base_url('admin/room') ?>" class="btn btn-sm btn-light mr-2">
									<i class="fa fa-chevron-left mr-1"></i> Kembali
								</a>
								<button type="submit" class="btn btn-sm btn-primary">
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
