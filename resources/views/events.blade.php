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
						<h1 class="site-title">True Church</h1>
					</a>

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item "><a href="/">Homepage <small>Welcome</small></a></li>
							<li class="menu-item"><a href="sermons">Sermons<small>Listen to our Godly sermons</small></a></li>
							<li class="menu-item current-menu-item"><a href="#">Events <small>Events / Associations</small></a></li>
							<li class="menu-item"><a href="mission">Mission <small>View our mission</small></a></li>
							<li class="menu-item"><a href="about_gen">GEN.SUPRETENDENT<small>About the Gen.Supretedent</small></a></li>
							<li class="menu-item"><a href="contacts">Contact <small>Contact us here</small></a></li>
						</ul>
					</div>

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<div class="page-head" data-bg-image="images/page-head-1.jpg">
				<div class="container">
					<h2 class="page-title">Events</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<h2 class="section-title">Events</h2>
								<ul class="event-list large">
									<li>
										<h3 class="event-title">covenant sons fellowship</h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i><?php 
												$third_tuesday = new DateTime('third Tuesday of this month');

													// if date has passed, get next month's third tuesday
													if ($third_tuesday < new DateTime()) {
    												$third_tuesday->modify('third tuesday of next month');
														}

													echo $third_tuesday->format('l F d, Y');
											 ?></span>
											<span><i class="fa fa-map-marker"></i> Church Premises</span>
										</span>
										<p>Join us for fellowship, prayer and devotion as we gather every third friday of the month..</p>
										<p>For more information/enquiry, please click the button bellow to send us message</p>
										<a href="#" class="button secondary">Ask a question</a>
									</li>
									<li>
										<h3 class="event-title">Covenant daughters fellowship</h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i>
												<?php 
												$first_wednesday = new DateTime('first Wednesday of this month');

													// if date has passed, get next month's first wednesday
													if ($first_wednesday < new DateTime()) {
    												$first_wednesday->modify('first wednesday of next month');
														}

													echo $first_wednesday->format('l F d, Y');
											 ?>

											</span>
											<span><i class="fa fa-map-marker"></i> Church Premises</span>
										</span>
										<p>God is our source of strength, we gather to delibrate way forward in the vineyard to strenghten and encourage members who want to serve the lord in the christian faith</p>
										<p>For more information/enquiry, please click the button bellow to send us message</p>
										<a href="#" class="button secondary">Ask a question</a>
									</li>
									<li>
										<h3 class="event-title">Youth Fellowship</h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i>Specific Saturday of the month</span>
											<span><i class="fa fa-map-marker"></i> Church Premises</span>
										</span>
										<p>The youth are the strength of the church. Our mission is to supplement the parents work of equipping the youth in christ through the teaching of the word, worship, discipline, fellowship and prayer. So that they may conduct their lives in a manner worthy of the gospel of christ</p>
										<p>For more information/enquiry, please click the button bellow to send us message</p>
										<a href="#" class="button secondary">Ask a question</a>
									</li>
									<li>
										<h3 class="event-title">Workers Meeting</h3>
										<span class="event-meta">
											<span><i class="fa fa-calendar"></i>
												<?php 
												$first_saturday = new DateTime('first Saturday of this month');

													// if date has passed, get next month's first wednesday
													if ($first_saturday < new DateTime()) {
    												$first_saturday->modify('first saturday of next month');
														}

													echo $first_saturday->format('l F d, Y');
											 ?>
											</span>
											<span><i class="fa fa-map-marker"></i>Church Premises</span>
										</span>
										<p>We labour for our God in the kingdom. These comprises of different groups like: Prayer group, Choir, Usher, Telecom Department, Tech Department, Security Department e.t.c</p>
										<p>For more information/enquiry, please click the button bellow to send us message</p>
										<a href="#" class="button secondary">Ask a question</a>
									</li>
									
								</ul>
							</div>
							<div class="sidebar col-md-3 col-md-offset-1">
								<div class="widget">
									<h3 class="widget-title">Associations</h3>
									<ul class="arrow">
										<li>Covenant Sons Fellowship</li>
										<li>Covenant Daughters Fellowship</li>
										<li>Youth Fellowship</li>
										<li>Workers Meeting</li>
									</ul>
								</div>

								<div class="widget">
									<h3 class="widget-title">Serve with others</h3>
									<p>Serving bring hope to those who need help both in our church and in the city and also moves us to be more generous with our time, talents and resource</p>
									
								</div>

								<div class="widget">
									<h3 class="widget-title">Where to Begin </h3>
									<p>Join us on our different services or look up on our facebook page or call/email us</p>
									<p>There is no better place to know other and be known and cared for than in LOVE CRUSADE CHAPEL....</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

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