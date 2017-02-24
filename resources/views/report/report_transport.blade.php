<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Lighten report 交通</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="rep_assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="rep_assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="rep_assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="rep_assets/css/ie8.css" /><![endif]-->
        <style>
            body {
    background-color: #cccccc;
}
        </style>
    </head>
	<body>
        @if(Auth::check())

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					@include('layout.report_header')

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>交通類檢舉表單</h2>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
                                    <form action="insert" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="type" value="transport">
                                         <section>
                                            <h3 class="major">聯絡人</h3>
                                            <input type="text" name="contact_person">
                                        </section><p>

                                        <section>
                                            <h3 class="major">連絡電話</h3>
                                            <input type="text" name="contact_number">
                                        </section><p>
                                        
                                        <section>
                                            <h3 class="major">檢舉標題</h3>
                                            <input type="text" name="title">
                                        </section><p>

										<section>
                                            <h3 class="major">檢舉地點</h3>
                                            <input type="text" name="locatione">
                                        </section><p>

                                        <section>
                                            <h3 class="major">檢舉事由</h3>
                                            <textarea  id="demo-message" rows="6" name="content"></textarea>
                                        </section><p>

										<section>
                                            <h3 class="major">檢舉圖片</h3>
                                           <input type="file" class="form-control" id="user_icon_file" name="report_image_file" placeholder="上傳圖片" value="">
                                        </section><p>
										
                                            <h4>服務條款</h4>
										<blockquote>服務條款</blockquote>
                                            <ul class="actions vertical small">
                                            <input type="submit" class="button special small fit">
                                            </ul>
                                    </form>
									
                                    
									

								</div>
							</div>

					</section>

				

			</div>
@else
@include('errors.503')
@endif
		<!-- Scripts -->
			<script src="rep_assets/js/skel.min.js"></script>
			<script src="rep_assets/js/jquery.min.js"></script>
			<script src="rep_assets/js/jquery.scrollex.min.js"></script>
			<script src="rep_assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="rep_assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="rep_assets/js/main.js"></script>

	</body>
</html>