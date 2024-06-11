<?php
$query = $this->db->query("SELECT * FROM user WHERE status=1 ORDER BY level")->result();
?>

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?= $title; ?></h1>
		</div>

		<div class="section-body">
			<div class="card card-primary">
				<div class="card-body">
					<?php echo $this->session->flashdata('message'); ?>
					<div class="row">
						<div class="col-12 text-left pb-3">
							<button href="#" class="btn btn-primary" data-toggle="modal" data-target="#mendaftar"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah User
						</div>
					</div>
					<div class="table-responsive">
						<table id="tabel" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th width="20">No.</th>
									<th>Nama Lengkap</th>
									<th>Username</th>
									<th>NIM</th>
									<th>Level</th>
									<th class="col-xs-2 text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($query as $u) : ?>
									<tr>
										<td class="text-center"><?php echo $no++; ?></td>
										<td><?php echo $u->nama_lengkap; ?></td>
										<td><?php echo $u->username; ?></td>
										<td><?php echo $u->nip; ?></td>
										<td><?php echo $u->level; ?></td>
										<td class="text-center">
											<?php if ($u->level == "Peminjam") : ?>
												<a href="<?php echo base_url('admin/deleteuser/' . $u->id_user) ?>" onclick="return confirm('Hapus?')" class="badge badge-danger">Hapus</a>
											<?php else : ?>
												<?php if ($u->id_user != $this->session->userdata('id_user')) : ?>
													<a href="<?php echo base_url('admin/deleteuser/' . $u->id_user) ?>" onclick="return confirm('Hapus?')" class="badge badge-danger">Hapus</a>
												<?php else : ?>
													<a href="<?php echo base_url('admin/myprofile/' . $this->session->userdata('id_user')) ?>" class="badge badge-primary">Profil Saya</a>
												<?php endif ?>
											<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
