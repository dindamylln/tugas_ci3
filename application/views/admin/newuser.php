<?php
$query = "SELECT * FROM user WHERE status=0 ORDER BY level";
$datauser = $this->db->query($query)->result();
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
						<div class="table-responsive">
							<table id="tabel" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Lengkap</th>
										<th>Username</th>
										<th>NIM</th>
										<th>No. Telepon</th>
										<th class="col-xs-2">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($datauser as $u) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $u->nama_lengkap; ?></td>
											<td><?php echo $u->username; ?></td>
											<td><?php echo $u->nip; ?></td>
											<td><?php echo ($u->no_telp) ? $u->no_telp : '-'; ?></td>
											<td>
												<a href="<?php echo base_url('admin/accuser/' . $u->id_user) ?>" onclick="return confirm('Terima user?')" class="badge badge-primary">Terima User</a>
												<a href="<?php echo base_url('admin/disaccuser/' . $u->id_user) ?>" onclick="return confirm('Tolak user?')" class="badge badge-danger">Tolak User</a>
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
