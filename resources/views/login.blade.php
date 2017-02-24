<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Lighten login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
			.sign {
				background-color: 	#F5F5F5;
				padding-left: 20%;
				padding-right: 20%;
				padding:10%;
				border-radius: 25px;
				
			}
		</style>
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							@include('layout.header')

						<!-- Banner -->
							<div id="banner">
								<div class="sign">
									@if ($errors->has('fail'))
										<div class="fail">{{ $errors->first('fail') }}</div>
									@endif

									<header class="major">
										<h3 style="color:black">登入</h3>
										
									</header>
									
									<form method="post" action="login" align="left" >
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<font>信箱</font>
										<input type="text" name="email" >
										<br>
										<font>密碼</font>
										<input type="password" name="password">
										<div align="center">
										<input align="center" type="submit" value="Login" style="margin-top:5%">
									    </div>
									</form>
									
								</div>
							</div>

					</div>
				</div>

			<!-- Main Wrapper -->
				

			
						<div class="row">
							<div class="12u">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

		</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			

	</body>
</html>