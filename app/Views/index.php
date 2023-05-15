<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>my fortofolio</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="icon" sizes="16x16" href="assets/img/favicon.ico">
    <link rel="manifest" href="assets/img/manifest.json">
    <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Font Awesome core CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- Hero Section, Background Image change in css -->
    <div id="top" class="hero background-overlay">
    
        <!-- Name & Description -->
        <div class="hero-content">
            <h1>I am Dandi Padilah</h1>
            <p class="hero-job"><span>I'M A DESIGNER AND A PROGRAMMER</span></p>
            <p class="hero-job-desc">I really like the design and I want to work as that </p> 
        </div>
        <!-- /.hero-content -->

        <div class="hero-arrow page-scroll home-arrow-down">
            <a class="" href="#intro"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        </div>
        <!-- /.hero-arrow -->

    </div><!-- /.hero -->
    <!-- End Hero -->

    <!-- Header -->
    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation" data-spy="affix">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- Name -->
                    <div class="page-scroll site-logo">
                        <a href="#top">Dandi</a>
                    </div>

                </div><!-- /.navbar-header -->

                <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">

                    <!-- Navigation -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll"><a href="#top">Home</a></li>
                        <li class="page-scroll"><a href="#intro">Intro</a></li>
                        <li class="page-scroll"><a href="#services">skill</a></li>
                        <li class="page-scroll"><a href="#team">Friend</a></li>
                        <li class="page-scroll"><a href="#works">my fortofolio</a></li>
                        <li class="page-scroll"><a href="#contact">Contact</a></li>
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->
    <!-- End Header -->

    <!-- Main content -->
    <main id="main" class="site-main">

        <!-- Hello section -->
		<section class="site-section section-hello" id="intro">
			<div class="container">
				<h2>HELLO &amp; WELCOME</h2>

                <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/dandi1.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Dandi Padilah</span></p>
                        <p><span class="title-s">Profile: </span> <span>Mahasiswa</span></p>
                        <p><span class="title-s">Email: </span> <span>dandipadilah2@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>0838-7037-6731</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="experience" id="experience">
                        <h1>PENDIDIKAN</h1>
                    <div class="content-inner">
                        <div class="row align-items-center">
                            <?php foreach ($tb_edu as $row): ?>
                                <div class="col-md-6">
                                <div class="edu-col">
                                    <span><?=$row['edu_in']?> <i>to</i> <?=$row['edu_out']?></span>
                                    <h3><?=$row['edu_name']?></h3>
                                </div>
                                </div>
                            <?php endforeach; ?>


                        </div>
                    </div>
                </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
				<p class="section-subtitle"><span>TO MY PERSONAL DATA</span></p>
				<div class="row">
					<div class="col-sm-4">
						<div class="main-service text-right">
							<div class="rectangle">
								<i class="fa fa-calendar" aria-hidden="true"></i>
							</div><!-- /.rectangle -->
							<h3>in terms of discipline</h3>
							<p>I am the one who if you do something you have to be right in time.</p>
						</div><!-- /.main-service -->
                        <div class="main-service text-right">
                            <div class="rectangle">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                            </div>
                            <h3>COMMUNICATION </h3>
                            <p>In communication I am a person who likes to talk a lot and does not like if people talk to me.</p>
                        </div><!-- /.main-service -->
					</div>
					<div class="col-sm-4">
						<div class="big-rectangle">
							<img src="assets/img/john-logo.png" alt="">
						</div><!-- /.big-rectangle -->
					</div>
					<div class="col-sm-4">
                        <div class="main-service text-left">
                            <div class="rectangle">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </div>
                            <h3>my hobby</h3>
                            <p>My hobby is to find new things and really like playing games sometimes say also like photo photos. </p>
                        </div><!-- /.main-service -->
						<div class="main-service text-left">
							<div class="rectangle">
								<i class="fa fa-list" aria-hidden="true"></i>
							</div><!-- /.rectangle -->
							<h3>desire</h3>
							<p>I want to be a useful person in society and want to be known by many people.</p>
						</div><!-- /.main-service -->
					</div>
				</div>
			</div>
		</section><!-- /.section-hello -->
        <!-- End Hello section -->

        <!-- Quote section -->
		<section class="section-background section-quote background-overlay text-center">
			<div class="container">
				<p>My goal is to be <span>happy.</span></p>
			</div>
		</section><!-- /.section-quote -->
        <!-- End Quote section -->


        <!-- Services section -->
        <section class="site-section section-services" id="services">

            <div class="container-fluid">
                <h2>skill</h2>
                <p class="section-subtitle"><span></span></p>
            </div>

            <div class="container">

                <div class="carousel slide" id="services-carousel">

                    <div class="item-controls text-center">
                        <a href="#services-carousel" class="left btn carousel-control" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a href="#services-carousel" class="right btn carousel-control" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div><!-- /.item-controls -->

                    <div class="carousel-indicators nav-tabs text-center">
                        <a data-target="#services-carousel" href="#" data-slide-to="0" class="active">
                            <div class="col-xs-4 col-sm-fifth">
                                <div class="service">
                                    <div class="rectangle">
                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                    </div>
                                    <p class="hidden-xs">Web design</p>
                                </div>
                            </div>
                        </a><!-- /.item -->
                        <a data-target="#services-carousel" href="#" data-slide-to="1">
                            <div class="col-xs-4 col-sm-fifth">
                                <div class="service">
                                    <div class="rectangle">
                                        <i class="fa fa-code" aria-hidden="true"></i>
                                    </div>
                                    <p class="hidden-xs">Web development</p>
                                </div>
                            </div>
                        </a><!-- /.item -->
                        <a data-target="#services-carousel" href="#" data-slide-to="2">
                            <div class="col-xs-4 col-sm-fifth">
                                <div class="service">
                                    <div class="rectangle">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                    </div>
                                    <p class="hidden-xs">Mobile Development</p>
                                </div>
                            </div>
                        </a><!-- /.item -->
                        <a data-target="#services-carousel" href="#" data-slide-to="3">
                            <div class="col-xs-4 col-sm-fifth">
                                <div class="service">
                                    <div class="rectangle">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                    <p class="hidden-xs">SEO optimization</p>
                                </div>
                            </div>
                        </a><!-- /.item -->
                        <a data-target="#services-carousel" href="#" data-slide-to="4">
                            <div class="col-xs-4 col-sm-fifth">
                                <div class="service">
                                    <div class="rectangle">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <p class="hidden-xs">Social Media</p>
                                </div>
                            </div>
                        </a><!-- /.item -->
                    </div><!-- /.carousel-indicators -->
                        
                           
                    <div class="carousel-inner">
                        <!-- Item 1 -->   
                        <div id="item1" class="item tab-pane active">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="service-info">
                                        <h3 class="service-title">Web Design</h3>
                                        <p>Decorations don’t drive home messages. Content does. Reducing text-based content to a visual design element (the shape of the text) can result in bloated and unrealistic client expectations once real data replaces the dummy content. We allow our design decisions to be dictated by the on-page content and messaging, and often our designers use the actual content to inspire interesting elements that might not have been conceived without it</p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="assets/img/web-design.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div><!-- /.item -->
                        <!-- Item 2 -->   
                        <div id="item2" class="item tab-pane">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="service-info">
                                        <h3 class="service-title">Web Development</h3>
                                        <p>Once we have come up with a unique design and have finalized the textures and graphics to be added, the next step is to make it all come together. And that is what we aim to achieve at our web development agency India. Only a professionally designed website can justify the uniqueness of your idea and this is a fact clearly understood by our team. </p>

                                        <p>While a good design can impress the users, it is the codes and development process that ensures that your target users will find the browsing experience equally amazing as your design. </p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="assets/img/web-development.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div><!-- /.item -->
                        <!-- Item 3 -->   
                        <div id="item3" class="item tab-pane">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="service-info">
                                        <h3 class="service-title">Mobile Development</h3>
                                        <p>With an increasing importance being given to smart phones, and mobile apps, it has become immensely important to include app development as part of web design services. Our team is known to provide excellent and extraordinary apps that are unique in every way. All the apps developed by our team are based on providing interesting features combined with enhanced functionality. With a mobile app in place, you can increase the reach of your brand and broaden its horizons too. You can have an easy to use professional app created that provides ease of functionality and an amazing appeal.</p>                                     
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="assets/img/mobile-development.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div><!-- /.item -->
                        <!-- Item 4 -->   
                        <div id="item4" class="item tab-pane">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="service-info">
                                        <h3 class="service-title">SEO optimization</h3>
                                        <p>Search engine optimization (SEO) is the process of improving the visibility of a web site in search engines. Consumer puts a lot of trust in search engines to find what they need. Google receives 34,000 searches per second. Those searches involve finding products, reviewing brands, and looking up business locations.</p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="assets/img/seo-optimization.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div><!-- /.item -->
                        <!-- Item 5 -->   
                        <div id="item5" class="item tab-pane">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="service-info">
                                        <h3 class="service-title">Social Media</h3>
                                        <p>Social Media, has become an essential tool of marketing an online business. It gives you a platform to interact and inform people about yourself and your brand. The concept of social media basically refers to the task of promoting websites or business through social media platforms..</p>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <img src="assets/img/social-media.jpg" class="img-responsive" alt="">
                                </div>
                            </div>
                        </div><!-- /.item -->
                    </div><!-- /.carousel-inner -->
                </div><!-- /.carousel -->
            </div>
        </section><!-- /.section-services -->
        <!-- End Services section -->


        <!-- Team section -->
        <section class="site-section section-team" id="team">
            <div class="container">
                <h2>MY FRIEND</h2>
                <p class="section-subtitle"><span>HERE ARE SOME OF MY FRIENDS</span></p>
                
                <div class="team">
                    <div class="row">   
                        <!-- Team Member --> 
                        <div class="col-md-3 col-xs-6">
                            <div class="team-member">
                                <div class="flipper">
                                    <div class="team-member-front">
                                        <div class="team-member-thumb">
                                            <img src="assets/img/employee-1.jpg" class="img-res" alt="">
                                        </div>  <!-- /.team-member-thumb -->
                                        <p class="team-member-front-name">Encep Rohmanudin</p>
                                    </div><!-- /.team-member-front -->
                                    <div class="team-member-back">
                                        <div class="team-member-info">
                                            <h3 class="team-member-back-name">Encep Rohmanudin</h3>
                                            <p class="team-member-back-position">fhotografer</p>
                                            <p class="team-member-back-info">he is someone talented in any field especially in photos he is the right person to be a photographer. </p>
                                            <div class="social-icons small">
                                                <a href="https://www.facebook.com/profile.php?id=100076473196053" class="rectangle"><i class="fa fa-facebook"></i></a>
                                                <a href="https://www.instagram.com/encep.rohmanudin/" class="rectangle">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div><!-- /.team-member-back-info -->
                                    </div><!-- /.team-member-back -->  
                                </div>         
                            </div><!-- /.team-member --> 

                        </div>

                        <!-- Team Member 2 -->
                                    </div><!-- /.team-member-back -->  
                                </div>         
                            </div><!-- /.team-member -->       
                        </div>
                    </div>
                </div><!-- /.team -->   
            </div>
        </section><!-- /.section-team -->
        <!-- End Team section -->

        <!-- Portfolio/Works section --> 
        <section class="site-section section-works" id="works">
            <div class="container">
                <h2>MY FORTOFOLIO</h2>
                <p class="section-subtitle"><span>THESE ARE SOME OF MY PHOTOS</span></p>

                <div class="portfolio">
                    <ul class="portfolio-sorting list-inline">
                        <li><a href="#" class=" active" data-group="all">all</a></li>
                        <li><a href="#" class="" data-group="webdesign">ME</a></li>
                        <li><a href="#" class="" data-group="webdev">WITH MY FRIEND</a></li>
                        <li><a href="#" class="" data-group="mobileapps">AT MY SCHCOOL</a></li>
                    </ul><!-- /.portfolio-sorting  -->

                    <div id="grid">
                        
                        <!-- Portfolio item --> 
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="assets/img/portfolio-1.jpg" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>ME</h3>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="assets/img/portfolio-2.jpg" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem2">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>WITH MY FRIEND</h3>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["mobileapps"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="assets/img/portfolio-4.jpg" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem3">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>AT MY SCHCOOL</h3>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="assets/img/portfolio-3.jpg" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem4">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>ME</h3>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="assets/img/portfolio-5.jpg" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem5">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>WITH MY FRIEND</h3>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["mobileapps"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="assets/img/portfolio-6.jpg" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem6">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>AT MY UNIVERSITY</h3>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="assets/img/portfolio-7.jpg" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem7">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>WITH MY FRIEND</h3>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                        <!-- Portfolio item -->
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="assets/img/portfolio-8.jpg" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem8">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>ME</h3>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->

                    </div><!-- /#grid -->
                </div>
            </div>
        </section><!-- /.section-works -->
        <!-- End Works section --> 

        <!-- Me section --> 
        <section class="section-background section-me background-overlay text-center">
            <div class="container page-scroll">
                <h2>Do you want to contact me?</h2>
                <p>please send me a message by pressing the button below</p>
                <a href="#contact" class="btn">GET IN TOUCH</a>
            </div>
        </section><!-- /.section-me -->
        <!-- End Me section --> 

        <!-- Clients section --> 
        <section class="section-clients">
            <div class="container">
                <div class="text-center section-diff-title">     
                    <h2>I Want Work In</h2>
                    <p></p>
                </div> 

                <div class="clients-carousel">
                    <!-- Client --> 
                    <a href="https://id.wikipedia.org/wiki/Google" class="client">
                        <img src="assets/img/client-1.png" class="img-responsive" alt="">
                    </a><!-- /.client -->                    
                    <!-- Client -->
                    <a href="https://map-bms.wikipedia.org/wiki/Microsoft_Corporation#:~:text=%20Microsoft%20Corporation%20%28%20NASDAQ%3A%20MSFT%2C%20didirikna%201975,karyawan%20nang%20pirang-pirang%20negara%2C%20nganti%20Mei%202004%20%29." class="client">
                        <img src="assets/img/client-2.png" class="img-responsive" alt="">
                    </a><!-- /.client -->                    
                    <!-- Client -->
                    <a href="https://id.wikipedia.org/wiki/Intel" class="client">
                        <img src="assets/img/client-3.png" class="img-responsive" alt="">
                    </a><!-- /.client -->                    
                    <!-- Client -->
                    <a href="https://id.wikipedia.org/wiki/Samsung" class="client">
                        <img src="assets/img/client-4.png" class="img-responsive" alt="">
                    </a><!-- /.client -->                    
                    <!-- Client -->
                    <a href="https://id.wikipedia.org/wiki/Apple_Inc." class="client">
                        <img src="assets/img/client-5.png" class="img-responsive" alt="">
                    </a><!-- /.client -->                    
                    <!-- Client -->
                    <a href="#" class="client">
                        <img src="assets/img/client-3.png" class="img-responsive" alt="">
                    </a><!-- /.client -->
                </div><!-- /.clients-carousel -->
            </div>
        </section><!-- /.section-clients -->
        <!-- End Clients section --> 

        <!-- Twitter section --> 
        <section class="section-background section-twitter background-overlay text-center">
            <div class="container">
                <div class="rectangle">
                    <i class="fa fa-instagram"></i>
                </div>
                <p>Latest from Twtter</p>
                <p>So here’s how you can integrate sign up and sign in for your web and iOS apps, with AWS Cognito.</p>
                <a href="https://www.instagram.com/dandipadilah2/" class="btn btn-inverted">follow me</a>
            </div>
        </section>
        <!-- /.section-twitter-->
        <!-- End Twitter section --> 

        <!-- Contacts section --> 
        <section class="site-section section-contact" id="contact">
            <div class="container">
                <h2>CONTACT ME</h2>
                <p class="section-subtitle"><span>Here i am</span></p>
                <div class="row">
                    <form>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Name" required>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="email" placeholder="Email" required>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Subject" required>
                        </div>
                        <div class="col-sm-12">
                            <textarea class="form-control" placeholder="Your Message"  required></textarea>
                        </div>

                        <div class="col-sm-12">
                            <button class="btn btn-inverted">Send Message</button>
                        </div>  
                    </form>
                </div>
            </div>
        </section><!-- /.section-contact-->
        <!-- End Contacts section --> 
        
        <!-- Social Networks section --> 
        <section class="section-networks blue-bg">
            <div class="container">
                <a href="https://www.facebook.com/dandifaslab.faslab" class="rectangle">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/dandipadilah2/" class="rectangle">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="https://youtube.com/channel/UCpE84YsS2g9cTlDpCLvoTVw" class="rectangle">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </div>
        </section><!-- /.section-networks-->
        <!-- End Social Networks section --> 

    </main><!-- /#main -->
    <!-- End Main content -->

    <!-- Footer --> 
    <footer id="colophon" class="site-footer">

        <div class="container-fluid">

            <ul class="list-unstyled list-inline">
                <li class="page-scroll"><a href="#top">Home</a></li>
                <li class="page-scroll"><a href="#intro">Intro</a></li>
                <li class="page-scroll"><a href="#services">skill</a></li>
                <li class="page-scroll"><a href="#team">Friend</a></li>
                <li class="page-scroll"><a href="#works">my fortofolio</a></li>
                <li class="page-scroll"><a href="#contact">Contact</a></li>
            </ul>

            <div class="page-scroll">
                <a href="#top" class="rectangle">
                    <i class="fa fa-angle-double-up"></i>
                </a>
            </div>

        </div>

        <div class="container text-center">
            <p class="copyright">&copy; <a href="http://pixelperfect.mk/" target="_blank">DandiPadilah</a> - 2022</p>
        </div>

    </footer><!-- /#footer -->
    <!-- End Footer --> 

    <!-- Modals -->
    <div id="portfolioItem1" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="assets/img/portfolio-1.jpg" alt="">
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem2" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="assets/img/portfolio-2.jpg" alt="">
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem3" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="assets/img/portfolio-4.jpg" alt="">
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem4" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="assets/img/portfolio-3.jpg" alt="">
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem5" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="assets/img/portfolio-5.jpg" alt="">
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem6" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="assets/img/portfolio-6.jpg" alt="">
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem7" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="assets/img/portfolio-7.jpg" alt="">
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div id="portfolioItem8" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="assets/img/portfolio-8.jpg" alt="">
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery core js | Do not Delete -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap core js | Do not Delete -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Bootstrap progressbar JS -->
    <script src="assets/js/bootstrap-progressbar.min.js"></script>

    <!-- Count To JS -->
    <script src="assets/js/jquery.countTo.min.js"></script>

    <!-- Easing JS -->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Shuffle JS -->
    <script src="assets/js/jquery.shuffle.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="assets/js/slick.min.js"></script>

    <!-- Touchswipe JS -->
    <script src="assets/js/touchswipe.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
  
</body>
</html>