
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Love Crusade | Chapel</title>

		<!-- Loading third party fonts -->
		<link href="{{ URL::asset('fonts/novecento-font/novecento-font.css')}}" rel="stylesheet">
		<link href="{{ URL::asset('fonts/font-awesome.min.css')}}" rel="stylesheet">

		<!-- Loading main css file -->
		<link href="{{ URL::asset('style.css')}}" rel="stylesheet">
		
		<!--[if lt IE 9]
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		[endif]-->

	</head>


	<body>
		<div class="site-content">
			<header class="site-header">
				<div class="container">
					<a href="#" class="branding">
						<img src="images/MYLOGO.png" height="80" width="80" alt="" class="logo">
						<h1 class="site-title">Love Crusade Chapel Kano</h1>
					</a>

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item"><a href="/">Homepage <small>Welcome</small></a></li>
							<li class="menu-item "><a href="sermons">Sermons<small>Listen to our Godly sermons</small></a></li>
							<li class="menu-item"><a href="events">Events <small>Events / Associations</small></a></li>
							<li class="menu-item"><a href="mission">Mission <small>View our mission</small></a></li>
							<li class="menu-item current-menu-item"><a href="#">GEN.SUPERINTENDENT<small>About the Gen.Superintendent</small></a></li>
							
						</ul>
					</div>


					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<div class="page-head" data-bg-image="images/page-head-1.jpg">
				<div class="container">
					<h2 class="page-title">The Gen. Supretendent</h2>
				</div>
			</div>
			<div class="col-md-6">
			<div class="hero">
				<div class="slides">
				@foreach ($img_cat as $img)
					@if($img->categories_id == 2)
					<li data-bg-image="..uploads/{{ $img->file }}">
						<div class="container">
						
							<div class="slide-content">
								<small class="slide-subtitle" style="text-shadow: 2px 2px #FF0000;">
								</small>
								<h2 class="slide-title" style="text-shadow: 2px 2px #FF0000;"></h2>
							</div>
						</div>
					</li>
				@endif
					@endforeach
				</div>
			</div>
			</div>
			<div class="container ">
  				<div class="panel panel-default">
    				<div class="panel-body">
    					<p style="text-shadow: 1px 1px #FF0000;"><br><br><br><br><br>
					Apostle I.O Eruemulor is an Apostolic Prophet anointed to break the power of Satan in the lives of people and move them by the power of the Holy spirit into their earthly and heavenly divine inheritance. This unique anointing on his life has made positive impact in the lives of so many. He is a destiny technocrat with strong drive to help people locate their places of fulfilment in life. He is the general superintendent of Love Crusade Chapel a.k.a (Consuming fire's camp). He is based in Kano from where he oversees other branches of the ministry. He is married to Pastor (Mrs) M.N Eruemulor who is also an anointed intercessor. They are blessed with three children: Davelyn Eruemulor, Emmanuel Eruemulor and David Eruemulor.
						</p>
    				
    				</div>
  				</div>
			</div>
				
				

		
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
									<li>Tuesday Bible study | Deliverance Service</a></li> 	
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
								<form action="/" method="POST" class="contact-form" value="csrf_token()">
									<div class="row">
										<div class="col-md-6"><input type="text" name="fname" placeholder="First name" required></div>
										<div class="col-md-6"><input type="text" name="lname" placeholder="Lastname " required></div>
										<div class="col-md-12"><input type="text" name="email" placeholder="Email..." required></div>
										<div class="col-md-12"><input type="text" name="subject" placeholder="Subject..." required></div>
									</div>
									
									<textarea name="message" placeholder="Your message..." required></textarea>
									<div class="text-right"><input type="submit" value="Send message"></div>
									
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<p class="colophon">Copyright &copy; 2016 www.lcc.org. All right reserved</p>
				</div><!-- .container -->
			</footer> <!-- .site-footer -->


		</a></div>

		</div>
		

		<<script src="{{ URL::asset('js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{ URL::asset('js/plugins.js')}}"></script>
		<script src="{{ URL::asset('js/app/app.js')}}"></script>
		
	</body>

</html>