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
			<h4>Halaman hasil rekomendasi</h4>	
				<table class="table table-striped table-bordered">
				<thead>
					<tr>
					<th scope="col">No</th>
					<th scope="col">Nama makanan</th>
					<th scope="col">karbohidrat (0.51)</th>
					<th scope="col">protein (0.33)</th>
					<th scope="col">lemak (0.15)</th>
					<th scope="col">nilai alternatif (0.15)</th>

					</tr>
				</thead>
				<tbody>

				<?php 
				$no = 1;
				foreach($matrik as $matrik1){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $matrik1->nama_makanan ?></td>
					<td><?php echo $matrik1->karbohidrat ?></td>
					<td><?php echo $matrik1->protein ?></td>
					<td><?php echo $matrik1->lemak ?></td>
					<td><?php echo $matrik1->nilai_alternatif ?></td>
					
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