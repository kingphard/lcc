<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Love Crusade | Chapel</title>

		<!-- Loading third party fonts -->
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="{{ URL::asset('dist/sweetalert.css')}}" rel="stylesheet">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]-->
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<!--[endif]-->

	</head>


	<body>
		<div class="site-content">
			<header class="site-header">
				<div class="container">
					<a href="#" class="branding">
						<img src="images/MYLOGO.png"  width="80" height="80" alt="" class="logo">
						<h1 class="site-title">Love Crusade Chapel Kano</h1>
					</a>

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item"><a href="/">Homepage <small>Welcome</small></a></li>
							<li class="menu-item"><a href="#">Books <small>View Our Books</small></a></li>							
						</ul>
					</div>


					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<div class="page-head" data-bg-image="images/page-head-1.jpg">
				<div class="container">
					<h2 class="page-title">BOOKS</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<h4 class="section-title">Click to Download Books</h4>
								<?php $count=0; ?>
								@foreach( $img_cate as $book_img)
								<?php if($count==4) break;?>
								@if($book_img->categories_id==3)
								<ul class="seremon-list large">
									<li id="close_frame">
										<a href="#" onclick="swal('Sorry Download Not Yet available..')"> <img src="..uploads/{{ $book_img -> file }}" class="modal_caller" src="" width="100" height="100" alt=""></a>
										<div class="seremon-detail">
											<h3><strong class="seremon-title">{{$book_img -> title }}</strong></h3>
											<p><h4><strong>{{$book_img -> description }}</strong></h4></p>
										</div>
									</li>
								</ul>
								<?php $count++; ?>
								@endif
								@endforeach
								
							</div>
							<div class="sidebar col-md-3 col-md-offset-1">

								<div class="widget">
									<h3 class="widget-title">DO YOU KNOW? </h3>
									<p><strong>Timothy 3:16 </strong>All scripture [is] given by inspiration of God, and [is] profitable for doctrine, for reproof, for correction, for instruction in righteousness..</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

		<div id="cont"><a name="cont">
			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Our Branches</h3>
								<ul class="bullet">
									<li> Lagos State - 7 Iduware Street, Off Okunola Road, Lagos State</li>
									<li> Abuja - Gwagwalada </li>
									<li> Plateau State - Jos</li>
									<li> Edo State - Benin</li>
									<li> Kano State - Badawa</li>
								</ul>
									<br/>
									<h3 class="widget-title">HEADQUARTER</h3>
								<ul class="address ">
									<li><i class="fa fa-map-marker"></i> 58, Ijebu Road Sabon Gari Fagge LGA, Kano State Nigeria</li>
									<li><i class="fa fa-phone"></i> (+234) 8099833035</li>
									<li><i class="fa fa-phone"></i> (+234) 8036790116</li>
									<li><i class="fa fa-google-plus"></i> lcckanohq@gmail.com</li>
									<li><i class="fa fa-facebook-square"></i> www.facebook.com@Love Crusade Church KANO</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Weekly Schedule</h3>
								<ul class="bullet">
									<li>Sunday Glorious Worship Service</li>
								</ul>
								<ul class="address">
									<li>1st Service : 7 a.m - 9 a.m</li>
									<li>2nd Service : 9 a.m - 11 a.m</li>
								</ul>
								<ul class="bullet">
									<li>Tuesday Bible study | Deliverance Service</li> 	
								</ul>
								<ul class="address">
									<li>Service : 12:00 pm noon</li>
								</ul>
								<ul class="bullet">
									<li>Thursday Holy Ghost Miracle Anointing Service</li>
								</ul>
								<ul class="address">
									<li>Service : 5:00 pm </li>
								</ul>
								<ul class="bullet">
									<li>Covenant Renewal Service</li>
								</ul>
								<ul class="address">
									<li>Every First Sunday of the Month </li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Contact form</h3>
								<form action="/" method="POST" class="contact-form" value="csrf_token()" id="feedbackForm">
									<div class="row">
										<div class="col-md-6"><input type="text" name="fname" placeholder="First name" required></div>
										<div class="col-md-6"><input type="text" name="lname" placeholder="Lastname " required></div>
										<div class="col-md-12"><input type="text" name="email" placeholder="Email..." required></div>
										<div class="col-md-12"><input type="text" name="subject" placeholder="Subject..." required></div>
									</div>
									
									<textarea name="message" placeholder="Your message..." required></textarea>
									<div class="text-right"><input type="button" id="sendBtn" value="Send message"></div>
									
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<p class="colophon">Copyright &copy; 2016 www.lcc.org. All right reserved</p>
				</div><!-- .container -->
			</footer> <!-- .site-footer -->
			</a></div>
			
		</div>

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="{{ URL::asset('dist/sweetalert.min.js')}}"></script>
		<script>
		$(document).ready(function(){
			$("#sendBtn").click(function(){
				
				
			$.ajax({
  				type: "POST",
				  url: "/",
				  data: $('#feedbackForm').serialize(),
				  success: function(data){
				  	alert(data);
				  	$('#feedbackForm').trigger('reset');
				  }
				  
				});

			});

		});
		
		</script>
	</body>

</html>