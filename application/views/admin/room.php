<?php
$dataruangan = $this->db->query("SELECT * FROM ruangan ORDER BY id_ruangan")->result();
?>

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?= $title; ?></h1>
		</div>

		<div class="section-body">
			<div class="container-fluid">
				<div class="card card-primary">
					<div class="card-body">
						<?php echo $this->session->flashdata('message'); ?>
						<a href="<?php echo base_url('admin/addRoom') ?>" class="btn btn-primary mb-3">Tambah Ruangan</a>
						<div class="table-responsive">
							<table id="tabel" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th width="50">No.</th>
										<th class="text-center">Kode</th>
										<th>Nama</th>
										<th class="text-center">Status</th>
										<th width="200" class="text-center">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($dataruangan as $value) : ?>
										<tr>
											<td class="align-middle text-center"><?php echo $no++; ?></td>
											<td class="align-middle text-center"><?php echo $value->kode_ruangan; ?></td>
											<td class="align-middle text-left"><?php echo $value->nama_ruangan; ?></td>
											<td class="align-middle text-center"><?php echo $value->status_ruangan; ?></td>
											<td class="align-middle text-center">
												<a href="<?php echo base_url('admin/editRoom/'. $value->id_ruangan) ?>" class="btn btn-primary">Ubah</a>
												<a href="<?php echo base_url('admin/deleteRoom/' . $value->id_ruangan) ?>" onclick="return confirm('Apakah kamu yakin ingin menghapus ruangan?')" class="btn btn-danger">Hapus</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
