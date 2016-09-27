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

		<!-- Loading main css file -->
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link href="{{ URL::asset('dist/sweetalert.css')}}" rel="stylesheet">
		
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
						<img src="images/MYLOGO.png" height="80" width="80" alt="" class="logo">
						<h1 class="site-title">Love Crusade Chapel Kano</h1>
					</a>

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item"><a href="/">Homepage <small>Welcome</small></a></li>
							<li class="menu-item current-menu-item"><a href="#">Sermons<small>Listen to our Godly sermons</small></a></li>
							<li class="menu-item"><a href="events">Events <small>Events / Associations</small></a></li>
							<li class="menu-item"><a href="mission">Mission <small>View our mission</small></a></li>
							<li class="menu-item"><a href="about_gen">GEN.SUPRETENDENT<small>About the Gen.Supretedent</small></a></li>
							<li class="menu-item"><a href="#cont">Contact <small>Contact us here</small></a></li>
						</ul>
					</div>


					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->

			<div class="page-head" data-bg-image="images/page-head-1.jpg">
				<div class="container">
					<h2 class="page-title">Sermons</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<h2 class="section-title">sermons</h2>
								@foreach($readVideo as $read_video)
								<ul class="seremon-list large">
								
									<li id="close_frame">
										
										<img video-id="{{$read_video -> id}}" onclick="showVideo(this)" class="modal_caller" src="..uploads/videos/{{ $read_video -> vid_file }}" width="100" height="100" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title">{{ $read_video -> title }}</h3>
											<div class="seremon-meta">
												<div class="pastor" style="font-size:15 !important;" ><i class="fa fa-user"></i>{{ $read_video -> preacher }}</div>
												
											</div>
											<p>{{ $read_video -> details }}</p>
										</div>
									</li>
								</ul>
								@endforeach
							</div>
							<div class="sidebar col-md-3 col-md-offset-1">

								<div class="widget">
									<h3 class="widget-title">SHORT LECTURE </h3>
									<p><strong>Hebrews 12:1-2 </strong>Therefore, since we are surrounded by so great a cloud of witnesses, let us also lay aside every weight, and sin which clings so closely, and let us run with endurance the race that is set before us, looking to Jesus, the founder and perfecter of our faith, who for the joy that was set before him endured the cross, despising the shame, and is seated at the right hand of the throne of God..</p>
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
									<li><i class="fa fa-facebook-square"></i>www.facebook.com@Love Crusade Church KANO</li>
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
					<div id="divd">
					</div>

					<p class="colophon">Copyright &copy; 2016 www.lcc.org. All right reserved</p>
				</div><!-- .container -->
			</footer> <!-- .site-footer -->
			</a></div>
		</div>
		
		<div id="img_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <iframe id="video-frame" video-id="{{$read_video -> id }}" src="" width="560" height="315" src="" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

  		<script src="js/jquery-2.1.1.js"></script>
  		<script src="js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="{{ URL::asset('dist/sweetalert.min.js')}}"></script>
		<script>
		$(document).ready(function(){
			var url = $("#video-frame").attr('src');

			/* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    		$("#img_modal").on('hide.bs.modal', function(){
        	$("#video-frame").attr('src', '');
   			 });

			$('#img_modal').on('hidden.bs.modal', function (e) {
			   $("#video-frame").attr('src', url);
			});

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


		function showVideo(btn){
            var url = $(btn).attr('video-id');
            url = "/sermons/"+url;
            $.ajax({
                url:url,
                dataType: "JSON",
                method: "GET",
                success: function(data){
                    if(data['status'].match(/success/i)){
                        //console.log(data['video']['title']);
                        console.log(data['link']);
                         $("#modal-title").html(data['title']);
                         $("#video-frame").attr('src', data['link']);
                        $("#img_modal").modal();
                    }

                }
            });
        }
			//$('#img_modal').modal();
		
		</script>
	</body>

</html>