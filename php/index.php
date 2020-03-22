<?php
// カウント数取得関数
function get_count($file) {
	$filename = 'data/'.$file.'.dat'; //dat更新
	$fp = @fopen($filename, 'r');
	if ($fp) {
		$vote = fgets($fp, 9182);
	} else {
		$vote = 0;
	}
	return $vote;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Vote</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<!-- Google Fonts Roboto -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap Reboot CSS -->
	<link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="../css/mdb.min.css">
	<!-- Original CSS -->
	<link rel="stylesheet" href="../css/vote.css">
</head>
<body>

	<!-- main navigation -->
	<header>

		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

			<div class="container">
				<!-- Navbar brand -->
				<a class="navbar-brand" href="../index.php">Journey</a>

				<!-- Collapse button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
				aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="basicExampleNav">

				<!-- Links -->
				<ul class="navbar-nav mr-auto smooth-scroll">
					<li class="nav-item">
						<a class="nav-link" href="#">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#Vote">Vote</a>
					</li>
				</ul>

				<!-- Social Icon  -->
				<ul class="navbar-nav nav-flex-icons">
					<!-- FaceBook -->
					<li class="nav-item">
						<a class="nav-link" href="https://www.facebook.com/profile.php?id=100008809846982"><i class="fab fa-facebook-f"></i></a>
					</li>
					<!-- Twitter -->
					<li class="nav-item">
						<a class="nav-link" href="https://twitter.com/R_Ism11"><i class="fab fa-twitter"></i></a>
					</li>
					<!-- Instagram -->
					<li class="nav-item">
						<a class="nav-link" href="https://www.instagram.com/r.ism_11/?hl=ja"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--Mask-->
	<div id="intro" class="view">
		<div class="mask rgba-stylish-strong">
			<div class="container-fluid d-flex align-items-center justify-content-center h-100">
				<div class="row d-flex justify-content-center text-center">
					<!--Grid column-->
					<div class="col-md-12 mb-4 align-items-center fadeIn">
						<h3 class="display-2 font-weight-bold white-text mb-4 pt-md-5 py-5"><img src="../images/Vote.png" class="img-fluid" alt="Journey"></h3>
						</div>
					</div>
				</div>
			</div>
		</div>

		<main>

			<!-- Main conteiner -->
			<div class="container py-4" id="Vote">
				<!-- Gurid Row -->

				<!-- Section description -->
				<p class="lead grey-text text-center w-responsive mx-auto"></p>

				<!--Grid row-->
				<div class="row py-4">

					<!--Grid column-->
					<div class="col-lg-4 col-md-12 mb-4">

						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay">
								<img src="../images/Wien.jpg" class="card-img-top" alt="Austria">
								<a href="../html/Country/Austria.php">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!--Card content-->
							<div class="card-body">
								<!--Title-->
								<h4 class="card-title">Austria</h4>
								<!--Text-->
								<p class="card-text"><b>音楽の都</b><br>アルプス山脈と大自然に恵まれ、歴史的建築物や街並みが美しい</p>
								<p class="ico_heart vote_01"><?= get_count('vote_01') ?></p> <!-- vote_01.datへ書き込み -->
								<p class="btn_vote z-depth-1" id="vote_01"></p>
							</div>
						</div>
					</div>

					<!--Grid column-->
					<div class="col-lg-4 col-md-6 mb-4">

						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay">
								<img src="../images/London.jpg" class="card-img-top" alt="UnitedKingdom">
								<a href="../html/Country/UK.php">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!--Card content-->
							<div class="card-body">
								<!--Title-->
								<h4 class="card-title">UnitedKingdom</h4>
								<!--Text-->
								<p class="card-text"><b>4つの国からなる連合国</b><br>それぞれの街が独自の特徴を持ち、ユニークな文化と豊かな自然が楽しめる</p>
								<p class="ico_heart vote_02"><?= get_count('vote_02') ?></p> <!-- vote_02.datへ書き込み -->
								<p class="btn_vote z-depth-1" id="vote_02"></p>
							</div>
						</div>
					</div>

					<!--Grid column-->
					<div class="col-lg-4 col-md-6 mb-4">

						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay">
								<img src="../images/Paris.jpg" class="card-img-top" alt="France">
								<a href="../html/Country/France.php">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!--Card content-->
							<div class="card-body">
								<!--Title-->
								<h4 class="card-title">France</h4>
								<!--Text-->
								<p class="card-text"><b>ロマンチックな国</b><br>芸術、伝統、歴史を重んじ、伝統とモダンさが共存する街が見られる</p>
								<p class="ico_heart vote_03"><?= get_count('vote_03') ?></p> <!-- vote_03.datへ書き込み -->
								<p class="btn_vote z-depth-1" id="vote_03"></p>
							</div>
						</div>
					</div>
				</div>
				<!--Grid row-->
				<div class="row">

					<!--Grid column-->
					<div class="col-lg-4 col-md-12 mb-4">

						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay">
								<img src="../images/Germany.jpg" class="card-img-top" alt="Germany">
								<a href="../html/Country/Germany.php">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!--Card content-->
							<div class="card-body">
								<!--Title-->
								<h4 class="card-title">Germany</h4>
								<!--Text-->
								<p class="card-text"><b>メッセでドイツ出張</b><br>歴史が古く、学問・制度など各分野で世界をリードし、EUの中心的存在</p>
								<p class="ico_heart vote_04"><?= get_count('vote_04') ?></p> <!-- vote_04.datへ書き込み -->
								<p class="btn_vote z-depth-1" id="vote_04"></p>
							</div>
						</div>
					</div>

					<!--Grid column-->
					<div class="col-lg-4 col-md-6 mb-4">

						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay">
								<img src="../images/Sweden.jpg" class="card-img-top" alt="Sweden">
								<a href="../html/Country/Sweden.php">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!--Card content-->
							<div class="card-body">
								<!--Title-->
								<h4 class="card-title">Sweden</h4>
								<!--Text-->
								<p class="card-text"><b>ノーベル賞の誕生</b><br>14もの島々からなる水の都は、街並みがお洒落で訪れるものを惹きつける</p>
								<p class="ico_heart vote_05"><?= get_count('vote_05') ?></p> <!-- vote_05.datへ書き込み -->
								<p class="btn_vote z-depth-1" id="vote_05"></p>
							</div>
						</div>
					</div>

					<!--Grid column-->
					<div class="col-lg-4 col-md-6 mb-4">

						<!--Card-->
						<div class="card">

							<!--Card image-->
							<div class="view overlay">
								<img src="../images/Finland.jpg" class="card-img-top" alt="Finland">
								<a href="../html/Country/Finland.php">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>

							<!--Card content-->
							<div class="card-body">
								<!--Title-->
								<h4 class="card-title">Finland</h4>
								<!--Text-->
								<p class="card-text"><b>ありのままの大自然</b><br>広大な森、北極圏の山々、何千もの青い湖のある自然豊かな国</p>
								<p class="ico_heart vote_06"><?= get_count('vote_06') ?></p> <!-- vote_06.datへ書き込み -->
								<p class="btn_vote z-depth-1" id="vote_06"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!-- Footer -->
		<footer class="page-footer font-small unique-color">
			<div class="container">
				<!--Grid row-->
				<div class="row py-4 d-flex align-items-center">

					<!--Grid column-->
					<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
						<h6 class="mb-0 white-text">Get connected with us on social networks</h6>
					</div>

					<!--Grid column-->
					<div class="col-md-6 col-lg-7 text-center text-md-right">
						<!--Facebook-->
						<a class="fb-ic ml-0" href="https://www.facebook.com/profile.php?id=100008809846982">
							<i class="fab fa-facebook white-text mr-4"> </i>
						</a>
						<!--Twitter-->
						<a class="tw-ic" href="https://twitter.com/R_Ism11">
							<i class="fab fa-twitter white-text mr-4"> </i>
						</a>
						<!--Instagram-->
						<a class="ins-ic" href="https://www.instagram.com/r.ism_11/?hl=ja">
							<i class="fab fa-instagram white-text mr-lg-4"> </i>
						</a>
					</div>
				</div>
			</div>

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3">© 2020 Copyright Journey All Rights Reserved.</div>

		</footer>

		<!-- jQuery -->
		<script src="../js/vendor/jquery-3.4.1.min.js"></script>
		<!-- jQuery UI -->
		<script src="../js/vendor/jquery-ui-1.10.3.custom.min.js"></script>
		<!-- modernizr JS -->
		<script src="../js/vendor/modernizr.custom.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script src="../js/vendor/popper.min.js"></script>
		<!-- Bootstrap core JS -->
		<script src="../js/vendor/bootstrap.bundle.min.js"></script>
		<!-- MDB core JS -->
		<script src="../js/vendor/mdb.min.js"></script>
		<!-- Original JS -->
		<script src="../js/custom.js"></script>
		<script src="../js/count.js"></script>
	</body>
</html>
