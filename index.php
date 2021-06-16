<!doctype html>
<?php
include 'data.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="asset/style.css">
    <title>Data Coronavirus Indonesia</title>
  </head>
  <body>		
	<div class="header">
		<h1>Realtime Data Coronavirus Indonesia</h1>
	</div>
	
	<div class="data">
		<div class="container">
			<div class="row justify-content-md-center">
			  <div class="col-sm-4">
				<div class="card text-center card-provinsi">
				  <div class="card-body">
					<h5 class="card-title">Provinsi</h5>
					<p class="card-text">
						<?php echo $namaprovinsi;?>
					</p>
				  </div>
				</div>
			  </div>
			</div>
			<div class="row justify-content-md-center">
			  <div class="col-sm-4">
				<div class="card text-center card-positif">
				  <img src="asset/img/sick.svg" class="card-img-top mx-auto d-block" alt="positif">
				  <div class="card-body">
					<h5 class="card-title">Positif</h5>
					<p class="card-text">
						<?php echo $positif." Orang";?>
					</p>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-4">
				<div class="card text-center card-sembuh">
				  <img src="asset/img/smile.svg" class="card-img-top mx-auto d-block" alt="sembuh">
				  <div class="card-body">
					<h5 class="card-title">Sembuh</h5>
					<p class="card-text">
						<?php echo $sembuh." Orang";?>
					</p>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-4">
				<div class="card text-center card-meninggal">
				  <img src="asset/img/sad.svg" class="card-img-top mx-auto d-block" alt="sad">
				  <div class="card-body">
					<h5 class="card-title">Meninggal</h5>
					<p class="card-text">
						<?php echo $meninggal." Orang";?>
					</p>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</div>
	<div class="searchbar">
		<div class="container">
			<form method="get">
				<div class="row">
					<div class="col-md-4 mx-auto">
						<h3 style="text-align:center;">Cari Data Wilayahmu</h3>
						<div class="input-group search-form">
							<input class="form-control border rounded-pill" type="text" placeholder="Provinsi.." id="search" name="search"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col text-center">
					  <button class="primary-button" name="submit" type="submit" id="btnsearch">
						<span class="round"> CARI </span>
					  </button>
					</div>
				</div>
			</form>

		</div>
	</div>
	<div class="datawilayah">
		<div class="container">
			<div class="table-responsive-xl">
				<table class="table table-bordered">
				  <thead>
					<tr>
					  <h5>Nama Provinsi</h5>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td class="text-center td-prov">Aceh</td>
					  <td class="text-center td-prov">Sumatera Utara</td>
					  <td class="text-center td-prov">Sumatera Barat</td>
					  <td class="text-center td-prov">Riau</td>
					  <td class="text-center td-prov">Jambi</td>
					</tr>
					<tr>
					  <td class="text-center td-prov">Sumatera Selatan</td>
					  <td class="text-center td-prov">Bengkulu</td>
					  <td class="text-center td-prov">Bangka Belitung</td>
					  <td class="text-center td-prov">Lampung</td>
					  <td class="text-center td-prov">Kepulauan Riau</td>
					</tr>
					<tr>
					  <td class="text-center td-prov">DKI Jakarta</td>
					  <td class="text-center td-prov">Jawa Barat</td>
					  <td class="text-center td-prov">Jawa Timur</td>
					  <td class="text-center td-prov">Banten</td>
					  <td class="text-center td-prov">Bali</td>
					</tr>				
					<tr>
					  <td class="text-center td-prov">Nusa Tenggara Barat</td>
					  <td class="text-center td-prov">Nusa Tenggara Timur</td>
					  <td class="text-center td-prov">Kalimantan Barat</td>
					  <td class="text-center td-prov">Kalimantan Tengah</td>
					  <td class="text-center td-prov">Kalimantan Selatan</td>
					</tr>				
					<tr>
					  <td class="text-center td-prov">Kalimantan Timur</td>
					  <td class="text-center td-prov">Kalimantan Utara</td>
					  <td class="text-center td-prov">Sulawesi Utara</td>
					  <td class="text-center td-prov">Sulawesi Tengah</td>
					  <td class="text-center td-prov">Sulawesi Selatan</td>
					</tr>				
					<tr>
					  <td class="text-center td-prov">Sulawesi Tenggara</td>
					  <td class="text-center td-prov">Gorontalo</td>
					  <td class="text-center td-prov">Sulawesi Barat</td>
					  <td class="text-center td-prov">Maluku</td>
					  <td class="text-center td-prov">Maluku Utara</td>
					</tr>
					<tr>
					  <td class="text-center td-prov">Papua</td>
					  <td class="text-center td-prov">Papua Barat</td>
					  <td class="text-center td-prov">Daerah Istimewa Yogyakarta</td>
					</tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="tips">
		<div class="container tips-container">
			<div class="row align-items-center justify-content-around">
				<div class="col-md-9 col-lg-5">
					<img src="asset/img/undraw_wash_hands_nwl2.svg" class="img-fluid" alt="wash hand">
				</div>
				<div class="col-md-9 col-lg-5 p-0">
					<h2>Patuhi Protokol 3M</h2><p><br>
					<ul class="list-unstyled">
					  <li>
						<h4>Mencuci Tangan</h4>
						<p>Gunakan handsanitizer untuk mencuci tangan anda</p>
					  </li>
					  <li>
						<h4>Memakai Masker</h4>
						<p>Sediakan masker cadangan agar tidak perlu khawatir</p>
					  </li>					  
					  <li>
						<h4>Menghindari Kerumunan</h4>
						<p>Sebisa mungkin hindari tempat ramai untuk mengurangi resiko</p>
					  </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
	  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.10);">
		<a class="text-reset fw-bold" href="https://rexyfahrezi.github.io/">Rexy</a> Fahrezi © 2021
	  </div>
	</footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
