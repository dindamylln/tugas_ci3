<?php
$peminjaman = $this->db->query("SELECT * FROM peminjaman INNER JOIN user, ruangan WHERE peminjaman.id_user=user.id_user AND peminjaman.id_ruangan=ruangan.id_ruangan AND peminjaman.status_peminjaman='0' ORDER BY tanggal ASC")->result();
?>

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?= $title; ?></h1>
		</div>

		<div class="section-body">
			<div class="card card-primary">
				<div class="card-body">
					<?php echo $this->session->flashdata('message') ?>
					<div class="table-responsive">
						<table id="tabel" class="table table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>User</th>
									<th>Ruangan</th>
									<th>Jam Mulai</th>
									<th>Jam Berakhir</th>
									<th>Tanggal</th>
									<th>Keterangan Peminjaman</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; ?>
								<?php foreach ($peminjaman as $q) : ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $q->username; ?></td>
										<td><?php echo $q->nama_ruangan; ?></td>
										<td><?php echo substr($q->jam_mulai, 0, 5); ?></td>
										<td><?php echo substr($q->jam_berakhir, 0, 5); ?></td>
										<td><?php $date = date_create($q->tanggal);
										echo date_format($date, 'd/m /Y'); ?></td>
										<td><?php echo $q->keterangan; ?></td>
										<td>
											<a href="<?php echo base_url('admin/accrequest/' . $q->id_peminjaman) ?>" onclick="return confirm('Terima Request?')" class="badge badge-primary">Terima Request</a>
											<a href="<?php echo base_url('admin/disaccrequest/' . $q->id_peminjaman) ?>" onclick="return confirm('Tolak Request?')" class="badge badge-danger">Tolak Request</a>
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
