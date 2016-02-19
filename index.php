<!DOCTYPE html>
<html lang="en">

<?php
	$mailSent = false;
	$mailError = "";
	//if "email" variable is filled out, send email
	if (isset($_REQUEST['email']))  {
		//Email information
		$admin_email = "info@tfact.com";
		$email = $_REQUEST['email'];
		$subject = "WEB Contact Form"; //$_REQUEST['subject'];
		$comment = $_REQUEST['message'];
		
		if (strlen($email) > 0 && strlen($comment) > 0) {
			//send email
			mail($admin_email, "$subject", $comment, "From:" . $email);

			//Email response
			//echo "Thank you for contacting us!";
			$mailSent = true;
		}
		else {
			$mailError = "To email and message are required";
		}
	}
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tfact Inc - IT Consulting Firm</title>
    <script type="text/javascript">
        function preloader(){
            document.getElementById("loading").style.display = "none";
            document.getElementById("content").style.display = "block";
        }//preloader
        window.onload = preloader;
		
		
	</script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    
    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<style>
		a.nohover:hover {
			text-decoration: none;
		}
	</style>
</head>

<body id="page-top" class="list_blog" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="loading"></div>
<div id="content">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Tfact Inc <i class="fa fa-plus"></i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="#page-top">Home</a>
                    </li>
					<li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
					<!--<li class="page-scroll">
                        <a href="#team">Team</a>
                    </li>-->
					<li class="page-scroll">
                        <a href="#services">Services</a>
                    </li>
                    <!--<li class="page-scroll">
                        <a href="#portfolio">Portfolio</a>
                    </li>-->
					<!--<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="list_blog.html">List Blogs</a></li>
							<li><a href="single_blog.html">Single Blog</a></li>
						</ul>
					</li>-->
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header class="home">
		<div class="home_wrap">
			<div class="container" style="padding-top: 60px">
				<div class="row" style="margin-bottom: 20px; font-size: 60px;">
					<span style="font-size: 82px;">T</span>FACT
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="intro-text">
							<div class="name">
								<div class="flexslider">
								    <ul class="slides">
										<li>
											We can do IT for you
										</li>
										<li>
											Network Services
										</li>
										<li>
											Web Deisgn
										</li>
										<li>
											Application Development
										</li>
										<li>
											Hardware Services
										</li>
										<li>
											Graphical Services
										</li>
								    </ul>
								</div>
							
							</div>
							<hr class="star-light">
							<span class="skills">System Administrators - Web/Application Developers - Graphic Artists - IT Consultants</span>
							<br>
							
								
						</div>
						<div class="text-center">
							<div class="page-scroll menu-icon">
								<a href="#about">
									<i class="fa fa-list fa-lg pull-left fa-border"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
	
	<section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center animateup">
                    <h2>About</h2>
                    <hr class="star-light">
                </div>
            </div>
			<div class="gap-30"></div>
            <div class="row">
                <div class="col-md-7">
					<h1 class="heading animateleft">
						<span class="darkblue">Pleased</span><br>
						<span class="white">to Meet You</span>
					</h1>
                    <p class="white animateleft">Tfact Inc., a Los Angeles-based software and information technology services provider, founded in 2002.  The first consultants were hired within months later and Tfact Inc. has continued to grow. Tfact Inc. is recognized as a leading resource for IT services, internetworking, software design and development, and website design and development. The decision to launch the company was based on the desire to provide organizations with high quality, simple, logical solutions to complex information technology issues--all at a reasonable cost</p>
                </div>
                <div class="col-md-5">
					<div id="testimonials-2" class="slide testimonial testimonial-version1 animateright">
							<!-- Testimonial items -->
							<div class="carousel-inner">
								<div class="item active">
									<div class="textbox">
										<p class="reviewcomment">
											Under great leadership, the Tfact Inc. vision continues to grow. However, the company hasn't strayed from its roots. The staff continues to challenge the industry with its focus on high quality, reliability, and honesty. Tfact Inc. constantly strives to simplify business with technology and More ...										
										</p>
									</div>
									<div class="fullwidth">
										<div class="testimonial-metadata">
											<img src="img/TemplateImg/author2.jpg" alt="Circle Image" class="img-circle"/>
											<span class="author primary-color">
												tC
											</span>
											<br>
											<em>CEO</em>
										</div>
									</div>
								</div>
								<!-- FIND MORE INFO ------------------------------------------------------------
								<div class="item">
									<div class="textbox">
										<p class="reviewcomment">
											Business Plus is free premium, so clean, super flexible and has a fully responsive design! This Template sets the new standard with endless possibilities. Built with HTML5 & CSS3, a lot of thought and care went into this template making it a pleasure to use
										
										</p>
									</div>
									<div class="fullwidth">
										<div class="testimonial-metadata">
											<img src="img/TemplateImg/ahmadmalik.jpg" alt="Circle Image" class="img-circle">
											<span class="author primary-color">
												Ahmad Malik					
											</span>
											<br>
											<em>Project Manager</em>
										</div>
									</div>
								</div>

								<div class="item">
									<div class="textbox">
										<p class="reviewcomment">
											Business Plus is free premium, so clean, super flexible and has a fully responsive design! This Template sets the new standard with endless possibilities. Built with HTML5 & CSS3, a lot of thought and care went into this template making it a pleasure to use
										</p>
									</div>
									<div class="fullwidth">
										<div class="testimonial-metadata">
											<img src="img/TemplateImg/comment-user.jpg" alt="Circle Image" class="img-circle">
											<span class="author primary-color">
												User					
											</span>
											<br>
											<em>General User</em>
										</div>
									</div>
								</div>
								item-->
							</div>
							<!--/Testimonial-inner-->
						<div class="testimonial-control pull-right">
							<a class="left  btn btn-primary btn-xs" href="#testimonials-2" data-slide="prev"><i class="fa fa-angle-left fa-2x"></i></a>
							<a class="right btn btn-primary btn-xs" href="#testimonials-2" data-slide="next"><i class="fa fa-angle-right fa-2x"></i></a>
						</div>
					</div>
				</div>	
            </div>
        </div>
    </section>
<!--
	<section class="team" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center animateup">
                    <h2>Team</h2>
                    <hr class="star-light">
                </div>
				<div class="row">
					<div class="col-md-6 tm_member animateleft">
						<div class="tm_photo">
							<img class="img-responsive" src="img/team/john_doe.jpg" alt="">
						</div>
						<div class="tm_content">
							<h4 class="white">
								John Doe
							</h4>
							<p class="white">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue luctus lorem.
							</p>
						</div>
					</div>
					<div class="col-md-6 tm_member animateright">
						<div class="tm_photo">
							<img class="img-responsive" src="img/team/eliza_bennett.jpg" alt="">
						</div>
						<div class="tm_content">
							<h4 class="white">
								Eliza Bennett
							</h4>
							<p class="white">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue luctus lorem.
							</p>
						</div>
					</div>
					<div class="col-md-6 tm_member animateleft">
						<div class="tm_photo">
							<img class="img-responsive" src="img/team/john_smith.jpg" alt="">
						</div>
						<div class="tm_content">
							<h4 class="white">
								John Smith
							</h4>
							<p class="white">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue luctus lorem.
							</p>
						</div>
					</div>
					<div class="col-md-6 tm_member animateright">
						<div class="tm_photo">
							<img class="img-responsive" src="img/team/mischa_barton.jpg" alt="">
						</div>
						<div class="tm_content">
							<h4 class="white">
								Mischa Barton
							</h4>
							<p class="white">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis metus vitae ligula elementum ut luctus lorem facilisis. Sed non leo nisl, ac euismod nisi. Aenean augue luctus lorem.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center animateup">
                    <h2>Services</h2>
                    <hr class="star-light">
					
                </div>
				<div class="row">
					<div class="col-md-6 left-services">
						<div class="service-item animateleft">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-tablet fa-stack-1x fa-inverse service-icon"></i>
							</span>
							<h4 class="white">
								Network Services
							</h4>
							<p class="white">
								We can setup and configure your current systems to be networked. Enjoy the luxury of centralized file systems. We can take most any computer and set them up on a monogamous network. 
								</p>
							<p class="white">
								We will help you plan out a network strategy that suits your needs, identify necessary hardware and software to meet those needs, help with the purchasing to make selection process as painless as possible, install all necessary hardware and software, configure all necessary hardware and software, implement security to secure any sensitive network files, and help with necessary training to make the use of the new network as easy and convenient as possible
							</p>
						</div>
						<div class="service-item animateleft">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-adjust fa-stack-1x fa-inverse service-icon"></i>
							</span>
							<h4 class="white">
								Web Design and Development
							</h4>
							<p class="white">
								Having a web page for almost any kind of business has changed from being convenience to necessity. We can help you put together a dazzling and exciting website from nothing or help your jazz up your current site. 
								</p>
							<p class="white">
								We are your complete solution for creating and maintaining your website. We will sit down with you to help you decide what you want your website to provide and how you want it to look. We will create a framework for your web page, have graphics artists who will take your imagination and turn it into web design, will implement any modification or changes you man want to make, and help you with finalizing and up loading your site to your Internet Service Provider (ISP).
							</p>
						</div>
						<div class="service-item animateleft">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-cogs fa-stack-1x fa-inverse service-icon"></i>
							</span>
							<h4 class="white">
								7X24 SUPPORT
							</h4>
							<p class="white">
								We're only a call away <a href="tel:8182033007" class="nohover" style="color:#FFF;">818-203-3007</a> 
							</p>
						</div>
					</div>
					<div class="col-md-6 right-services">
						<div class="service-item animateright">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-html5 fa-stack-1x fa-inverse service-icon"></i>
							</span>
							<h4 class="white">
								Software Development
							</h4>
							<p class="white">
								We design and develop software applications to optimize the way you work!  We have software engineers that have been developing innovative software for years and are GREAT at what they do. They can work with many different technologies (ex. HTML, ASP, C++, JAVA, etc.). We can create any program that you can imagine. We will help you design the program to meet your needs, develop the application to run on any computer platform(s), install the necessary software(s) and/or component(s), make any necessary configurations to be sure the program works seamlessly within your computer environment, and will help train staff to make best use of the new software. 
							</p>
						</div>
						<div class="service-item animateright">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-rocket fa-stack-1x fa-inverse service-icon"></i>
							</span>
							<h4 class="white">
								Hardware Services
							</h4>
							<p class="white">
								Do you find yourself asking, "where does this piece go and how do I install it?" Our experts have worked with many different types of hardware and have become proficient at installing and trouble shooting hardware problems. They can also help you with learning about your new hardware and train you in it's use. Avoid the frustration of trying to install and troubleshoot hardware and let us take care of it for you.
							</p>
						</div>
						<div class="service-item animateright">
							<span class="fa-stack fa-3x right">
							    <i class="fa fa-circle fa-2x fa-stack-2x"></i>
							    <i class="fa fa-check fa-stack-1x fa-inverse service-icon"></i>
							</span>
							<h4 class="white">
								Hardware Services
							</h4>
							<p class="white">
								Do you find yourself asking, "where does this piece go and how do I install it?" Our experts have worked with many different types of hardware and have become proficient at installing and trouble shooting hardware problems. They can also help you with learning about your new hardware and train you in it's use. Avoid the frustration of trying to install and troubleshoot hardware and let us take care of it for you.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Portfolio TODO
	<section id="portfolio">
        <div class="container">
			<div class="row">
				<div class="col-lg-12 text-center animateup">
                    <h2>Portfolio</h2>
                    <hr class="star-light">
					
                </div>
				<div class="gap-30"></div>
				
				<div id="filters" class="filter_group text-center">  
					<button class="btn btn-primary filter active" data-filter="*">show all</button>
					<button class="btn btn-primary filter" data-filter=".design">Design</button>
					<button class="btn btn-primary filter" data-filter=".development">Development</button>
					<button class="btn btn-primary filter" data-filter=".testing">Testing</button>
				</div>
				<div class="isotope portfolio-container">
					<div class="element-item portfolio-item design">
						<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/portfolio/design1.jpg" class="img-responsive" alt="" />
						</a>
					</div>
					<div class="element-item portfolio-item development">
						<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/portfolio/dev1.jpg" class="img-responsive" alt="" />
						</a>
					</div>
					<div class="element-item portfolio-item design">
						<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/portfolio/design3.jpg" class="img-responsive" alt="" />
						</a>
					</div>
					<div class="element-item portfolio-item testing">
						<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/portfolio/testing1.jpg" class="img-responsive" alt="" />
						</a>
					</div>
					<div class="element-item portfolio-item development">
						<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/portfolio/dev2.jpg" class="img-responsive" alt="" />
						</a>
					</div>
					<div class="element-item portfolio-item testing">
						<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/portfolio/testing2.jpg" class="img-responsive" alt="" />
						</a>
					</div>
					<div class="element-item portfolio-item design">
						<a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/portfolio/design4.jpg" class="img-responsive" alt="" />
						</a>
					</div>
					<div class="element-item portfolio-item testing">
						<a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/portfolio/testing3.jpg" class="img-responsive" alt="" />
						</a>
					</div>
					<div class="element-item portfolio-item development">
						<a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
							<div class="caption">
								<div class="caption-content">
									<i class="fa fa-search-plus fa-3x"></i>
								</div>
							</div>
							<img src="img/portfolio/dev3.jpg" class="img-responsive" alt="" />
						</a>
					</div>
				  
				</div>
			</div>
		</div>
    </section>

-->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center animateup">
                    <h2>Contact</h2>
                    <hr class="star-primary">
                </div>
            </div>
			<div class="gap-50"></div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 animateup">
					<?php
						if($mailSent) { ?>

						<div class="alert alert-success">
						  Thank you for contacting TFact Inc.  We will be in touch.
						</div>						
												
					<?php
						}
					?>
					<?php
						if ($mailError) { ?>
						<div class="alert alert-danger">
						  <?php echo $mailError; ?>
						</div>
					<?php	
						}
					?>
                    <form role="form" method="POST">
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" id="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="message">Message</label>
                                <textarea placeholder="Message" class="form-control" name="message" id="message" rows="5"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-lg btn-success">Send</button>
                                <div style="float: right; font-size: 50px;">OR&nbsp;&nbsp;&nbsp;&nbsp;CALL (818)203-3007</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</section>
	<!--<div id="googleMap" style="width:100%;height:350px;"></div>-->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h4>Location</h4>
                        <p>20555 Devonshire Street, Unit 155
                            <br>Chatsworth, CA 91311</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h4>Around the Web</h4>
                        <ul class="list-inline">
                            <!--<li><a href="https://www.facebook.com/themifycloud" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li><a href="https://plus.google.com/104790504722969782308" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li><a href="https://twitter.com/themifycloud" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>-->
                            <li><a href="https://www.linkedin.com/in/tc-chowdhury-5bb13177" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <!--<li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>-->
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h4>Phone</h4>
                        <p><a href="tel:8182033007" style="text-decoration: none;">818-203-3007</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2016 - Tfact INC
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
</div>
    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://themifycloud.com">Business Plus</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://themifycloud.com">May 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://themifycloud.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://themifycloud.com">Business Plus</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://themifycloud.com">May 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://themifycloud.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://themifycloud.com">Business Plus</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://themifycloud.com">May 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://themifycloud.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://themifycloud.com">Business Plus</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://themifycloud.com">May 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://themifycloud.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://themifycloud.com">Business Plus</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://themifycloud.com">May 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://themifycloud.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://themifycloud.com">Business Plus</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://themifycloud.com">May 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://themifycloud.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/jquery.appear.js"></script>
	<script src="js/businessplus.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyALl-WUnKHFD26s6bPPpOo3MMEWBugZjy0&amp;sensor=false">
	</script>
	
	
	<?php
	if (strlen($mailError) > 0) {
	?>
		<script type="text/javascript">
			location.hash = "#contact";
		</script>
	<?php } ?>
</body>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74044543-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
