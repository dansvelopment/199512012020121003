<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Google Fonts -->
		<link href="https://fonts.gstatic.com" rel="preconnect" />
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
			rel="stylesheet" />

		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
		<title>Document</title>
	</head>
	<body>

	

		<header id="header" class="header fixed-top d-flex align-items-center">
			<div class="d-flex align-items-center justify-content-between">
				<a href="" class="logo d-flex align-items-center">
					
					<span class="d-none d-lg-block">Timrekrutmen</span>
				</a>
				<i class="bi bi-list toggle-sidebar-btn"></i>
			</div>

			
		</header>

		<!-- sidebar -->

	
		<aside id="sidebar" class="sidebar">
			<ul class="sidebar-nav" id="sidebar-nav">
				<li class="nav-item">
					<a href="index.php" class="nav-link">
						<i class="bi bi-grid"></i>
						<span>Data Rekrutment</span>
					</a>
				</li>

				<li class="nav-item">
					<a href="dataatribute.php" class="nav-link collapsed"><i class="bi bi-file-earmark"></i><span>Data Atribute </span></a>
				</li>
			</ul>
		</aside>
		
		<main id="main" class="main">

<div class="pagetitle">
	<h1>Data</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item">Tables</li>
			<li class="breadcrumb-item active">Data</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-12">

			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Datatables</h5>

					<!-- Table with stripped rows -->
					<table class="table datatable">
						<thead>
							<tr>
								<th scope="col">id</th>
								<th scope="col">timestamp</th>
								<th scope="col">nama</th>
								<th scope="col">nip</th>
								<th scope="col">satuan_kerja</th>
								<th scope="col">posisi_yang_dipilih</th>
								<th scope="col">bahasa_pemrograman_yang_dikuasai</th>
								<th scope="col">database_yang_dikuasai</th>
								<th scope="col">tools_yang_dikuasai</th>
								<th scope="col">pernah_membuat_mobile_apps</th>
							
							</tr>
						</thead>
						<tbody>
						<?php


$url_atribute = "http://103.226.55.159/json/data_attribut.json";

$url_rekrutmen ="http://103.226.55.159/json/data_rekrutmen.json";
	
	$client = curl_init($url_rekrutmen);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
  
  $result = json_decode($response,true);  
  foreach($result as $res){
    foreach($res as $val){


      echo "<tr>";
      echo "<td>".$val['id']."</td>";
      echo "<td>".$val['timestamp']."</td>";
      echo "<td>".$val['nama']."</td>";
      echo "<td>".$val['nip']."</td>";
      echo "<td>".$val['satuan_kerja']."</td>";
      echo "<td>".$val['posisi_yang_dipilih']."</td>";
      echo "<td>".$val['bahasa_pemrograman_yang_dikuasai']."</td>";
      echo "<td>".$val['database_yang_dikuasai']."</td>";
      echo "<td>".$val['tools_yang_dikuasai']."</td>";
      echo "<td>".$val['pernah_membuat_mobile_apps']."</td>";

			echo "</tr>";

    }


  }
  
?>
						</tbody>
					</table>
					<!-- End Table with stripped rows -->

				</div>
			</div>

		</div>
	</div>
</section>

</main><!-- End #main -->

		<script
			src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
			integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
			crossorigin="anonymous"></script>
		<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
			integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>
