<?php
$jadwal = $this->db->query("SELECT * FROM jadwal INNER JOIN peminjaman on jadwal.id_peminjaman=peminjaman.id_peminjaman INNER JOIN user on peminjaman.id_user=user.id_user INNER JOIN ruangan on peminjaman.id_ruangan = ruangan.id_ruangan AND status_jadwal!=3")->result();

function aturjadwal($nowtime, $dbstart, $dbend, $id_jadwal)
{
    if ($nowtime >= $dbstart and $nowtime <= $dbend) {
        redirect('admin/hapusjadwal/1/' . $id_jadwal, 'refresh');
    }
}
?>

<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?= $title; ?></h1>
		</div>

		<div class="section-body">
			<div class="card card-header">
				<div class="card-body">
					<?php echo $this->session->flashdata('message'); ?>
					<div class="table-responsive">
						<table id="tabel" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>User</th>
									<th>Ruangan</th>
									<th>Jam Mulai</th>
									<th>Jam Berakhir</th>
									<th>Tanggal</th>
									<th>Keterangan Peminjaman</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody id="tbodyjadwal">
								<?php $no = 1; ?>
								<?php foreach ($jadwal as $q) : ?>
									<?php
									// atur jadwal
									$nowtime = strtotime(date('H:i:s')) + strtotime(date('Y-m-d'));
									$dbstart = strtotime($q->jam_mulai) + strtotime($q->tanggal);
									$dbend = strtotime($q->jam_berakhir) + strtotime($q->tanggal);
									$id_jadwal = $q->id_jadwal;
									?>
									<?php if ($dbend < $nowtime) {
										$this->db->update('ruangan', ['status_ruangan' => 'Nganggur'], ['id_ruangan' => $q->id_ruangan]);
										$this->db->update('jadwal', ['status_jadwal' => 3], ['id_jadwal' => $id_jadwal]);
									} elseif ($nowtime >= $dbstart and $nowtime <= $dbend) {
										$this->db->update('ruangan', ['status_ruangan' => 'Dipakai'], ['id_ruangan' => $q->id_ruangan]);
										$this->db->update('jadwal', ['status_jadwal' => 1], ['id_jadwal' => $id_jadwal]); ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $q->username; ?></td>
											<td><?php echo $q->nama_ruangan; ?></td>
											<td><?php echo substr($q->jam_mulai, 0, 5); ?></td>
											<td><?php echo substr($q->jam_berakhir, 0, 5); ?></td>
											<td><?php $date = date_create($q->tanggal);
												echo date_format($date, 'd/m/Y'); ?></td>
											<td><?php echo $q->keterangan; ?></td>
											<td>
												<?php
												switch ($q->status_jadwal) {
													case 1:
														echo "<span class='text-success text-bold'>Sedang berlangsung...</span>";
														break;
													case 2:
														echo "<span class='text-primary text-bold'>Akan datang...</span>";
														break;
													case 3:
														echo "<span class='text-danger text-bold'>Sudah lewat, harap hapus jadwal ini..</span>";
													default:
														# code...
														break;
												}
												?>
											</td>
											<td>
												<a href="<?php echo base_url('admin/hapusjadwal/0/' . $q->id_jadwal) ?>" onclick="return confirm('Hapus jadwal?')" class="badge badge-danger" title="Batalkan jadwal">Hapus Jadwal</a>
											</td>
										</tr>
									<?php } else { ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $q->username; ?></td>
											<td><?php echo $q->nama_ruangan; ?></td>
											<td><?php echo substr($q->jam_mulai, 0, 5); ?></td>
											<td><?php echo substr($q->jam_berakhir, 0, 5); ?></td>
											<td><?php $date = date_create($q->tanggal);
												echo date_format($date, 'd/m/Y'); ?></td>
											<td><?php echo $q->keterangan; ?></td>
											<td>
												<?php
												switch ($q->status_jadwal) {
													case 1:
														echo "<span class='text-success text-bold'>Sedang berlangsung...</span>";
														break;
													case 2:
														echo "<span class='text-primary text-bold'>Akan datang...</span>";
														break;
													case 3:
														echo "<span class='text-danger text-bold'>Sudah lewat, harap hapus jadwal ini..</span>";
													default:
														# code...
														break;
												}
												?>
											</td>
											<td>
												<a href="<?php echo base_url('admin/hapusjadwal/0/' . $q->id_jadwal) ?>" onclick="return confirm('Hapus jadwal?')" class="badge badge-danger" title="Batalkan jadwal">Hapus Jadwal</a>
											</td>
										</tr>
								<?php };
								endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
