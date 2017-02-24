<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>

	<head>
		<title>檢舉達人</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
			.b1{
				background-color:	#5F9EA0;
				font-size: 10%;
				margin:10%
			}
		</style>
	</head>
	<body class="homepage">
	
	

	@if(Auth::check())	
	
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							@include('layout.header')

						<!-- Banner -->
							<div id="banner">
								<h2><strong><font size=35px>REPORT</font></strong>
									<br />選擇要檢舉/申訴的類別

								</h2>
								
								<table>
									<tr style="margin:5%">
										<th><a href="report_transport" ><button onclick="transport()" class="b1" >交通</button></a></th>
										<th><a href="report_work" ><button onclick="work()" class="b1">職場</button></a></th>
										<th><a href="report_school" ><button onclick="school()" class="b1">校園</button></a></th>
										<th><a href="report_animals" ><button onclick="animals()" class="b1">動物</button></a></th>
									</tr>
									<tr>
										<th><a href="report_environment" ><button onclick="environment()" class="b1" >環境</button></a></th>
										<th><a href="report_finance" ><button onclick="finance()" class="b1" >財務</button></a></th>
										<th><a href="report_net" ><button onclick="net()" class="b1" >網路</button></a></th>
										<th><a href="report_speech" ><button onclick="speech()" class="b1" >言論</button></a></th>
									</tr>
								</table>
							</div>
						

					</div>
				</div></div>

			

			<!-- Footer Wrapper -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="3u 12u(mobile)">

								<!-- Links -->
									

							</div>
							
							<div class="6u 12u(mobile)">

								<!-- About -->
								
								<!-- Contact -->
									<section>
										<h2>Get in touch</h2>
										<div>
											<div class="row">
												<div class="6u 12u(mobile)">
													<dl class="contact">
														<dt>Twitter</dt>
														<dd><a href="#">@untitled-corp</a></dd>
														<dt>Facebook</dt>
														<dd><a href="#">facebook.com/untitled</a></dd>
														<dt>WWW</dt>
														<dd><a href="#">cowpai.tw</a></dd>
														<dt>Email</dt>
														<dd><a href="#">dennis175168@yahoo.com.tw</a></dd>
													</dl>
												</div>
												<div class="6u 12u(mobile)">
													<dl class="contact">
														<dt>Address</dt>
														<dd>
															1234 Fictional Rd<br />
															Nashville, TN 00000-0000<br />
															USA
														</dd>
														<dt>Phone</dt>
														<dd>0987555444</dd>
													</dl>
												</div>
											</div>
										</div>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="12u">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li> <a href="http://html5up.net">LIGHTEN</a></li>
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

			<script>
			function transport() {
				alert("凡舉各種交通包括停車 違規 超速");
			}
			function work() {
				alert("工作場合內各種違法不公");
			}
			function school() {
				alert("校園霸凌或其他作弊");
			}
			function animals() {
				alert("虐待或是棄養");
			}
			function environment() {
				alert("污染 垃圾 廣告亂貼");
			}
			function finance() {
				alert("金錢糾紛");
			}
			function net() {
				alert("網購 退貨或其他問題");
			}
			function speech() {
				alert("誹謗髒話");
			}
			</script>		
			
@else
@include('errors.503')
@endif
	</body>
</html>