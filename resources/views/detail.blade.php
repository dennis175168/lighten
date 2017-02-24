
<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>LIGHTEN 職場</title>
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
									<h2 style="border-width: 10px;">{{$title}}</h2>
									<h3>{{$location}}</h3>
                                    <p>{{$time}}</p>
									<hr>
									<!-- Content -->
										<article >
											<header class="major">
												<h3></h3>
                                                
												<p>{{$content}}</p>
												
												@if( $img!=null)
												<img src="user-upload-report/{{$img}}" alt="" />
												@endif
												<span class="image featured"></span>
											</header>
										</article>
										<p>{{$fixed_like_qua}}人喜歡|{{$fixed_dislike_qua}}人不喜歡|{{$comment_qua}}人留言</p>
										@if(Auth::check())
										<table width="100%">
												<?php
												//按讚顏色
													 $fixed_reports_id ;
       												 $user_id = Auth::user()->id;
													 $check = \DB::table('post_like')->where([['user_id', '=', $user_id],['fixed_reports_id', '=', $fixed_reports_id]])->first();
													 $check1 = \DB::table('post_dislike')->where([['user_id', '=', $user_id],['fixed_reports_id', '=', $fixed_reports_id]])->first();
													 if($check!=null)
													 {
														$color='';
													 }
													 else
													 {
														$color='#888888';
													 }
													 if($check1!=null)
													 {
														$color1='';
													 }
													 else
													 {
														$color1='#888888';
													 }
												?>
												<td width="50%" align="center">

													<form method="get" action="like"  >
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<input type="hidden" name="fixed_reports_id" value="{{$fixed_reports_id}}">
														<input class="button medium icon fa-arrow-circle-right" style="background-color:{{$color}}" align="center" type="submit" value="有靠杯到" onclick="like()" >
													</form>

												</td>
												<td width="50%" align="center">

													<form method="get" action="dislike"  >
														<input type="hidden" name="_token" value="{{ csrf_token() }}">
														<input type="hidden" name="fixed_reports_id" value="{{$fixed_reports_id}}">
														<input class="button medium icon fa-arrow-circle-right" style="background-color:{{$color1}}" align="center" type="submit" value="閉嘴!!正義哥" onclick="dislike()" >
													</form>

												</td>
										</table>
										@endif
									
									
									<?php
									for($i=0 ;$i<count($board_content) ;$i++)
									{	
									?>
										<hr>
										<p>{{$board_time[$i]}}</p>
										<h3>{{$board_content[$i]}}</h3>
										
									<?php
									}
									?>

									<hr>
									
									@if(Auth::check())
									<?php $user_id = Auth::user()->id; ?>
									<form method="post" action="bor_insert" align="left" >
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="user_id" value="{{$user_id}}">
										<input type="hidden" name="fixed_reports_id" value="{{$fixed_reports_id}}">
										<input type="text" name="content" >
										<input align="center" type="submit" value="送出" style="margin-top:5%">
									    </div>
									</form>
									@else
									<h3 align="center"><a class="button medium icon fa-arrow-circle-right" href="login">登入留言</a></h3>
									@endif

								</div>
							</div>
						</div>
					</div>
					
				</div>

			<!-- Footer Wrapper -->
				@include('layout.footer')

		<!-- Scripts -->
		@if(Auth::check())
			<script>
			function like() {
				<?php 
				$check1 = \DB::table('post_dislike')->where([['user_id', '=', $user_id],['fixed_reports_id', '=', $fixed_reports_id]])->first();
				if($check1==null)//若是沒按過dislike->可以按like
				{
					$responses='確認評價';
				}
				 else//若是按過dislike->請先取消dislike
				{
					$responses='請先取消負面評價';
				}
				
				?>
				alert("{{$responses}}");
			}
			function dislike() {
				<?php 
				$check1 = \DB::table('post_like')->where([['user_id', '=', $user_id],['fixed_reports_id', '=', $fixed_reports_id]])->first();
				if($check1==null)//若是沒按過dislike->可以按like
				{
					$responses1='確認評價';
				}
				 else//若是按過dislike->請先取消dislike
				{
					$responses1='請先取消正面評價';
				}
				
				?>
				alert("{{$responses1}}");
			}
			</script>
		@endif

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>