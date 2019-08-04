<!DOCTYPE html>
<html>
<head>
	<title>Program CPI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/dist/css/bootstrap.css'); ?>">
</head>
<body>
	<div class="container-fluid">
		<div class="row bg-primary"style="border: 2px solid grey; padding-bottom: 10px ">
			<center><h1>SPK Pemilihan Makanan Penderita Maag</h1></center>
		</div>
		<div class="row"style="border: 2px solid grey; padding-bottom: 10px ">
			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
				<ul>
					<li><a href="<?php echo base_url('page/beranda'); ?>">Beranda</a></li>
					<li><a href="<?php echo base_url('page/datamakanan'); ?>">Data Makanan</a></li>
					<li><a href="<?php echo base_url('page/kriteria') ?>">Kriteria</a></li>
					<li><a href="<?php echo base_url('page/matriktransformasi'); ?>">Matrik Transformasi</a></li>
					<li><a href="<?php echo base_url('page/hasilrekomendasi'); ?>">Hasil Rekomendasi</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10"style="border: 2px solid grey; padding-bottom: 10px ">
				<h4>HALAMAN DATA KRITERIA</h4>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<tr>
							<td>No</td>
							<td>Nama Kriteria</td>
							<td>Bobot Kriteria</td>
							<td colspan="2">Aksi</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td width="50px"><a href="<?php echo base_url('page/editkriteria'); ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
							<td width="50px"><a href="<?php echo base_url('page/hapuskriteria'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>						
						</tr>
					</table>
				</div>
				
			</div>
		</div>
		<div class="row"style="border: 2px solid grey; padding-bottom: 10px ">
			<h4>Footer</h4>
		</div>
	</div>
</body>
</html>