<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>LIGHTEN</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
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
								<h2><font color="">
									<br />LIGHTEN  點亮台灣
									<br /> 一個整和性的檢舉平台
								</h2></font>

								@if(Auth::check())
								@else
								<a href="signup" class="button big icon fa-check-circle">註冊</a>
								@endif
							</div>

					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
					<div class="wrapper style1">
						<div class="inner">

							<!-- Feature 1 -->
								<section class="container box feature1">
									<div class="row">
										<div class="12u">
											<header class="first major">
												<h2>THE BEST Report TODAY</h2>
												<p>今日最多回復的檢舉</p>
											</header>
										</div>
									</div>
									<div class="row">
									<div class="12u">
												<h3>{{$title}}</h3>
										</div>
										@if( $img!=null)
										<div class="4u 12u(mobile)">
											<section>
												<a href="#" class="image featured"><img src="user-upload-report/{{$img}}" alt="" /></a>
												</header>
											</section>
										</div>
										@endif
										<div class="4u 12u(mobile)">
											<section>
												<header >
													<h3></h3>
													<p>{{$content}}</p>
												</header>
											</section>
										</div>
										
										<div class="4u 12u(mobile)">
												
										<form action="detail" method="get">
										<input type="hidden" name="fixed_reports_id" value="{{$fixed_reports_id}}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="submit"  class="button alt icon fa-file-o" style="font-size:10%" value="Continue Reading...">
									</form>
										</div>
									</div>
									
									<!--
										<form action="detail" method="get">
										<input type="hidden" name="fixed_reports_id" value="{{$fixed_reports_id}}">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="submit"  class="button alt icon fa-file-o" style="font-size:10%" value="Continue Reading...">
										</form>
									-->
								</section>

						</div>
					</div>
					
					<div class="wrapper style3">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="8u 12u(mobile)">

										<!-- lighten團 -->
											<section class="box article-list" style="padding-left:10%">
												<h2 class="">lighters</h2>
												@if(Auth::check())
												<!-- 團員1 -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date"></span>
																<h3>名字</h3>
																<p>專長/興趣:</p>
																<p>最近的困擾:</p>
																<p>想嘗試的事:</p>
																<h4><a href="#">.....點擊查看</a></h4>

															</header>
														</div>
													</article>

												<!-- 團員2 -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date"></span>
																<h3>名字</h3>
																<p>專長/興趣:</p>
																<p>最近的困擾:</p>
																<p>想嘗試的事:</p>
																<h4><a href="#">.....點擊查看</a></h4>

															</header>
														</div>
													</article>

												<!-- 團員3 -->
													<article class="box excerpt">
														<a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
														<div>
															<header>
																<span class="date"></span>
																<h3>名字</h3>
																<p>專長/興趣:</p>
																<p>最近的困擾:</p>
																<p>想嘗試的事:</p>
																<h4><a href="#">.....點擊查看</a></h4>
															</header>
														</div>
													</article>
												@else
												此功能需要先登入喔
												
												@endif

											</section>
									</div>
									<div class="4u 12u(mobile)">

										<!-- 本月檢舉王 -->
											<section class="box spotlight" style="padding-right:10%">
												<h2 class="">本月檢舉王</h2>
												<article>
													<a href="#" class="image featured"><img src="images/pic07.jpg" alt=""></a>
													<header>
														<h3><a href="#">敘述</a></h3>
														
													</header>
													<p>內容</p>
													<footer>
														<a href="#" class="button alt icon fa-file-o" style="font-size:10%">Continue Reading...</a>
													</footer>
												</article>
											</section>

									</div>
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