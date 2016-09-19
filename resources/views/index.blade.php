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
						<img src="images/logg.jpg" height="60" width="60" alt="" class="logo">
						<h1 class="site-title">Love Crusade Chapel Kano</h1>
					</a>
					@if(session('status'))
					<div class="alert alert-success">
						<h2>MESSAGE SENT</h2>
                        {{ session('status') }} 
                		@endif	
					</div>

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="/">Homepage <small>Welcome</small></a></li>
							<li class="menu-item"><a href="sermons">Sermons<small>Listen to our Godly sermons</small></a></li>
							<li class="menu-item"><a href="events">Events <small>Events / Associations</small></a></li>
							<li class="menu-item"><a href="mission">Mission <small>View our mission</small></a></li>
							<li class="menu-item"><a href="about_gen">GEN.SUPRETENDENT<small>About the Gen.Supretedent</small></a></li>
							<li class="menu-item"><a href="#cont">Contact <small>Contact us here</small></a></li>
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
							<div class="col-md-3 col-sm-8">
								@foreach($img_cat as $img1)
									@if($img1 -> categories_id == 4)
								<div class="news">
									<image class="news-image" src="..uploads/{{ $img1->file }}"></image>
									<h3 class="news-title">{{ $img1 -> description}}</h3>
									
								</div>
								@endif
								@endforeach
							</div>
							<div class="col-md-3 col-sm-8">
								@foreach($img_cat as $img1)
									@if($img1 -> categories_id == 5)
								<div class="news">
									<img class="news-image" src="..uploads/{{ $img1->file }}" style="max-height: 250px"/>
									<h3 class="news-title">{{ $img1 -> description}}</h3>
									
								</div>
								@endif
								@endforeach
							</div>
							<div class="col-md-3 col-sm-8">
								<div class="slides">
								<?php $count =0; ?>
								@foreach($img_cat as $img1)
									<?php if($count == 1) break; ?>
									@if($img1 -> categories_id == 2)	
								<div class="news">
									<img class="news-image" src="..uploads/{{ $img1->file }}"  style="max-height: 180px"/>
									<h3 class="news-title">{{ $img1 -> description}}</h3>
									
								</div>
								<?php $count++ ?>
								@endif
								@endforeach
								</div>
							</div>
							<div class="col-md-3 col-sm-8">
								@foreach($img_cat as $img1)
									@if($img1 -> categories_id == 6)
								<div class="news">
									<image class="news-image" src="..uploads/{{ $img1->file }}"></image>
									<h3 class="news-title">{{ $img1 -> description}}</h3>
									
								</div>
								@endif
								@endforeach
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->
				<div class="container">
  				<h1><marquee>WELCOME</marquee></h1>
  				<div class="panel panel-default">
    			<div class="panel-body">
    				<p>Love Crusade Chapel Headquarter church located in Kano State, Nigeria, West Africa. It is a church with the commission of deliverance, prosperity and preparing people for heaven, the encounter for each of these came at different time during the preparation period for the ministry. We have what we call comission declaration such as "God of my covenant appear for me" this is borne out of the threefold covenant which renew every first sunday - evening of each month. We also have another declaration which is "there is victory always in Jesus". The last one which we recite as benediction "I receive grace and determination from Jesus, for the kind of holiness of life that will take me to heaven at the end of my Journey on earth in the name of Jesus</p>
    			</div>
  				</div>
				</div>
				
				
				

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h2 class="section-title">Events / Associations </h2>
								<ul class="event-list">
									<li>
										<a href="#">
											<h3 class="event-title">Covenant Sons Fellowship</h3><p>
											
												<span>( Every Friday of the month )</span>
										</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Covenant Daughters Fellowship</h3><p>
											
												<span>( First Wednesday of the month )</span>
												

										</p>	
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Youth Fellowship</h3><p>
											
												<span>( Every month ) </span>
											</p>

											
										</a>
									</li>
									<li>
										<a href="#">
											<h3 class="event-title">Workers Meeting</h3><p>
												<span>( Every Saturday of the month )</span>
										</a>	</p>
									</li>
								</ul>

								<div class="text-left">
									<a href="events" class="button">See all events</a>
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

								
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->
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

					<p class="colophon">Copyright &copy; 2016 www.llc.org. All right reserved</p>
				</div><!-- .container -->
			</footer> <!-- .site-footer -->
			</a></div>

		</div>
		

		<script src="{{ URL::asset('js/jquery-1.11.1.min.js')}}"></script>
		<script src="{{ URL::asset('js/plugins.js')}}"></script>
		<script src="{{ URL::asset('js/app/app.js')}}"></script>
		
	</body>

</html>