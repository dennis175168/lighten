<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>LIGHTEN 交通</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		@include('layout.bar')
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header Wrapper -->
			<div id="top-bar" style="padding-top:3%">
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							@include('layout.header')

					</div>
				</div>
			</div
			>		
			<!-- Main Wrapper -->
				<div id="main-wrapper" style="margin-top:10%">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div id="content">
									<h2 style="border-width: 10px;">交通</h2>
									<hr>
									<!-- Content -->
									<?php
									for($i=0 ;$i<count($id) ;$i++)
									{	
									?>
										<article >
											<header class="major">
									
												<h3>
												{{$title[$i]}}
												</h3>
												<p>
												{{$content[$i]}}
												</p>
												<form action="detail" method="get">
													<input type="hidden" name="id" value="{{$id[$i]}}">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<input type="submit"  class="button alt icon fa-file-o" style="font-size:10%" value="Continue Reading...">
												</form>
												<span class="image featured"></span>
											</header>
										</article>
									<?php
									}
									?>	
								</div>
							</div>
						</div>
					</div>
					
				</div>

			<!-- Footer Wrapper -->
				@include('layout.footer')

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