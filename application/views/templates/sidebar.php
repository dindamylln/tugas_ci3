<?php
function currenturl($url, $echo)
{
  if (current_url() == base_url('admin/' . $url)) {
    echo $echo;
  }
}
?>

<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			<a href="<?php echo base_url() ?>">			
				<img src="<?php echo base_url('assets/') ?>img/logo-unmer.png" alt="Logo" style="opacity: .8; width: 40px"></i> Peminjaman Lab	
			</a>
		</div>

		<div class="sidebar-brand sidebar-brand-sm">
			<a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/') ?>img/logo-unmer.png"alt="Logo" style="opacity: 1; width: 40px"></i></a>
		</div>
			<ul class="sidebar-menu">
				<!-- <li class="<?php currenturl('Admin', 'active');?>">
					<a class="nav-link" href="<?php echo base_url('assets/') ?>">
						<i class="fas fa-fire"></i> <span>Beranda</span>
					</a>
				</li> -->

				<!-- <li class="menu-header">Aplikasi</li> -->
				<!-- <li class="nav-item dropdown">
					<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> 
						<?php $query = "SELECT count(*) as total FROM user WHERE status=0"; $row = $this->db->query($query)->result(); ?>
						<span>Autentikasi</span>
						<?php if ($row[0]->total == 0) { } else { ?>
							<span class="badge badge-primary">
								<?php echo $row[0]->total; ?>
							</span>
						<?php } ?>
					</a>

					<ul class="dropdown-menu">
						<li>	
							<a class="nav-link <?php currenturl('newuser', 'active'); currenturl('newuser', 'active'); ?>" href="<?php echo base_url('admin/newuser') ?>">
								Pengguna Baru
								<?php if ($row[0]->total > 0) { ?>
									<span class="badge badge-primary">
										<?php echo $row[0]->total; ?>
									</span>
								<?php } ?>
							</a>
						</li>
						<li>
							<a class="nav-link <?php currenturl('users', 'active'); currenturl('users', 'active'); ?>" href="<?php echo base_url('admin/users') ?>">
								Kelola Pengguna
							</a>
						</li>
					</ul>
				</li> -->
				

				<!-- Loans -->
				<!-- <li class="nav-item dropdown">
					<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-bookmark"></i> 
						<?php $query2 = "SELECT count(*) as total FROM peminjaman WHERE status_peminjaman=0"; $row2 = $this->db->query($query2)->result(); ?>
						<span>Peminjaman</span>
						<?php if ($row2[0]->total == 0) { } else { ?>
							<span class="badge badge-primary">
								<?php echo $row2[0]->total; ?>
							</span>
						<?php } ?>
					</a>

					<ul class="dropdown-menu">
						<li>	
							<a class="nav-link <?php currenturl('request', 'active'); currenturl('request', 'active'); ?>" href="<?php echo base_url('admin/request') ?>">
								Peminjaman
								<?php if ($row2[0]->total > 0) { ?>
									<span class="badge badge-primary">
										<?php echo $row2[0]->total; ?>
									</span>
								<?php } ?>
							</a>
						</li>
						<li>
							<a class="nav-link <?php currenturl('jadwal', 'active'); currenturl('jadwal', 'active'); ?>" href="<?php echo base_url('admin/jadwal') ?>">
								Jadwal
							</a>
						</li>
					</ul>
				</li> -->

				<li class="menu-header">Autentikasi</li>
				<li class="<?php currenturl('newuser', 'active');?>">
					<a class="nav-link" href="<?php echo base_url('admin/newuser') ?>">
						<i class="fas fa-user"></i> <span>Pengguna Baru</span>
					</a>
				</li>
				<li class="<?php currenturl('users', 'active');?>">
					<a class="nav-link" href="<?php echo base_url('admin/users') ?>">
						<i class="fas fa-tasks"></i> <span>Kelola Pengguna</span>
					</a>
				</li>

				<li class="menu-header">Peminjaman</li>
				<li class="<?php currenturl('room', 'active');?>">
					<a class="nav-link" href="<?php echo base_url('admin/room') ?>">
					<i class="fas fa-chalkboard-teacher"></i> <span>Ruangan</span>
					</a>
				</li>
				<li class="<?php currenturl('request', 'active');?>">
					<a class="nav-link" href="<?php echo base_url('admin/request') ?>">
						<i class="fas fa-door-open"></i> <span>Peminjaman</span>
					</a>
				</li>
				<li class="<?php currenturl('jadwal', 'active');?>">
					<a class="nav-link" href="<?php echo base_url('admin/jadwal') ?>">
						<i class="far fa-calendar-alt"></i> <span>Jadwal</span>
					</a>
				</li>

				<li class="menu-header">Laporan</li>
				<li class="<?php currenturl('jadwalreport', 'active'); ?>">
					<a class="nav-link" href="<?php echo base_url('admin/jadwalreport') ?>">
						<i class="far fa-file"></i> <span>Jadwal</span>
					</a>
				</li>

			</ul>
	</aside>
</div>
