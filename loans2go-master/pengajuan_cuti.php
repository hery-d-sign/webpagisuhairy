<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>LOANS2GO | Loans HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="loans HTML Template">
	<meta name="keywords" content="loans, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
	<!-- <header class="header-section">
		<a href="index.html" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="about-us.html">About Us</a></li>
				<li><a href="#">Pages</a>
					<ul class="sub-menu">
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="loans.html">Loans</a></li>
						<li><a href="elements.html">elements</a></li>
					</ul>
				</li>
				<li><a href="news.html" class="active">News</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
			<div class="header-right">
				<a href="#" class="hr-btn"><i class="flaticon-029-telephone-1"></i>Call us now! </a>
				<div class="hr-btn hr-btn-2">+45 332 65767 42</div>
			</div>
		</nav>
	</header> -->
	<!-- Header Section end -->

	<!-- Page top Section end -->
	<!-- <section class="page-top-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="container">
			<h2>News</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Home</a>
				<span class="sb-item active">News</span>
			</nav>
		</div>
	</section> -->
	<!-- Page top Section end -->

	<!-- Blog pengecekan cuti end -->
	<section class="blog-section spad">
	<form class="container" action="proses/proses_ecuti.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="exampleInputEmail1">Nama Pegawai</label>
			<input type="text" name="nama_pegawai" class="form-control col-sm-6" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Jabatan</label>
			<input type="text" name="jabatan" class="form-control col-sm-6" id="exampleInputPassword1">
		</div>

		<div class="form-group">
			<label for="exampleInputPassword1">Unit Kerja</label>
			<input type="text" name="unit_kerja" class="form-control col-sm-6" id="exampleInputPassword1">
		</div>
		
		<div class="form-group">
			<label for="exampleInputPassword1">Tanggal Mulai Cuti</label>
			<input type="date" name="tanggal_mulai_cuti" class="form-control col-sm-6" id="exampleInputPassword1">
		</div>
		
		<div class="form-group">
			<label for="exampleInputPassword1">Tanggal Akhir Cuti</label>
			<input type="date" name="tanggal_akhir_cuti" class="form-control col-sm-6" id="exampleInputPassword1">
		</div>

		<div class="form-group">
			<label>Jenis Cuti</label>
				<select name="jenis_cuti" class="form-control col-sm-6">
					<option name="cuti_tahunan" value="cuti_tahunan">Cuti Tahunan</option>
					<option name="cuti_besar" value="cuti_besar">Cuti Besar</option>
					<option name="cuti_sakit" value="cuti_sakit">Cuti Sakit</option>
					<option name="cuti_bersalin" value="cuti_bersalin">Cuti Bersalin</option>
					<option name="cuti_alasan_penting" value="cuti_alasan_penting">Cuti Dengan Alasan</option>
				</select>
		</div>

		<div class="form-group">
			<div class="mb-6">
				<label for="validationTextarea">Alasan Mengajukan Cuti</label>
				<textarea name="alasan_mengajukan_cuti" class="form-control col-sm-6" id="validationTextarea" placeholder="" required></textarea>
				<div class="invalid-feedback">
			</div>
			<br>

		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
	</section>
	<!-- Blog pengecekan cuti end -->

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<!-- <a href="index.html" class="footer-logo">
				<img src="img/logo.png" alt="">
			</a> -->
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<!-- <h2>What we do</h2>
						<ul>
							<li><a href="#">Loans</a></li>
							<li><a href="#">Car loans</a></li>
							<li><a href="#">Debt consolidation loans</a></li>
							<li><a href="#">Home improvement loans</a></li>
							<li><a href="#"> Wedding loans</a></li>
							<li><a href="#">Innovative Finance ISA</a></li>
						</ul> -->
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<!-- <h2>About us</h2>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Our story</a></li>
							<li><a href="#">Meet the board</a></li>
							<li><a href="#">Meet the leadership team</a></li>
							<li><a href="#">Awards</a></li>
							<li><a href="#">Careers</a></li>
						</ul> -->
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<!-- <h2>Legal</h2>
						<ul>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Loans2go principles</a></li>
							<li><a href="#">Website terms</a></li>
							<li><a href="#">Cookie policy</a></li>
							<li><a href="#">Conflicts policy</a></li>
						</ul> -->
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<!-- <h2>Site Info</h2>
						<ul>
							<li><a href="#">Support</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Contact us</a></li>
						</ul> -->
					</div>
				</div>
			</div>
			<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem por incididunt ut labore et dolore mag na aliqua.  Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl.</p> -->
			<!-- <div class="copyright">Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</div> -->
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	

	</body>
</html>
