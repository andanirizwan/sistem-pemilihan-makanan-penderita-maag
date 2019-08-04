<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pemilihan Makanan Penderita Maag</title>
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

			<div class="col-md-9">
			
				<h4>Halaman data kriteria</h4>	
				<a href="<?php echo base_url('page/tambahkriteria'); ?>" class="btn btn-success" type="button">Tambah Data</a> <br><br>
				
				<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Kriteria</th>
					<th scope="col">Bobot kriteria</th>
					<th scope="col">#</th>
					</tr>
				</thead>
				<tbody>
				<?php 
				$no = 1;
				foreach($kriteria as $kriteria1){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $kriteria1->nama_kriteria ?></td>
					<td><?php echo $kriteria1->bobot_kriteria ?></td>
					
					<td>
					<a href="<?php echo base_url('page/editkriteria/'); ?><?php echo $kriteria1->id ?>" class="btn btn-info" type="button">edit</a>
					<button type="button" class="btn btn-danger">hapus</button></td>
					
				</tr>

				<?php } ?>

				</tbody>
				</table>
				
			</div>
		</div>
	</div>

			<nav class="navbar fixed-bottom navbar-light bg-light" style="background-color: #e3f2fd;" >
			<center><p class="text-center">&copy Chandrikka Aniendra Putri</p></center>
			</nav>
	</div>
</body>
</html>