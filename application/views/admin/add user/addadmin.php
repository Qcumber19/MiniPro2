<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>STMIK Bandung - Add Admin</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url('/assets/img/icon.ico" type="image/x-icon')?>"/>

	<!-- Fonts and icons -->
	<script src="<?php echo base_url('/assets/js/plugin/webfont/webfont.min.js')?>"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?php echo base_url('/assets/css/fonts.min.css')?>']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/atlantis.min.css')?>">
</head>
<body data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="dark2">
				
				<a href="index.html" class="logo">
					<img src="<?php echo base_url('/assets/img/logo.svg" alt="navbar brand')?>" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?php echo base_url('/assets/img/profile.jpg')?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?php echo base_url('/assets/img/profile.jpg')?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?php echo $this->session->userdata('ses_nama'); ?></h4>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?php echo site_url('login/logout') ?>">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2" data-background-color="dark2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?php echo base_url('/assets/img/profile.jpg')?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $this->session->userdata('ses_nama'); ?>
									<span class="user-level"> <?php echo $this->session->userdata('ses_user'); ?></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="<?php echo site_url('admin/index') ?>">
								<i class="fas fa-user"></i>
								<p>User</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>	
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-user-friends"></i>
								<p>Add User</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('admin/AddAdminView')?>">
											<span class="sub-item">Add Administrator</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/AddDosenView')?>">
											<span class="sub-item">Add Dosen</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/AddMhsView')?>">
											<span class="sub-item">Add Mahasiswa</span>
										</a>
									</li>
								</ul>
							</div>
						</li>		
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-book"></i>
								<p>Mahasiswa</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('admin/DataIndukView')?>">
											<span class="sub-item">Data Induk Mahasiswa</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/FormLulusView')?>">
											<span class="sub-item">Kelulusan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#sidebarLayouts">
								<i class="fas fa-book-open"></i>
								<p>Dosen</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="sidebarLayouts">
								<ul class="nav nav-collapse">
									<li>
										<a href="<?php echo site_url('admin/KHSTableView')?>">
											<span class="sub-item">KHS</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/SerKomTableView')?>">
											<span class="sub-item">Sertifikat Kompetensi</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#maps">
								<i class="fas fa-address-card"></i>
								<p>KRS</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="maps">
								<ul class="nav nav-collapse">
									<li class="active">
										<a href="<?php echo site_url('admin/krs_mahasiswa_view')?>">
											<span class="sub-item">Mahasiswa</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/krs_matakuliah_view')?>">
											<span class="sub-item">Matakuliah</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/krs_view')?>">
											<span class="sub-item">KRS</span>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('admin/krs_table_view')?>">
											<span class="sub-item">KRS View</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">ADD ADMIN</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-7">
											<div class="form-group">
											<tbody>
												<?php echo form_open('admin/AddAdmin'); ?>
													<div class="row">
													<div class="col-md-6 col-lg-12">
													<div class="form-group">
														<label for="largeInput">ID</label>
														<input type="text" name="username" class="form-control form-control" id="defaultInput" placeholder="Enter ID">
													</div>
													<div class="form-group">
														<label for="largeInput">Name</label>
														<input type="text" name="fname" class="form-control form-control" id="defaultInput" placeholder="Enter Name">
													</div>	
													<div class="form-group">
														<label for="exampleFormControlFile1">Password</label>
														<input type="password" name="password" class="form-control form-control" id="defaultInput" placeholder="Enter Password">
													</div>
													</div>
													</div>
													<div class="card-action">
														<button class="btn btn-primary">Add Admin</button>
													</div>
												<?php echo form_close(); ?>
											</tbody>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>				
				</div>
			</footer>
		</div>
		
	</div>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url('/assets/js/core/jquery.3.2.1.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/js/core/popper.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/js/core/bootstrap.min.js')?>"></script>

	<!-- jQuery UI -->
	<script src="<?php echo base_url('/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')?>"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?php echo base_url('/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')?>"></script>


	<!-- Chart JS -->
	<script src="<?php echo base_url('/assets/js/plugin/chart.js/chart.min.js')?>"></script>

	<!-- jQuery Sparkline -->
	<script src="<?php echo base_url('/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')?>"></script>

	<!-- Chart Circle -->
	<script src="<?php echo base_url('/assets/js/plugin/chart-circle/circles.min.js')?>"></script>

	<!-- Datatables -->
	<script src="<?php echo base_url('/assets/js/plugin/datatables/datatables.min.js')?>"></script>

	<!-- Bootstrap Notify -->
	<script src="<?php echo base_url('/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')?>"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?php echo base_url('/assets/js/plugin/jqvmap/jquery.vmap.min.js')?>"></script>
	<script src="<?php echo base_url('/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')?>"></script>

	<!-- Sweet Alert -->
	<script src="<?php echo base_url('/assets/js/plugin/sweetalert/sweetalert.min.js')?>"></script>

	<!-- Atlantis JS -->
	<script src="<?php echo base_url('/assets/js/atlantis.min.js')?>"></script>
</body>
</html>