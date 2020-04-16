<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Administrator | Ubharajaya</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link rel='shortcut icon' href='http://localhost/soal_uts_bimabagaskhoro/favicon.ico' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/dist/bootstrap/css/bootstrap.min.css' />

	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/fontawesome/css/all.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/select2/select2.min.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/dist/css/AdminLTE.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/dist/css/skins/skin-green-light.min.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/jQueryUI/jquery-ui.css'>
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/iCheck/square/green.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'>
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/datatables/dataTables.bootstrap.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/datatables/extensions/Select/css/select.bootstrap.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/animate/animate.min.css'>
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/datetimepicker/jquery.datetimepicker.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/notify/css/notify-flat.css' />
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/sweetalert2/dist/sweetalert2.min.css'>
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/plugins/toastr/toastr.min.css'>
	<link rel='stylesheet' href='http://localhost/soal_uts_bimabagaskhoro/dist/css/costum.css' />
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/tinymce/tinymce.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/jQuery/jquery-3.1.1.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/datatables/jquery.dataTables.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/datatables/dataTables.bootstrap.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/datatables/extensions/Select/js/dataTables.select.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/datatables/extensions/Select/js/select.bootstrap.min.js'></script>

	<!-- <style type='text/css' media='print'>
		.page {
			-webkit-transform: rotate(-90deg);
			-moz-transform: rotate(-90deg);
			filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=3)';
		}
	</style> -->
</head>

<body class='hold-transition skin-green-light sidebar-mini fixed '>
	<div id='pesan'></div>
	<div class='loader'></div>
	<div class='wrapper'>
		<header class='main-header'>
            <a href='?' class='logo' style='background-color:#f9fafc'>
				<span class='animated bounce logo-mini'>
					<img src="http://localhost/soal_uts_bimabagaskhoro/dist/img/logo_ubj.png" height="30px">
				</span>
				<span class='animated bounce logo-lg'>
					<img src="http://localhost/soal_uts_bimabagaskhoro/dist/img/logo_ubj.png" height="40px"> Ubharajaya				</span>
			</a>
			<nav class='navbar navbar-static-top' style='background-color:#00a896;box-shadow: 0px 10px 10px 0px rgba(0,0,0,0.1)' role='navigation'>
				<a href='#' class='sidebar-baru' data-toggle='offcanvas' role='button'>
					<i class="fa fa-bars fa-lg fa-fw"></i>
				</a>
				<div class='navbar-custom-menu'>
					<ul class='nav navbar-nav'>
													<li class='dropdown notifications-menu'>
								<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
									<i class="fas fa-desktop fa-lg fa-fw"></i> <span style='font-size:18px'>PUSAT</span>
								</a>
								<ul class="dropdown-menu" style="height:80px">
									<li class="header">Ganti Status Server</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu">
																							<li>
													<a id="btnserver" href="#">
														<i class="fa fa-users text-aqua"></i> Server Lokal
													</a>
												</li>
																					</ul>
									</li>

								</ul>
							</li>
												<li><a href='?pg=informasi'><i class="fas fa-comment-dots fa-lg  "></i></a></li>
						<li class='dropdown user user-menu'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
								<img src='http://localhost/soal_uts_bimabagaskhoro/dist/img/avatar-6.png' class='user-image' alt='+'>
								<span class='hidden-xs'>administrator &nbsp; <i class='fa fa-caret-down'></i></span>
							</a>
							<ul class='dropdown-menu'>
								<li class='user-header'>
									<img src='http://localhost/soal_uts_bimabagaskhoro/dist/img/avatar-6.png' class='img-circle' alt='User Image'>									<p>
										administrator										<small>NIP. -</small>
									</p>
								</li>
								<li class='user-footer'>
									<div class='pull-left'>
										<a href='?pg=pengaturan' class='btn btn-sm btn-default btn-flat'><i class='fa fa-gear'></i> Pengaturan</a>									</div>
									<div class='pull-right'>
										<a href='logout.php' class='btn btn-sm btn-default btn-flat'><i class='fa fa-sign-out'></i> Keluar</a>
									</div>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
		</header>

		<aside class='main-sidebar'>
			<section class='sidebar'>
				<!-- <div class='user-panel'>
					<div class='pull-left image'>
						 <img src='http://localhost/soal_uts_bimabagaskhoro/dist/img/avatar-6.png' class='img-circle' style='border:3px solid white; max-width:60px' alt='+'>					</div>
					<div class='pull-left info' style='left:65px'>
						<p>administrator</p>
						<a href='#'><i class='fa fa-circle text-green'></i> admin</a>
					</div>

				</div> -->
				<hr style="margin:0px">
				<div class="user-panel" style="text-align:center">
					<span>APLIKASI UJIAN</span><br>
					<span>BERBASIS ONLINE</span>
				</div>
				<hr style="margin:0px">
				<ul class=' sidebar-menu tree data-widget=' tree>

					<li class="header">MENU UTAMA</li>
					<li><a href='beranda.php'><i class="fas fa-home fa-2x fa-fw    "></i> <span>Beranda</span></a></li>
																							<li class=' treeview'>
								<a href='#'>
									<i class="fas fa-2x fa-fw fa-toolbox    "></i>
									<span>Data Master</span>
									<span class='pull-right-container'>
										<i class='fa fa-angle-down pull-right'></i>
									</span>
								</a>
								<ul class='treeview-menu'>
                                <li><a href='?pg=importmaster'><i class='fa fa-upload'></i> <span>Import Data Master</span><span class='pull-right-container'><small class='label pull-right bg-green'>new</small></span></a></li>
									<li><a href='data_mata_kuliah.php'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Mata Kuliah</span></a></li>
									<li><a href='data_jenis_ujian.php'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Jenis Ujian</span></a></li>

									<li><a href='data_prodi.php'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Prodi</span></a></li>
									<li><a href='data_kelas.php'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Kelas</span></a></li>
									<li><a href='data_ruangan.php'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Ruangan</span></a></li>
									<li><a href='?pg=level'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Level</span></a></li>
									<li><a href='data_sesi.php'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Sesi</span></a></li>
									<li><a href='?pg=dataserver'><i class='fas fa-dot-circle fa-fw'></i> <span> Data Server</span></a></li>
								</ul>
							</li>
												<li class='treeview'><a href='?pg=siswa'><i class="fas fa-user-friends fa-2x fa-fw   "></i> <span>Peserta Ujian</span></a></li>

						<li><a href='?pg=banksoal'><i class="fas fa-envelope-open-text   fa-2x fa-fw"></i> <span> Bank Soal</span></a></li>
						<li><a href='?pg=jadwal'><i class="fas fa-desktop   fa-2x fa-fw"></i> <span> Status Ujian</span></a></li>
						<!-- <li class='treeview'>
							<a href='#'><i class="fas fa-desktop fa-2x fa-fw"></i><span> UBK</span><span class='pull-right-container'> <i class='fa fa-angle-down pull-right'></i> </span></a>
							<ul class='treeview-menu'> -->
						<!-- <li><a href='?pg=status'><i class='fas fa-dot-circle fa-fw'></i> <span> Status Peserta</span></a></li> -->
						<!-- <li><a href='?pg=reset'><i class='fas fa-dot-circle fa-fw'></i> <span> Reset Login</span></a></li> -->
						<!-- <li><a href='?pg=token'><i class='fas fa-dot-circle fa-fw'></i> <span> Rilis Token</span></a></li> -->
						<!-- <li><a href='?pg=pengacak'><i class='fas fa-dot-circle fa-fw'></i> <span> Pengacak Soal</span></a></li> -->
						<!-- <li><a href='?pg=susulan'><i class='fas fa-dot-circle fa-fw'></i> <span> Belum Ujian</span></a></li>
								<li><a href='?pg=filemanager'><i class='fas fa-dot-circle fa-fw'></i> <span> File manager</span></a></li> -->
						<!-- </ul>
						</li> -->
						<li class='treeview'>
							<a href='#'><i class="fas fa-file-signature   fa-2x fa-fw"></i><span> Nilai </span><span class='pull-right-container'> <i class='fa fa-angle-down pull-right'></i> </span></a>
							<ul class='treeview-menu'>
								<!-- <li><a href='?pg=nilai'><i class='fas fa-dot-circle fa-fw'></i> <span> Hasil Nilai</span></a></li> -->
								<li><a href='?pg=semuanilai'><i class='fas fa-dot-circle fa-fw'></i> <span>Semua Nilai</span></a></li>
								<li><a href='?pg=dataujian'><i class='fas fa-dot-circle fa-fw'></i> <span>Data Ujian</span></a></li>
							</ul>
						</li>
						<li class='treeview'>
							<a href='#'><i class="fas fa-print   fa-2x fa-fw"></i><span> Cetak </span><span class='pull-right-container'> <i class='fa fa-angle-down pull-right'></i> </span></a>
							<ul class='treeview-menu'>
								<li><a href='?pg=absen'><i class='fas fa-dot-circle fa-fw'></i> <span> Daftar Hadir</span></a></li>
								<li><a href='?pg=kartu'><i class='fas fa-dot-circle fa-fw'></i> <span> Cetak Kartu</span></a></li>
								<li><a href='?pg=berita'><i class='fas fa-dot-circle fa-fw'></i> <span> Berita Acara</span></a></li>
							</ul>
						</li>

						<li class='treeview'><a href='?pg=pengumuman'><i class="fas fa-bullhorn   fa-2x fa-fw"></i> <span> Pengumuman</span></a></li>
						<li class='treeview'>
							<a href='#'><i class="fas fa-users-cog   fa-2x fa-fw"></i> <span>Manajemen User</span><span class='pull-right-container'> <i class='fa fa-angle-down pull-right'></i> </span></a>
							<ul class='treeview-menu'>
								<li><a href='?pg=pengawas'><i class='fas fa-dot-circle fa-fw'></i> <span>Data Administrator</span></a></li>
								<li><a href='?pg=guru'><i class='fas fa-dot-circle fa-fw'></i> <span>Data Dosen</span></a></li>
							</ul>
						</li>
						<li class='treeview'><a href='?pg=pengaturan'><i class="fas fa-tools fa-2x fa-fw"></i> <span>Pengaturan</span></a></li>

															<hr style="margin:0px">
									</ul><!-- /.sidebar-menu -->
			</section>
		</aside>

		<div class='content-wrapper' style='background-image: url(backgroun.jpg);background-size: cover;'>
			<section class='content-header' style="height:102px;z-index:0;background:#00a896">
				<h1 style='text-shadow: 2px 2px 4px #827e7e;color:#fff'>
					&nbsp;<span class='hidden-xs'>Ubharajaya- </span>
				</h1>
				<div style='float:right; margin-top:-37px'>
					<button class='btn  btn-flat  bg-purple'><i class='fa fa-calendar'></i> Senin, 13 April 2020</button>
					<button class='btn  btn-flat  bg-maroon'><span id='waktu'>18:08:08</span></button>
				</div>
				<div class='breadcrumb'></div>
			</section>
			<section class='content' style="margin-top:-65px">
														<div class='row'>
						<div class='col-md-12'></div>
						<div class='col-md-12'>
							<div class='box box-solid'>
								<div class='box-header with-border'>
									<h3 class='box-title'>Mata Kuliah</h3>
									<div class='box-tools pull-right '>
										<button class='btn btn-sm btn-flat btn-success' data-toggle='modal' data-target='#tambahmapel'><i class='fa fa-check'></i> Tambah Jenis Ujian</button>
										<button class='btn btn-sm btn-flat btn-success' data-toggle='modal' data-target='#importmapel'><i class='fa fa-upload'></i> Import Jenis Ujian</button>
									</div>
								</div><!-- /.box-header -->
								<div class='box-body'>
									<div class='table-responsive'>
										<table id='tablemapel' class='table table-bordered table-striped'>
										<thead>
												<tr>
													<th width='5px'>#</th>
													<th>Mata Kuliah</th>
													<th>Jenis Ujian</th>
												</tr>
											</thead>
											<tbody>
																																																		<tr>
														<td>1</td>
														<td>JARINGAN KOMPUTER</td>
														<td>Tertulis</td>

													</tr>
																																						<tr>
														<td>2</td>
														<td>ARSITEKTUR KOMPUTER</td>
														<td>Tertulis</td>
													</tr>
																																						<tr>
														<td>3</td>
														<td>PANCASILA</td>
														<td>Tertulis</td>
													</tr>
																																						<tr>
														<td>4</td>
														<td>0RGANISASI </td>
														<td>Tertulis</td>
													</tr>
																																						<tr>
														<td>5</td>
														<td>METODE NUMERIK</td>
														<td>Tertulis</td>
													</tr>
																																						<tr>
														<td>6</td>
														<td>SISTEM OPERASI</td>
														<td>Tertulis</td>
													</tr>
																																						<tr>
														<td>7</td>
														<td>PEMROGRAMAN WEB</td>
														<td>Tertulis</td>
													</tr>
																																						<tr>
														<td>8</td>
														<td>MANAJEMEN SEKURITI</td>
														<td>Tertulis</td>
													</tr>
																																						<tr>
														<td>9</td>
														<td>PENDIDIKAN WIRAUSAHA</td>
														<td>Tertulis</td>
													</tr>
																																						<tr>
														<td>10</td>
														<td>PEMROGRAMAN MOBILE DEVELOPER</td>
														<td>Tertulis</td>
													</tr>
																							</tbody>
										</table>
									</div>
								</div><!-- /.box-body -->
							</div><!-- /.box -->
						</div>

						<div class='modal fade' id='tambahmapel' style='display: none;'>
							<div class='modal-dialog'>
								<div class='modal-content'>
									<div class='modal-header bg-blue'>
										<button class='close' data-dismiss='modal'><span aria-hidden='true'><i class='glyphicon glyphicon-remove'></i></span></button>
										<h3 class='modal-title'>Tambah Mata Kuliah</h3>
									</div>
									<div class='modal-body'>
										<form action='' method='post'>
											<div class='form-group'>
												<label>Kode Matkul</label>
												<input type='text' name='kodemapel' class='form-control' required='true' />
											</div>
											<div class='form-group'>
												<label>Nama Mata Kuliah</label>
												<input type='text' name='namamapel' class='form-control' required='true' />
											</div>
											<div class='modal-footer'>
												<div class='box-tools pull-right '>
													<button type='submit' name='simpanmapel' class='btn btn-sm btn-flat btn-success'><i class='fa fa-check'></i> Simpan</button>
													<button type='button' class='btn btn-default btn-sm pull-left' data-dismiss='modal'>Close</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class='modal fade' id='importmapel' style='display: none;'>
							<div class='modal-dialog'>
								<div class='modal-content'>
									<div class='modal-header bg-blue'>
										<button class='close' data-dismiss='modal'><span aria-hidden='true'><i class='glyphicon glyphicon-remove'></i></span></button>
										<h3 class='modal-title'>Tambah Mata Kuliah</h3>
									</div>
									<div class='modal-body'>
										<form action='' method='post' enctype='multipart/form-data'>
											<div class='form-group'>
												<label>Pilih File</label>
												<input type='file' name='file' class='form-control' required='true' />
											</div>
											<p>
												Sebelum meng-import pastikan file yang akan anda import sudah dalam bentuk Ms. Excel 97-2003 Workbook (.xls) dan format penulisan harus sesuai dengan yang telah ditentukan. <br />
											</p>

											<a href='importdatamapel.xls'><i class='fa fa-file-excel-o'></i> Download Format</a>

											<div class='modal-footer'>
												<div class='box-tools pull-right '>
													<button type='submit' name='importmapel' class='btn btn-sm btn-flat btn-success'><i class='fa fa-upload'></i> Simpan</button>
													<button type='button' class='btn btn-default btn-sm pull-left' data-dismiss='modal'>Close</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
							</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		<footer class='main-footer hidden-xs'>
			<div class='container'>
				<div class='pull-left hidden-xs'>
					<strong>
						<span id='end-sidebar'>
							&copy; 2019 Ubharajaya v2.7.0 r0						</span>
					</strong>
				</div>

		</footer>
	</div><!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->
	<script src='http://localhost/soal_uts_bimabagaskhoro/dist/bootstrap/js/bootstrap.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/fastclick/fastclick.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/dist/js/adminlte.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/dist/js/app.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/datetimepicker/build/jquery.datetimepicker.full.min.js'></script>

	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/slimScroll/jquery.slimscroll.min.js'></script>


	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/iCheck/icheck.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/select2/select2.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/tableedit/jquery.tabledit.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/toastr/toastr.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/notify/js/notify.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/sweetalert2/dist/sweetalert2.min.js'></script>
	<script src='http://localhost/soal_uts_bimabagaskhoro/plugins/MathJax-2.7.3/MathJax.js?config=TeX-AMS_HTML-full'></script>

	<script>
		$('.loader').fadeOut('slow');
		$(function() {
			$('#textarea').wysihtml5()
		});
		var autoRefresh = setInterval(
			function() {
				$('#waktu').load('http://localhost/soal_uts_bimabagaskhoro/admin/_load.php?pg=waktu');
				$('#log-list').load('http://localhost/soal_uts_bimabagaskhoro/admin/_load.php?pg=log');
				$('#pengumuman').load('http://localhost/soal_uts_bimabagaskhoro/admin/_load.php?pg=pengumuman');
			}, 1000
		);
				var autoRefresh = setInterval(
			function() {
				$('#isi_token').load('http://localhost/soal_uts_bimabagaskhoro/admin/_load.php?pg=token');
			}, 900000
		);

		$('.datepicker').datetimepicker({
			timepicker: false,
			format: 'Y-m-d'
		});
		$('.tgl').datetimepicker();
		$('.timer').datetimepicker({
			datepicker: false,
			format: 'H:i'
		});

		$(function() {
			$('#jenis').change(function() {
				if ($('#jenis').val() == '2') {
					$('#jawabanpg').hide();
					$('input:radio[name=jawaban]').attr('disabled', true);
				} else {
					$('#jawabanpg').show();
					$('input:radio[name=jawaban]').attr('disabled', false);
				}
			});
		});

		function printkartu(idkelas, judul) {
			$('#loadframe').attr('src', 'kartu.php?id_kelas=' + idkelas);
		}

		function printabsen() {
			var idsesi = $('#absensesi option:selected').val();
			var idmapel = $('#absenmapel option:selected').val();
			var idruang = $('#absenruang option:selected').val();
			var idkelas = $('#absenkelas option:selected').val();
			$('#loadabsen').attr('src', 'absen.php?id_sesi=' + idsesi + '&id_ruang=' + idruang + '&id_mapel=' + idmapel + '&id_kelas=' + idkelas);
		}

		function iCheckform() {
			$('input[type=checkbox].flat-check, input[type=radio].flat-check').iCheck({
				checkboxClass: 'icheckbox_square-green',
				radioClass: 'iradio_square-green',
				increaseArea: '20%' // optional
			});
		}

		$(document).ready(function() {
			$('#example1').DataTable({
				select: true
			});
			$('#soalpg').keyup(function() {
				$('#tampilpg').val(this.value);
			});
			$('#soalesai').keyup(function() {
				$('#tampilesai').val(this.value);
			});
			$('#formsoal').submit(function(e) {
				e.preventDefault();
				var data = new FormData(this);
				$.ajax({
					type: 'POST',
					url: 'simpansoal.php',
					enctype: 'multipart/form-data',
					data: data,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function() {

					},
					success: function(data) {
						toastr.success('soal berhasil disimpan');
					}
				})
				return false;
			});
			$('#ceksemua').change(function() {
				$(this).parents('#tablereset:eq(0)').
				find(':checkbox').attr('checked', this.checked);
			});

			$('.idkel').change(function() {
				var thisval = $(this).val();
				var txt_id = $(this).attr('id').replace('me', 'txt');
				var idm = $('#' + txt_id).val();
				var idu = $('#iduj').val();
				console.log(thisval + idm);
				$('.linknilai').attr('href', '?pg=nilai&ac=lihat&idu=' + idu + '&idm=' + idm + '&idk=' + thisval);
			});
			$('.alert-dismissible').fadeTo(2000, 500).slideUp(500, function() {
				$('.alert-dismissible').alert('close');
			});
			$('.select2').select2();

			$('input:checkbox[name=masuksemua]').click(function() {
				if ($(this).is(':checked'))
					$('input:radio.absensi').attr('checked', 'checked');
				else
					$('input:radio.absensi').removeAttr('checked');
			});
			iCheckform()
			$('#btnbackup').click(function() {
				$('.notif').load('backup.php');
				console.log('sukses');
			});
			$('#mastersoal').click(function() {
				var mapel_id = $('#mapel_id').val();
				$('.notif_mapel').load('backup_excel.php?mapel_id=' + mapel_id);
				console.log('sukses');
			});
		});
	</script>
	<script>
		function kirim_form() {
			var homeurl;
			homeurl = 'http://localhost/soal_uts_bimabagaskhoro';
			var jawab = $('#headerkartu').val();
			$.ajax({
				type: 'POST',
				url: 'simpanheader.php',
				data: 'jawab=' + jawab,
				success: function(response) {
					location.reload();
				}
			});
		}
	</script>

	<script type="text/javascript">
		var url = window.location;
		// for sidebar menu entirely but not cover treeview
		$('ul.sidebar-menu a').filter(function() {
			return this.href == url;
		}).parent().addClass('active');

		// for treeview
		$('ul.treeview-menu a').filter(function() {
			return this.href == url;
		}).closest('.treeview').addClass('active');
	</script>

	<script>
		$(function() {
			$("#btnresetlogin").click(function() {
				id_array = new Array();
				i = 0;
				$("input.cekpilih:checked").each(function() {
					id_array[i] = $(this).val();
					i++;
				});
				$.ajax({
					url: "resetlogin.php",
					data: "kode=" + id_array,
					type: "POST",
					success: function(respon) {
						if (respon == 1) {
							$("input.cekpilih:checked").each(function() {
								$(this).parent().parent().remove('.cekpilih').animate({
									opacity: "hide"
								}, "slow");
							})
						}
					}
				});
				return false;
			})
		});
		$(function() {
			$("#btnhapusbank").click(function() {
				i = 0;
				id_array = new Array();
				$("input.cekpilih:checked").each(function() {
					id_array[i] = $(this).val();
					i++;
				});
				swal({
					title: 'Bank Soal Terpilih ' + i,
					text: 'Apakah kamu yakin akan menghapus data bank soal yang sudah dipilih  ini ??',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Hapus!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: 'hapusbanksoal.php',
							data: "kode=" + id_array,
							type: "POST",
							success: function(respon) {
								if (respon == 1) {
									$("input.cekpilih:checked").each(function() {
										$(this).parent().parent().remove('.cekpilih').animate({
											opacity: "hide"
										}, "slow");
									})
								}
							}
						})
					}
				});
				return false;
			})
		});
		$(function() {
			$("#btnhapusjadwal").click(function() {
				id_array = new Array();
				i = 0;
				$("input.cekpilih:checked").each(function() {
					id_array[i] = $(this).val();
					i++;
				})
				swal({
					title: 'Jadwal Terpilih ' + i,
					text: 'Apakah kamu yakin akan menghapus data jadwal yang sudah dipilih ini ??',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Hapus!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: 'hapusjadwal.php',
							data: "kode=" + id_array,
							type: "POST",
							success: function(respon) {
								if (respon == 1) {
									$("input.cekpilih:checked").each(function() {
										$(this).parent().parent().remove('.cekpilih').animate({
											opacity: "hide"
										}, "slow");
									})
								}
							}
						})
					}
				});
				return false;
			})

			$("#btnserver").click(function() {

				swal({
					title: 'Ganti Status Server ',
					text: 'Apakah kamu yakin akan mengganti status server ini ??',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Ganti'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: 'gantiserver.php',
							type: "POST",
							success: function(respon) {
								location.reload();
							}
						})
					}
				});
				return false;
			})
		});
	</script>

	<script>
		$(function() {
			$("#buatberita").click(function() {
				swal({
					title: 'Generate Berita Acara',
					text: 'Pastikan pembuatan jadwal sudah fix ??',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Buat!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							url: 'buatberita.php',
							type: "POST",
							beforeSend: function() {
								$('.loader').css('display', 'block');
							},
							success: function(respon) {
								$('.loader').css('display', 'none');
								location.reload();
							}
						})
					}
				});
				return false;
			})
		});

		$(document).ready(function() {
			var messages = $('#pesan').notify({
				type: 'messages',
				removeIcon: '<i class="icon icon-remove"></i>'
			});
			$('#formreset').submit(function(e) {
				e.preventDefault();
				$.ajax({
					type: 'POST',
					url: $(this).attr('action'),
					data: $(this).serialize(),
					success: function(data) {
						if (data == "ok") {
							messages.show("Reset Login Peserta Berhasil", {
								type: 'success',
								title: 'Berhasil',
								icon: '<i class="icon icon-check-sign"></i>'
							});
						}
						if (data == "pilihdulu") {
							swal({
								position: 'top-end',
								type: 'success',
								title: 'Data Berhasil disimpan',
								showConfirmButton: true
							});
						}
					}
				});
				return false;
			});

		});
	</script>
	<script>
		$('#formsiswa').on('submit', function(e) {
			e.preventDefault();
			$.ajax({
				type: 'post',
				url: 'import_siswa.php',
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				beforeSend: function() {
					$('#progressbox').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
					$('.progress-bar').animate({
						width: "30%"
					}, 100);
				},
				success: function(response) {
					setTimeout(function() {
						$('.progress-bar').css({
							width: "100%"
						});
						setTimeout(function() {
							$('#hasilimport').html(response);
						}, 100);
					}, 500);
				}
			});
		});
	</script>

	<script>
													$(document).ready(function() {
				$('#tablemapel').Tabledit({
					url: 'example.php?pg=mapel',
					restoreButton: false,
					columns: {
						identifier: [1, 'id'],
						editable: [
							[2, 'namamapel']
						]
					}
				});
			});
							</script>
	<script>
		$(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
			$("#absenmapel").change(function() {
				var mapel_id = $(this).val();
				console.log(mapel_id);
				$.ajax({
					type: "POST", // Method pengiriman data bisa dengan GET atau POST
					url: "dataabsen_ruang.php", // Isi dengan url/path file php yang dituju
					data: "mapel_id=" + mapel_id, // data yang akan dikirim ke file yang dituju
					success: function(response) { // Ketika proses pengiriman berhasil
						$("#absenruang").html(response);
						console.log(response);
					},
					error: function(xhr, status, error) {
						console.log(error);
					}
				});
			});

			$("#absensesi").change(function() {
				var sesi = $(this).val();
				var mapel_id = $("#absenmapel").val();
				var ruang = $("#absenruang").val();
				$.ajax({
					type: "POST", // Method pengiriman data bisa dengan GET atau POST
					url: "dataabsen_kelas.php", // Isi dengan url/path file php yang dituju
					data: "mapel_id=" + mapel_id + '&sesi=' + sesi + '&ruang=' + ruang, // data yang akan dikirim ke file yang dituju
					success: function(response) { // Ketika proses pengiriman berhasil
						$("#absenkelas").html(response);
						console.log(response);
					},
					error: function(xhr, status, error) {
						console.log(error);
					}
				});
			});

			$("#absenruang").change(function() {

				var ruang = $(this).val();
				console.log(ruang);
				$.ajax({
					type: "POST", // Method pengiriman data bisa dengan GET atau POST
					url: "dataabsen_sesi.php", // Isi dengan url/path file php yang dituju
					data: "ruang=" + ruang, // data yang akan dikirim ke file yang dituju
					success: function(response) { // Ketika proses pengiriman berhasil
						$("#absensesi").html(response);
						console.log(response);
					},
					error: function(xhr, status, error) {
						console.log(error);
					}
				});
			});

			$("#soallevel").change(function() {
				var level = $(this).val();
				console.log(level);
				$.ajax({
					type: "POST", // Method pengiriman data bisa dengan GET atau POST
					url: "datakelas.php", // Isi dengan url/path file php yang dituju
					data: "level=" + level, // data yang akan dikirim ke file yang dituju
					success: function(response) { // Ketika proses pengiriman berhasil
						$("#soalkelas").html(response);
					}
				});
			});
			$(document).on('click', '.ambiljawaban', function() {
				var idmapel = $(this).data('id');
				console.log(idmapel);
				swal({
					title: 'Are you sure?',
					text: 'Fungsi ini akan memindahkan data jawaban dari temp_jawaban ke hasil jawaban',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Ambil!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: 'POST',
							url: 'ambiljawaban.php',
							data: 'id=' + idmapel,
							beforeSend: function() {
								swal({
									text: 'Proses memindahkan',
									timer: 1000,
									onOpen: () => {
										swal.showLoading()
									}
								});
							},
							success: function(response) {
								$(this).attr('disabled', 'disabled');
								swal({
									position: 'top-end',
									type: 'success',
									title: 'Data Berhasil diambil',
									showConfirmButton: false,
									timer: 1500
								});
							}
						});
					}
				})
			});
			$(document).on('click', '.btnresetacak', function() {
				var idacak = $(this).data('id');
				var idu = $(this).data('idu');
				console.log(idacak);
				swal({
					title: 'Are you sure?',
					text: 'Fungsi ini akan mengacak kembali soal dan opsi soal',
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Ya, Ambil!'
				}).then((result) => {
					if (result.value) {
						$.ajax({
							type: 'POST',
							url: 'resetacak.php',
							data: 'id=' + idacak + '&idu=' + idu,
							beforeSend: function() {
								swal({
									text: 'Proses memindahkan',
									timer: 1000,
									onOpen: () => {
										swal.showLoading()
									}
								});
							},
							success: function(response) {
								location.reload();

							}
						});
					}
				})
			});
		});
	</script>
</body>

</html>