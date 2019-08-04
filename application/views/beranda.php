<?php

//   if (!$this->session->userdata('username')) {
//     redirect('page/login');
//   }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Program CPI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css'); ?>">
</head>
<body>

<nav class="navbar fixed-top navbar-dark bg-primary" >
<center><h1>SPK Pemilihan Makanan Penderita Maag</h1></center>
</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<ul class="list-group">
					<li class="list-group-item"><a href="<?php echo base_url('page/beranda'); ?>">Beranda</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/datamakanan'); ?>">Data Makanan</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/kriteria'); ?>">Kriteria</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/matriktransformasi') ?>">Matrik Transformasi</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('page/hasilrekomendasi') ?>">Hasil Rekomendasi</a></li>
					<li class="list-group-item"><a href="<?php echo base_url('autentication/logout'); ?>">Logout</a></li>
				</ul>
			</div>

			<div class="col-md-10">
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h1 class="display-4">SELAMAT DATANG DI WEBSITE </h1>
					<p class="lead">SISTEM PENDUKUNG KEPUTUSAN - COMPOSITE PERFORMANCE INDEX</p>
					<h4>Sistem Pendukung Keputusan adalah sistem yang dapat memberikan kemampuan pemecahan masalah serta kemampuan pengkomunikasian dalam kondisi semi struktur dan tak terstuktur. Sedangkan Composite Performance Index adalah metode yang digunakan dalam pengambilan keputusan berbasis index kinerja dan index gabungan yang dapat digunakan untuk menentukan penentuan dari berbagai alternatif berdasarkan beberapa kriteria </h4>
				</div>
			</div>
			</div>
		</div>

			<nav class="navbar fixed-bottom navbar-light bg-light" style="background-color: #e3f2fd;" >
			<center><p class="text-center">&copy Chandrikka Aniendra Putri</p></center>
			</nav>
	</div>
	
</body>
</html>