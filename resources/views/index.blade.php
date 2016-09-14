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
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		<div class="site-content">
			<header class="site-header">
				<div class="container">
					<a href="#" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<h1 class="site-title">Love Crusade Chapel Kano</h1>
					</a>

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Homepage <small>Welcome</small></a></li>
							<li class="menu-item"><a href="#">Sermons<small>Listen to our Godly sermons</small></a></li>
							<li class="menu-item"><a href="events.blade.php">Events <small>Events / Associations</small></a></li>
							<li class="menu-item"><a href="families.blade.php">Mission <small>View our mission</small></a></li>
							<li class="menu-item"><a href="#">GEN.SUPRETENDENT<small>About the Gen.Supretedent</small></a></li>
							<li class="menu-item"><a href="#">Contact <small>Contact us here</small></a></li>
						</ul>
					</div>

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<div class="hero">
				<div class="slides">
				@foreach ($img_cat as $img)
					@if($img->categories_id == 1)
					<li data-bg-image="..uploads/{{ $img->file }}">
						<div class="container">
							<div class="slide-content">
								<small class="slide-subtitle" style="text-shadow: 2px 2px #FF0000;"></small>
								<h2 class="slide-title" style="text-shadow: 2px 2px #FF0000;"></h2>
							</div>
						</div>
					</li>
				@endif
					@endforeach
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">GALLERY</h2>

						<div class="row">
							<div class="col-md-3 col-sm-6">
								@foreach($img_cat as $img1)
									@if($img1 -> categories_id == 4)
								<div class="news">
									<image class="news-image" src="..uploads/{{ $img1->file }}" height="70px"></image>
									<h3 class="news-title">{{ $img1 -> description}}</h3>
									<small class="date"><i class="fa fa-calendar"></i>{{ $img1 -> created_at}}</small>

								</div>
								@endif
								@endforeach
							</div>
							<div class="col-md-3 col-sm-6">
								@foreach($img_cat as $img1)
									@if($img1 -> categories_id == 5)
								<div class="news">
									<image class="news-image" src="..uploads/{{ $img1->file }}" height="78px"></image>
									<h3 class="news-title">{{ $img1 -> description}}</h3>
									<small class="date"><i class="fa fa-calendar"></i>{{ $img1 -> created_at}}</small>

								</div>
								@endif
								@endforeach
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="slides">
								<!--var count=0;-->
								@foreach($img_cat as $img1)
									<!--count++;-->
									
									@if($img1 -> categories_id == 4)
									
								<div class="news">
									
									<image class="news-image" src="..uploads/{{ $img1->file }}" height="78px"></image>
									<h3 class="news-title">{{ $img1 -> description}}</h3>
									<small class="date"><i class="fa fa-calendar"></i>{{ $img1 -> created_at}}</small>
								
								</div>
								
								@endif
								@endforeach
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<image class="news-image" src="images/news-thumb-4.jpg"></image>
									<h3 class="news-title"><a href="#">FETCH IMAGE DETAILS</a></h3>
									<small class="date"><i class="fa fa-calendar"></i>FETCH TIMESTAMP</small>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2 class="section-title">Events / Associations </h2>
								<ul class="event-list">
									<li>
										<a href="#">
											<h3 class="event-title">Covenant Sons Fellowship</h3><p>
											
												<span><i class="fa fa-map-marker"></i>( Every Friday of the month )</span>
										</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Covenant Daughters Fellowship</h3><p>
											
												<span><i class="fa fa-calendar"></i>( First Wednesday of the month )</span>
												

										</p>	
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Youth Fellowship</h3><p>
											
												<span><i class="fa fa-calendar"></i>( Every month ) </span>
											</p>

											
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Workers Meeting</h3><p>
												<span><i class="fa fa-calendar"></i>( Every Saturday of the month )</span>
										</a>	</p>
									</li>
								</ul>

								<div class="text-center">
									<a href="#" class="button">See all events</a>
								</div>
							</div>
							<div class="col-md-6">
								<h2 class="section-title">BOOKS</h2>
								<ul class="seremon-list">
								
								@foreach($img_cat as $img2)
										@if($img2->categories_id==3)
										
										
									<li>
										
										<img src="..uploads/{{ $img2 -> file }}" width="60px" height="60px" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title">{{ $img2->title}} </h3>
											<div class="seremon-meta">
												
												<div class="date"><i class="fa fa-calendar"></i> {{ $img2 -> description}}</div>
												
											</div>
										</div>
										
									</li>
									@endif
										@endforeach
									
								</ul>

								<div class="text-center">
									<a href="#" class="button">SEE ALL BOOKS</a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="widget">
								<h3 class="widget-title">Our Branches</h3>
								<ul class="bullet">
									<li><i class="fa fa-map-marker"></i> Lagos State - 7 Iduware Street, Off Okunola Road, Lagos State</li>
									<li><i class="fa fa-map-marker"></i> Abuja - Gwagwalada </li>
									<li><i class="fa fa-phone"></i> Plateau State - Jos</li>
									<li><i class="fa fa-phone"></i> Edo State - Benin</li>
									<li><i class="fa fa-envelope"></i> Kano State - Badawa</li>
								</ul>
									<br/>
									<h3 class="widget-title">HEADQUARTER</h3>
								<ul class="address ">
									<li><i class="fa fa-map-marker"></i> 58, Ijebu Road Sabon Gari Fagge LGA, Kano State Nigeria</li>
									<li><i class="fa fa-phone"></i> (+234) 8099833035</li>
									<li><i class="fa fa-phone"></i> (+234) 8036790116</li>
									<li><i class="fa fa-envelope"></i> lcckanohq@gmail.com</li>
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
								<form action="#" class="contact-form">
									<div class="row">
										<div class="col-md-6"><input type="text" placeholder="First name"></div>
										<div class="col-md-6"><input type="text" placeholder="Lastname "></div>
										<div class="col-md-12"><input type="text" placeholder="Email..."></div>
									</div>
									
									<textarea name="" placeholder="Your message..."></textarea>
									<div class="text-right"><input type="submit" value="Send message"></div>
									
								</form>
							</div>
						</div>
					</div> <!-- .row -->

					<p class="colophon">Copyright &copy; 2016 www.llc.org. All right reserved</p>
				</div><!-- .container -->
			</footer> <!-- .site-footer -->

		</div>
		

		<script src="{{ URL::asset('js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{ URL::asset('js/plugins.js')}}"></script>
		<script src="{{ URL::asset('js/app/app.js')}}"></script>
		
	</body>

</html>