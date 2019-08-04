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

			<div class="col-md-3">
			<h4>TAMBAH DATA Kriteria</h4>
				<form action="<?php echo base_url(). 'page/simpankriteria'; ?>" method="post" >
					<label for="nama">Nama Kriteria</label>
					<input class="form-control" type="text" name="nama_kriteria" placeholder="Masukan Nama Makanan" required>
					<label for="kriteria">bobot kriteria (g)</label>
					<input class="form-control" type="text" name="bobot_kriteria" placeholder="Masukan Karbohidrat" required>
					 <br>
					<button type="submit" class="btn btn-primary">Tambah Data Kriteria</button>
					
				</form>		
			</div>
		</div>
<br><br>
			<nav class="navbar fixed-bottom navbar-light bg-light" style="background-color: #e3f2fd;" >
			<center><p class="text-center">&copy Chandrikka Aniendra Putri</p></center>
			</nav>
	</div>
	
		
</body>
</html>