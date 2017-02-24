
<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Lighten 註冊</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header Wrapper -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							@include('layout.header')

					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style2">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="8u 12u(mobile)">
										<div id="content">

											<!-- signup form -->

												<article>
													<header class="major">
														<h2>註冊</h2>
														<p>立即成為會員!</p>
													</header>                                                    
                                                    {{$temp_id}}{{$temp_name}}{{$temp_password}}{{$temp_mail}}
                                                    <form method="post" action="user_insert"  >
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="name" value="{{$temp_name}}">
                                                    <input type="hidden" name="password" value="{{$temp_password}}">
                                                    <input type="hidden" name="mail" value="{{$temp_mail}}">
                                                    <input class="button medium icon fa-arrow-circle-right"  align="center" type="submit" value="完成註冊"  >
                                                    </form>
												</article>

										</div>
									</div>
									<div class="4u 12u(mobile)">
										<div id="sidebar">

											<!-- 說明 -->

												<section>
													<header class="major">
														<h2>服務條款</h2>
													</header>
													<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus.
													Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
													Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi
													consequat etiam.</p>
													
												</section>

												<section>
													<header class="major">
														<h2>Subheading</h2>
													</header>
													
													
												</section>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>

			<!-- Footer Wrapper -->
				 

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