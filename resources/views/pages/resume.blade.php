<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Nico Dwi Kuswanto Resume</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="{{url('resume/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="{{url('resume/css/style.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{url('resume/css/font-awesome.css')}}" rel="stylesheet" type="text/css"> 
{{-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> --}}
{{-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> --}}
<link href="{{url('resume/css/animate.css')}}" rel="stylesheet" type="text/css">
 
</head>
<body>

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-md-6">
		   
            <div class="top_left_cont intro zoomIn wow animated"> 
              <h2>I’m Nico<br> <strong>Backend Developer</strong></h2>
              <p>
				Hello, I m Nico. <b>Junior Software Developer</b> based on Malang,
				East Java, Indonesia. I m interested in <b>Website App
				Development</b> , especially Backend Development. Having strong
				passionate in <b>API, Database Management, and Cloud Server.</b></p>
                <div class="underline"></div>             
              <ul class="social_links">
				<li class="instagram animated bounceIn wow delay-02s animated" style="visibility: visible; animation-name: bounceIn;"><a target="_blank" href="https://www.instagram.com/nicodwi_k/"><i class="fa fa-instagram"></i></a></li>
				<li class="github animated bounceIn wow delay-03s animated" style="visibility: visible; animation-name: bounceIn;"><a target="_blank" href="https://github.com/nicodwik"><i class="fa fa-github"></i></a></li>
				<li class="linkedin animated bounceIn wow delay-04s animated" style="visibility: visible; animation-name: bounceIn;"><a target="_blank" href="https://www.linkedin.com/in/nico-dwi-kuswanto/"><i class="fa fa-linkedin"></i></a></li>
			  </ul> 
			  </div>
          </div> 
		  <div class="col-md-6">
		   <img alt="" src="{{url('resume/img/profile-pic.jpg')}}">
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

<!--Header_section-->
<header id="header_wrapper"> 
    <div class="header_box">
    <!--  <div class="logo"><a href="#"><img src="img/logo.png" alt="logo"></a></div>-->
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="#education" class="scroll-link">Education & Bootcamp</a></li>
			  <li><a href="#service" class="scroll-link">Skills</a></li>
			  <li><a href="#experience" class="scroll-link">Experience</a></li>
			</ul>
      </div>
	 </nav>
    </div> 
</header>
<!--Header_section--> 


<section id="education" style="margin-top: 100px"><!--Aboutus-->
  <div class="container">
    <h2>Education & Bootcamp</h2>
    <div class="inner_section"> 
	  	<div class="row">
			<div class="col-lg-12 about-us">
				<h3>Education</h3>
				<br>
				<ul class="about-us-list">
					<li class="points"><b>Faculty of Administration Science, Brawijaya University</b> <small>(Aug 2015 - Jun 2020)</small></li>
				</ul><!-- /.about-us-list -->
				<br>
				<br>
				<h3>Bootcamp</h3>
				<br>
				<ul class="about-us-list">
					<li class="points"><b>Alterra Academy, Backend Developer Role</b> <small>(Sept 2021)</small></li>
				</ul><!-- /.about-us-list -->
			</div><!-- /.col-lg-12 -->
		</div>
    </div>
  </div> 
</section>
<!--Aboutus--> 


<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Skills</h2>
	<h6>Here are some of my skills</h6>
    <div class="service_wrapper">
      <div class="row">
		@foreach ($skills as $skill)
		  <div class="col-md-{{$loop->iteration > 4 ? '4' : '3'}}">
			<div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa {{$skill['icon']}}"></i></span> </div>
			  <div class="service_block">
				<h3 class="animated fadeInUp wow">{{$skill['title']}}</h3>
				<p class="animated fadeInDown wow">{{$skill['subtitle']}}</p>
			  </div>
			</div>
		@endforeach
      </div> 
    </div>
  </div>
</section>
<!--Service-->

<section id="experience" class="timeline">
	<div class="inner_wrapper container">
		 <h2>Experience</h2>
		<h6>Here are some of my work experiences</h6>
		<div class="qa-message-list" id="wallmessages">
			@foreach ($experiences as $experience)
				<div class="message-item" id="m{{$loop->iteration}}">
					<div class="message-inner">
						<div class="message-head clearfix"> 
							<div class="user-detail">
								<h5 class="handle">{{$experience['title']}} <b>({{$experience['company']}})</b></h5>
								<div class="post-meta">
									<div class="asker-meta">
										<span class="qa-message-what"></span>
										<span class="qa-message-when">
											<span class="qa-message-when-data">{{$experience['date']}}</span>
										</span> 
									</div>
								</div>
							</div>
						</div>
						<div class="qa-message-content">
							{{$experience['desc']}}
						</div>
				</div></div>
			@endforeach
			</div>
	</div>
</section>


<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
  
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2018. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank">Bootstrap Templates</a> By WebThemez</span> </div>
  </div>
</footer>

<script type="text/javascript" src="{{url('resume/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{url('resume/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('resume/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{url('resume/js/jquery.nav.js')}}"></script> 
<script type="text/javascript" src="{{url('resume/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('resume/js/jquery.isotope.js')}}"></script>
<script src="{{url('resume/js/fancybox/jquery.fancybox.pack.js')}}" type="text/javascript"></script> 
<script type="text/javascript" src="{{url('resume/js/wow.js')}}"></script> 
 <script src="contact/jqBootstrapValidation.js')}}"></script>
 <script src="contact/contact_me.js')}}"></script>
<script type="text/javascript" src="{{url('resume/js/custom.js')}}"></script>

</body>
</html>