<?php
	$msg = "";

	if (isset($_POST['submit'])) {

		require 'phpmailer/PHPMailerAutoload.php';

		function sendemail($to, $from, $fromName, $body, $attachment = "") {
			$mail = new PHPMailer();
			$mail->setFrom($from, $fromName);
			$mail->addAddress($to);
			$mail->Subject = 'Contact Form - Email';
			$mail->Body = $body;
			$mail->isHTML(false);

			return $mail->send();
		}

		$name = $_POST['name'];
		$email = $_POST['email'];
		$body = $_POST['body'];

    if (sendemail('info@terrastormsolutions.com', $email, $name, $body, $file)) {
			$msg = 'Email sent!';
			sendemail($email, 'info@terrastormsolutions.com', 'Terrastorm Solutions', 'Hello, we have received your message, and will get back to you shortly.');
		} else
			$msg = 'Email failed!';

	}
?>

<html>

<head>
    <meta charset="utf-8">
    
    <meta name="description" content="Webdesign Debrecen Egy weboldal tálalásakor rengeteget számít maga a webdesign. Egy-egy látogató alig pár másodpercet tölt el a weboldalán úgy, hogy közben a konkurenciáival">
    <meta name="keywords" itemprop="keywords" content="webdesign, web design, web development, web page creation, web dev debrecen, terrastorm solutions, terra storm solutions, webfejlesztés, keresőoptimalizálás, facebook fejlesztés, weboldal, webáruház fejlesztés, arculattervezés" />
    <meta name="robots" content="All, Index, Follow">
    <meta name="rating" content="General">
    <meta name="dcterms.audience" content="Global">
    <meta name="revisit-after" content="1 days">
    
    
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Homepage</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

    <script type="text/javascript" src="js/jquery.2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#mainmenu').scrollToFixed();
            $('.res-nav_click').click(function() {
                $('.main-nav').slideToggle();
                return false

            });

            $('#testbutton').click(function() {
                $('html, body').animate({
                    scrollTop: $("#mainmenu").offset().top
                }, 1200);
            });
        });
    </script>

    <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>

<body>

    <div class="test">

    </div>


    <div class="myheader">
        <header class="header" id="header">
        <!--header-start-->
            <div class="container">
                <h1 class="text1">TerraStorm Solutions</h1>
                <ul class="text2">
                    <li>Website Designs, Digital Marketing, Mobile Solutions... building you the future!</li>
                </ul>
                <a class="link mybtn bluebtn" id="testbutton">Let's get started!</a>
            </div>
        <!--header-end-->
        </header>
    </div>

    <nav class="main-nav-outer" id="mainmenu">
        <!--main-nav-start-->
        <div class="container">
            <ul class="main-nav">
                <li><a href="#services">Services</a></li>
                <li><a href="#Portfolio">Web Portfolio</a></li>
                <li id="#aboutus" class="small-logo">
                    <a href="#header"><img src="img/small_logo_hooded.png" alt=""></a>
                </li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
            <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
        </div>
    </nav>
    <!--main-nav-end-->

    <script type="text/javascript">
        $(document).ready(function() {
            Init();
        });
    </script>

    <section class="main-section" id="services">
        <!--main-section-start-->
        <div class="container">
            <h2>Services</h2>
            <!--<h6>Here you can find all of our current ongoing projects.</h6>-->
            <h6>Click on the topics to see more information about our selection of services!</h6>
            <div id="project_all" class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                    <div id="project-list-branding-id" class="project-list-branding">
                        <div class="project-list-col2">
                            <h3 id="project-branding" class="project-title"><i class="fa-paw"></i> Consultation</h3>
                            <p>We offer consultation for your ongoing projects and ideas, in a wide range of languages.</p>
                            <br/> <br/>
                        </div>
                    </div>
                    <div id="project-list-web-id" class="project-list-web">
                        <!--<div class="project-list-col1">
                    	<i class="fa-gear"></i>
                    </div>-->
                        <div class="project-list-col2">
                            <h3 id="project-web-development" class="project-title"><i class="fa-gear"></i> Web Development</h3>
                            <p>You dream it, we build it! Webshops, simple or complex web sites, responsiveness, logo and branding design, we got you covered!</p>
                            <br/> <br/>
                        </div>
                    </div>
                    <div id="project-list-mobile-id" class="project-list-mobile">
                        <!--<div class="project-list-col1">
                    	<i class="fa-apple"></i>
                    </div>-->
                        <div class="project-list-col2">
                            <h3 id="project-mobile-development" class="project-title"><i class="fa-apple"></i> Mobile Development</h3>
                            <p>We also offer mobile development services for your ideas, new or the ones you started working on.</p>
                            <br/> <br/>
                        </div>
                    </div>
                </div>
                <figure id="project-selector" class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                    <img src="img/macbook-pro.png" alt="">
                </figure>

            </div>
        </div>
    </section>
    <!--main-section-end-->

    <section class="main-section paddind" id="Portfolio">
        <!--main-section-start-->
        <div class="container">
            <h2>Web Portfolio</h2>
            <h6>A fresh portfolio of designs available to choose from. These are all available on the go.</h6>
            <div class="portfolioFilter">
                <ul class="Portfolio-nav wow fadeIn delay-02s">
                    <li><a href="#" data-filter="*" class="current">All</a></li>
                    <li><a href="#" data-filter=".branding">Branding</a></li>
                    <li><a href="#" data-filter=".webdesign">Web design</a></li>
                    <li><a href="#" data-filter=".printdesign">Print design</a></li>
                    <li><a href="#" data-filter=".photography">Photography</a></li>
                </ul>
            </div>

        </div>
        <div class="portfolioContainer wow fadeInUp delay-04s">
            <div class=" Portfolio-box webdesign">
                <a href="/examples/omnifood"><img src="img/Portfolio-pic1.png" alt=""></a>
                <h3>OmniFood</h3>
                <p>Web Design</p>
            </div>
            <div class="Portfolio-box webdesign">
                <a href="#"><img src="img/Portfolio-pic2.jpg" alt=""></a>
                <h3>Luca Theme</h3>
                <p>Web Design</p>
            </div>
            <div class=" Portfolio-box branding">
                <a href="#"><img src="img/Portfolio-pic3.jpg" alt=""></a>
                <h3>Uni Sans</h3>
                <p>Branding</p>
            </div>
            <div class=" Portfolio-box photography">
                <a href="#"><img src="img/Portfolio-pic4.jpg" alt=""></a>
                <h3>Vinyl Record</h3>
                <p>Photography</p>
            </div>
            <div class=" Portfolio-box branding">
                <a href="#"><img src="img/Portfolio-pic5.jpg" alt=""></a>
                <h3>Hipster</h3>
                <p>Branding</p>
            </div>
            <div class=" Portfolio-box photography">
                <a href="#"><img src="img/Portfolio-pic6.jpg" alt=""></a>
                <h3>Windmills</h3>
                <p>Photography</p>
            </div>
        </div>
    </section>
    <!--main-section-end-->

    <div class="c-logo-part">
        <!--c-logo-part-start-->
        <div class="container">
            <ul>
                <li>
                    <a href="#"><img src="img/c-liogo1.png" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="img/c-liogo2.png" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="img/c-liogo3.png" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="img/c-liogo4.png" alt=""></a>
                </li>
                <li>
                    <a href="#"><img src="img/c-liogo5.png" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    <!--c-logo-part-end-->
    <section class="main-section team" id="team" align="center">
        <!--main-section team-start-->
        <div class="container" align="center">
            <h2>team</h2>
            <h6>Take a closer look into our team.</h6>
            <div class="team-leader-block clearfix" align="center">
                <div class="team-leader-box" align="center">
                    <div class="team-leader wow fadeInDown delay-03s">
                        <div class="team-leader-shadow">
                            <a href="#"></a>
                        </div>
                        <img src="img/team-leader-pic1.jpg" alt="">
                        <ul>
                            <li>
                                <a href="#" class="fa-twitter"></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/terrastormsolutions" class="fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fa-pinterest"></a>
                            </li>
                            <li>
                                <a href="#" class="fa-google-plus"></a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-03s">Imre Nagy</h3>
                    <span class="wow fadeInDown delay-03s"> </span>
                    <p class="wow fadeInDown delay-03s">Programmer, with 7 years of experience. Worked with Databases, HTML5, CSS3, Javascript, JQuery, PHP, .Net, C#.</p>
                </div>
                <div class="team-leader-box" align="center">
                    <div class="team-leader  wow fadeInDown delay-06s">
                        <div class="team-leader-shadow">
                            <a href="#"></a>
                        </div>
                        <img src="img/team-leader-pic2.jpg" alt="">
                        <ul>
                            <li>
                                <a href="#" class="fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa-facebook"></a>
                            </li>
                            <li>
                                <a href="#" class="fa-pinterest"></a>
                            </li>
                            <li>
                                <a href="#" class="fa-google-plus"></a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-06s">Peter Benikovszky</h3>
                    <span class="wow fadeInDown delay-06s"> </span>
                    <p class="wow fadeInDown delay-06s">Graphic designer, programmer. Peter has several years of experience, working, maintaining, and developing products on the Microsoft platforms. Has extensive 2D and 3D graphic design background.</p>
                </div>
            </div>
        </div>
    </section>
    <!--main-section team-end-->

    <!--testing git-->



    <section class="business-talking">
        <!--business-talking-start-->
        <div class="container">
            <h2>Contact Us.</h2>
        </div>
    </section>
    <!--business-talking-end-->
    <div class="container">
        <section class="main-section contact" id="contact">

            <div class="row">
                <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                    <div class="contact-info-box email clearfix">
                        <br>
                        <h3><i class="fa-pencil"></i>Feedback:</h3>
                    </div>
                    <div class="contact-info-box hours clearfix"> <span>Would you like to leave a message?</span>
                    </div>
                    <div class="contact-info-box address clearfix">
                        <span>You can send us your feedback here:</span>
                    </div>
                    <ul class="social-link">
                        <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                        <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                    </ul>

            </div>

                <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                  <form class="form_test" method="post" action="index.php" enctype="multipart/form-data">
                      <input id="fname" class="input-text" type="text" name="username" value="Your Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                      <input id="femail" class="input-text" type="text" name="email" value="Your E-mail *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                      <textarea id="fmsg" class="input-text text-area" name="body" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                      <input id="submit" name="submit" class="input-btn bluebtn" type="submit" value="send message">
                      <p id="returnmessage"><?php echo $msg; ?></p>
                  </form>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer-logo">
                <a href="#"><img src="img/small_logo_hooded.png" alt=""></a>
            </div>
            <span class="copyright">Copyright © 2017 | <a href="http://www.terrastormsolutions.com/">TSS Themes</a> by TerraStorm Solutions</span>
        </div>

    </footer>

    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100
        });
        wow.init();
    </script>


    <script type="text/javascript">
        $(window).load(function() {

            $('.main-nav li a').bind('click', function(event) {
                var $anchor = $(this);

                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 102
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        })
    </script>

    <script type="text/javascript">
        $(window).load(function() {


            var $container = $('.portfolioContainer'),
                $body = $('body'),
                colW = 375,
                columns = null;


            $container.isotope({
                // disable window resizing
                resizable: true,
                masonry: {
                    columnWidth: colW
                }
            });

            $(window).smartresize(function() {
                // check if columns has changed
                var currentColumns = Math.floor(($body.width() - 30) / colW);
                if (currentColumns !== columns) {
                    // set new column count
                    columns = currentColumns;
                    // apply width to container manually, then trigger relayout
                    $container.width(columns * colW)
                        .isotope('reLayout');
                }

            }).smartresize(); // trigger resize to set container width
            $('.portfolioFilter a').click(function() {
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({

                    filter: selector,
                });
                return false;
            });

        });
    </script>
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-105714186-1','auto');ga('send','pageview');
    </script>
    
</body>

</html>
