<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>STMIK Bandung - Rencana Studi</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo base_url('/assets/img/icon.ico" type="image/x-icon')?>"/>

	<style>
		thead, tbody, tr, td, tfoot{
			color: white;
		}
		option{
			color: #373b38;
		}
	</style>

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

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/demo.css')?>">
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
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">KARTU RENCANA STUDI</div>
								</div>
  <?php
  $data=$this->session->flashdata('sukses');
  if($data!=""){ ?>
  <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
  <?php } ?>

  <?php 
  $data2=$this->session->flashdata('error');
  if($data2!=""){ ?>
  <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
  <?php } ?>

								<div class="card-body">
									<?php echo form_open('admin/krs_add'); ?>
											<div class="form-group form-floating-label <?php echo(form_error('mahasiswa') ? 'has-error' : '') ?>">
												<select style="color: white" class="form-control input-border-bottom" id="selectFloatingLabel" required name="nama">
													<option value="">&nbsp;</option>
													<option disabled="">- Pilih Salah Satu -</option>
													<?php foreach($mahasiswa as $mahasiswa): ?>
													<option value="<?= $mahasiswa->nama; ?>"><?= $mahasiswa->nim; ?> | <?= $mahasiswa->nama; ?></option>
												<?php endforeach; ?>
													<small class="block text-danger"><?= form_error('mahasiswa'); ?></small>
												</select>
												<label for="selectFloatingLabel" class="placeholder">Mahasiswa</label>
											</div>											
											<div class="form-group form-floating-label">
												<select style="color: white" class="form-control input-border-bottom" id="selectFloatingLabel" required name="jurusan">
													<option value="">&nbsp;</option>
													<option disabled="">- Pilih Salah Satu -</option>
													<option>Teknik Informatika</option>
													<option>Sistem Informasi</option>
												</select>
												<label for="selectFloatingLabel" class="placeholder">Jurusan</label>
											</div>
									  <small class="block text-danger"><?= form_error('matakuliah'); ?></small>
									<?php foreach($matkul as $x): ?>		    
									<table class="table table-head-bg-primary mt-4">
										<thead>
											<tr>
												<th scope="col">Kode Mata Kuliah</th>
												<th scope="col">Nama Mata Kuliah</th>
												<th scope="col">Jurusan</th>
												<th scope="col">Semester</th>
												<th scope="col">SKS</th>
												<th scope="col">Pilih</th>
											</tr>
										</thead>
										<tbody>
											<?php $this->load->model('M_Admin'); ?>
                    						<?php $matakuliah = $this->M_Admin->nama($x->semester); ?>
                    						<?php foreach($matakuliah as $data): ?>
											<tr>
												<td><?= $data->kode_matkul ?></td>
												<td><?= $data->nama_matkul ?></td>
												<td><?= $data->jurusan ?></td>
												<td><?= $data->semester ?></td>
												<td><?= $data->sks ?></td>
												<td>
													<input type="checkbox" name="matakuliah[]" value="<?= $data->nama_matkul; ?>" title="<?= $data->sks; ?>">
												</td>
											</tr>
										<?php endforeach; ?>
										</tbody>
									</table>
									<?php endforeach; ?>
									  <div class="form-group">
							            <label for="mahasiswa">Jumlah SKS</label>
							            <input type="text" name="sks" id="sks" class="form-control" title="sks">
							        </div>
								<div class="card-action">
									<button class="btn btn-primary">Tambah</button>
								</div>
									<?php echo form_close(); ?>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
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
	<script>
		Circles.create({
			id:'circles-1',
			radius:45,
			value:60,
			maxValue:100,
			width:7,
			text: 5,
			colors:['#f1f1f1', '#FF9E27'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-2',
			radius:45,
			value:70,
			maxValue:100,
			width:7,
			text: 36,
			colors:['#f1f1f1', '#2BB930'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		Circles.create({
			id:'circles-3',
			radius:45,
			value:40,
			maxValue:100,
			width:7,
			text: 12,
			colors:['#f1f1f1', '#F25961'],
			duration:400,
			wrpClass:'circles-wrp',
			textClass:'circles-text',
			styleWrapper:true,
			styleText:true
		})

		var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

		var mytotalIncomeChart = new Chart(totalIncomeChart, {
			type: 'bar',
			data: {
				labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
				datasets : [{
					label: "Total Income",
					backgroundColor: '#ff9e27',
					borderColor: 'rgb(23, 125, 255)',
					data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
				}],
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false,
				},
				scales: {
					yAxes: [{
						ticks: {
							display: false //this will remove only the label
						},
						gridLines : {
							drawBorder: false,
							display : false
						}
					}],
					xAxes : [ {
						gridLines : {
							drawBorder: false,
							display : false
						}
					}]
				},
			}
		});

		$('#lineChart').sparkline([105,103,123,100,95,105,115], {
			type: 'line',
			height: '70',
			width: '100%',
			lineWidth: '2',
			lineColor: '#ffa534',
			fillColor: 'rgba(255, 165, 52, .14)'
		});
	</script>
<script type="text/javascript">
		$(document).ready(function(){
			var jumlahsks=0;
			var tmp=0;
			$(':checkbox').click(function(){
			if ($(this).is(":checked") == true ){
			var tmp=parseInt($(this).attr('title'));
			jumlahsks = jumlahsks + tmp;
			if(jumlahsks > 24){
			alert('PERINGATAN :\n SKS Sudah Lebih Dari 24 SKS\n Pemilihan Mata Kuliah Terakhir Dibatalkan');
			$(this).attr("checked", false);
			jumlahsks=jumlahsks-tmp; 
			
			}
			var elem = document.getElementById("sks");
			elem.value = jumlahsks;
										                            
			} else {
			var tmp=parseInt($(this).attr('title'));
			jumlahsks = jumlahsks-tmp;
			var elem = document.getElementById("sks");
			elem.value = jumlahsks;
			}
		});
	});
	jumlahsks=0;
</script>
</body>
</html>