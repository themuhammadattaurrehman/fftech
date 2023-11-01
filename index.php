<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title>FF Technical Solutions</title>
    
    <meta name="description" content="Fatima Foundation Technical Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css">
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css">
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
    <!--====== FontAwesom CSS ======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">
	`
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>

<body>
<?php
    if(!empty($_POST["send"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $message=$_POST["message"];

        $to="contact@fftechsol.com";
        $mailHeaders="Name : ". $name .
        "\r\n Email: ". $email .
        "\r\n Message: ". $message . "\r\n";

        if(mail($to,$name,$mailHeaders)){
            $message="successfully send this message to fftech solution teams";
        }
    


    }
?>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <!--====== PRELOADER PART ENDS ======-->


    <!--====== POPUP START ======-->

<div class="port-overlay" id="gaca">
        <div class="port-popup">
            <div class="port-close">
                <i class="fa fa-window-close"></i>
            </div>

            <div class="port-container">
                
                <div class="port-slider cycle-slideshow"
                data-cycle-fx="scrollHorz"
                data-cycle-timeout="0"
                data-cycle-prev="#gaca-prev"
                data-cycle-next="#gaca-next"
                >
                <img src="assets/images/portfolio/gaca-1.jpg">
                <img src="assets/images/portfolio/gaca-2.jpg">
                <img src="assets/images/portfolio/gaca-3.jpg">
                <img src="assets/images/portfolio/gaca-4.jpg">

                <div class="center">
                   <a href=# id="gaca-prev" class="prev">
                     <img src="assets/images/portfolio/left-chevron.png" alt="">
                   </a> 
                   <a href=# id="gaca-next" class="next">
                     <img src="assets/images/portfolio/right-chevron.png" alt="">
                   </a>
               </div>

            </div>

                  

            </div>

            <div class="col-md-8">
                <div class="port-content">
                <div class="port-heading">
                    <h3>Global ACCR. &amp; CERT. Academy</h3>
                </div>

                <div class="port-tech">

                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>jQuery</li>
                        <li>Wordpress</li>
                        <li>PHP</li>
                    </ul>
                </div>

                <div class="port-desc">
                    Global ACCR. &amp; CERT. Academy is a Soft skills training institute, where they manage online certification &amp; verification system.
                </div>

                <div class="port-link">
                  <a href="https://razash.000webhostapp.com/" target="_blank">Visit Project <i class="fa fa-external-link"></i></a>
                </div>
         </div>
                    
            </div>
            
            
        </div>
    </div>

    <div class="port-overlay" id="alexa">
        <div class="port-popup">
            <div class="port-close">
                <i class="fa fa-window-close"></i>
            </div>

            <div class="port-container">
                
                <div class="port-slider cycle-slideshow"
                data-cycle-fx="scrollHorz"
                data-cycle-timeout="0"
                data-cycle-prev="#alexa-prev"
                data-cycle-next="#alexa-next"
                >
                <img src="assets/images/portfolio/alexa-1.png">
                <img src="assets/images/portfolio/alexa-2.png">
                <img src="assets/images/portfolio/alexa-3.png">
                <img src="assets/images/portfolio/alexa-4.png">

                <div class="center">
                   <a href=# id="alexa-prev" class="prev">
                     <img src="assets/images/portfolio/left-chevron.png" alt="">
                   </a> 
                   <a href=# id="alexa-next" class="next">
                     <img src="assets/images/portfolio/right-chevron.png" alt="">
                   </a>
               </div>

            </div>

                  

            </div>

            <div class="col-md-8">
                <div class="port-content">
                <div class="port-heading">
                    <h3>Alexa IT Homes</h3>
                </div>

                <div class="port-tech">
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>javascript</li>
                        <li>PHP</li>
                    </ul>
                </div>

                <div class="port-desc">
                    alexaithomes is Home for IT & Tech Solutions. their sologan is to provide Reliable Services and Robust Solutions.
                </div>

                <div class="port-link">
                  <a href="https://sa.alexaithomes.com/" target="_blank">Visit Project <i class="fa fa-external-link"></i></a>
                </div>
         </div>
                    
            </div>
            
            
        </div>
    </div>

    <div class="port-overlay" id="hms">
        <div class="port-popup">
            <div class="port-close">
                <i class="fa fa-window-close"></i>
            </div>

            <div class="port-container">
                
                <div class="port-slider cycle-slideshow"
                data-cycle-fx="scrollHorz"
                data-cycle-timeout="0"
                data-cycle-prev="#hms-prev"
                data-cycle-next="#hms-next"
                >
                <img src="assets/images/portfolio/hms-1.png">
                <img src="assets/images/portfolio/hms-2.png">
                <img src="assets/images/portfolio/hms-3.png">

                <div class="center">
                   <a href=# id="hms-prev" class="prev">
                     <img src="assets/images/portfolio/left-chevron.png" alt="">
                   </a> 
                   <a href=# id="hms-next" class="next">
                     <img src="assets/images/portfolio/right-chevron.png" alt="">
                   </a>
               </div>

            </div>

                  

            </div>

            <div class="col-md-8">
                <div class="port-content">
                <div class="port-heading">
                    <h3>Smart Hospital</h3>
                </div>

                <div class="port-tech">
                    <ul>
                        <li>javascript</li>
                        <li>PHP</li>
                    </ul>
                </div>

                <div class="port-desc">
                  We developed the login system for smart hospital website.
                </div>

                <div class="port-link">
                  <a href="https://demo.hms.alexaithomes.com/site/login" target="_blank">Visit Project <i class="fa fa-external-link"></i></a>
                </div>
         </div>
                    
            </div>
            
            
        </div>
    </div>

    <div class="port-overlay" id="alexa-school">
        <div class="port-popup">
            <div class="port-close">
                <i class="fa fa-window-close"></i>
            </div>

            <div class="port-container">
                
                <div class="port-slider cycle-slideshow"
                data-cycle-fx="scrollHorz"
                data-cycle-timeout="0"
                data-cycle-prev="#alexa-school-prev"
                data-cycle-next="#alexa-school-next"
                >
                <img src="assets/images/portfolio/alexa-school-1.png">
                <img src="assets/images/portfolio/alexa-school-2.png">
                <img src="assets/images/portfolio/alexa-school-3.png">

                <div class="center">
                   <a href=# id="alexa-school-prev" class="prev">
                     <img src="assets/images/portfolio/left-chevron.png" alt="">
                   </a> 
                   <a href=# id="alexa-school-next" class="next">
                     <img src="assets/images/portfolio/right-chevron.png" alt="">
                   </a>
               </div>

            </div>

                  

            </div>

            <div class="col-md-8">
                <div class="port-content">
                <div class="port-heading">
                    <h3>Alexa School System</h3>
                </div>

                <div class="port-tech">
                    <ul>
                        <li>javascript</li>
                        <li>PHP</li>
                    </ul>
                </div>

                <div class="port-desc">
                  We developed the login system for Alexa School System.
                </div>

                <div class="port-link">
                  <a href="https://demo.sms.alexaithomes.com/site/login" target="_blank">Visit Project <i class="fa fa-external-link"></i></a>
                </div>
         </div>
                    
            </div>
            
            
        </div>
    </div>

    <div class="port-overlay" id="pos">
        <div class="port-popup">
            <div class="port-close">
                <i class="fa fa-window-close"></i>
            </div>

            <div class="port-container">
                
                <div class="port-slider cycle-slideshow"
                data-cycle-fx="scrollHorz"
                data-cycle-timeout="0"
                data-cycle-prev="#pos-prev"
                data-cycle-next="#pos-next"
                >
                <img src="assets/images/portfolio/alexa-admin-1.png">
                <img src="assets/images/portfolio/alexa-admin-2.png">
                <img src="assets/images/portfolio/alexa-admin-3.png">

                <div class="center">
                   <a href=# id="pos-prev" class="prev">
                     <img src="assets/images/portfolio/left-chevron.png" alt="">
                   </a> 
                   <a href=# id="pos-next" class="next">
                     <img src="assets/images/portfolio/right-chevron.png" alt="">
                   </a>
               </div>

            </div>

                  

            </div>

            <div class="col-md-8">
                <div class="port-content">
                <div class="port-heading">
                    <h3>Alexa Admin</h3>
                </div>

                <div class="port-tech">
                    <ul>
                        <li>javascript</li>
                        <li>PHP</li>
                    </ul>
                </div>

                <div class="port-desc">
                  Fully controlled backend admin panel.
                </div>

                <div class="port-link">
                  <a href="https://demo.pos1.alexaithomes.com/" target="_blank">Visit Project <i class="fa fa-external-link"></i></a>
                </div>
         </div>
                    
            </div>
            
            
        </div>
    </div>
    

    <!--====== POPUP END ======-->

    
    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                       
                        <a class="mt-30" href="index.php">
  <img src="assets/images/fftech.svg" alt="Logo" style="width: 100px; height: 100px;">
</a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#services">Services</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#portfolio">Portfolio</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
                                <!-- <li class="nav-item"><a class="page-scroll" href="#about">About</a></li> -->
                                <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        
                        <!-- <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="#">Download</a></li>
                            </ul>
                        </div> -->
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->
    
    <!--====== SLIDER PART START ======-->

    <section id="home" class="slider_area">
        <div id="carouselThree" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselThree" data-slide-to="0" class="active"></li>
                <li data-target="#carouselThree" data-slide-to="1"></li>
                <li data-target="#carouselThree" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Welcome to FF Technical Solutions</h1>
                                    <p class="text">Make your business shine online with a custom software website designed just for you by a professional designer. </p>
                                    <ul class="slider-btn rounded-buttons">
                                        <!-- <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/1.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title"> Build Your software</h1>
                                    <p class="text">We blend insights and strategy to create software for forward-thinking organizations.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <!-- <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li> -->
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/2.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->

                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider-content">
                                    <h1 class="title">Solution Provider </h1>
                                    <p class="text">We are One Stop Solution Providers.</p>
                                    <ul class="slider-btn rounded-buttons">
                                        <!-- <li><a class="main-btn rounded-one" href="#">GET STARTED</a></li>
                                        <li><a class="main-btn rounded-two" href="#">DOWNLOAD</a></li> -->
                                    </ul>
                                </div> <!-- slider-content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                    <div class="slider-image-box d-none d-lg-flex align-items-end">
                        <div class="slider-image">
                            <img src="assets/images/slider/3.png" alt="Hero">
                        </div> <!-- slider-imgae -->
                    </div> <!-- slider-imgae box -->
                </div> <!-- carousel-item -->
            </div>

            <a class="carousel-control-prev" href="#carouselThree" role="button" data-slide="prev">
                <i class="lni lni-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#carouselThree" role="button" data-slide="next">
                <i class="lni lni-arrow-right"></i>
            </a>
        </div>
    </section>

    <!--====== SLIDER PART ENDS ======-->
    
    <!--====== FEATRES TWO PART START ======-->

    <section id="services" class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-10">
                        <h3 class="title">Our Services</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Graphics Design</a></h4>
                            <div class="features-icon">
                                <i class="lni lni-brush"> </i>
                                
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">FFiTsolutions is a full-service graphics company that can help you tell compelling stories, make your message easier to understand, and inspire your audience.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">WordPress Development</a></h4>
                            <div class="features-icon">
                                <img class="logo" src="assets/images/word.png"  style="width:200px ;" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">WordPress is the most popular blogging system on the web and allows updating, customizing and managing the website from its back-end CMS and components. </p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Digital Marketing</a></h4>
                            <div class="features-icon">
                                <img class="logo" src="assets/images/digi.png"  style="width:80px ;height: 80px;" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">digital marketers are adept at managing social media campaigns in order to provide your brand the best digital exposure possible.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#">Websites Design</a></h4>
                            <div class="features-icon">
                                <img class="logo" src="assets/images/search.png"  style="width:80px ;height: 80px;" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">Web design is a multi-disciplinary job, where you'd need not only knowledge in design (typography, color theory) but also skills in developing a website (HTML, CSS, JavaScript).</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#"> Saas Management</a></h4>
                            <div class="features-icon">
                                <img class="logo" src="assets/images/saas2.png"  style="width:80px ;height: 60px;" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text">FFiTsolutions offers its clients a software licensing and delivery model called "Software as a Service".With this model, software is licensed on a subscription basis and is hosted in one place.</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-features mt-40">
                        <div class="features-title-icon d-flex justify-content-between">
                            <h4 class="features-title"><a href="#"> Cloud Management</a></h4>
                            <div class="features-icon">
                                <img class="logo" src="assets/images/cloud2.png"  style="width:80px ;height: 60px;" alt="Shape">
                            </div>
                        </div>
                        <div class="features-content">
                            <p class="text"> cloud computing, which enables the deployment of secure, reliable, and scalable websites, apps, and processes. Accessibility. Global Instance Availability industry-leading security measures</p>
                            <!-- <a class="features-btn" href="#">LEARN MORE</a> -->
                        </div>
                    </div> <!-- single features -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FEATRES TWO PART ENDS ======-->
    
    <!--====== PORTFOLIO PART START ======-->


    <section class="portfolio">


        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
            <div class="section-title text-center pb-10">
            <h3 class="title">Featured Works</h3>
            <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
            </div> 
            </div>
            </div>
        </div>


      <div class="portfolio-nav" id="filter-button">
         <ul class="controls">
            <li data-filter="all" class="control active">
               <span>All</span>
            </li>

            <li data-filter=".web-design" class="control">
               <span>Web Design</span>
            </li>

            <li data-filter=".ecommerce" class="control">
               <span>eCommerce</span>
            </li>

            <li data-filter=".softwares" class="control">
               <span>Softwares</span>
            </li>

            <li data-filter=".cms" class="control">
               <span>CMS</span>
            </li>
         </ul>
      </div>
      <div class="portfolioContainer">
            

         <div class="grid-item mix web-design">
            <figure>
               <img src="assets/images/portfolio/gaca-1.jpg" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search zoom-port" id="gaca"></i>
                  <h5 class="port-title">GACA</h5>
                  <span class="desc">Soft skills training institute, online certification &amp; verification</span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix ecommerce">
            <figure>
               <img src="assets/images/portfolio/alexa-1.png" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search zoom-port" id="alexa"></i>
                  <h5 class="port-title">Alexa IT Homes</h5>
                  <span class="desc">alexaithomes is Home for IT & Tech Solutions. their sologan is Reliable Services. Robust Solutions. </span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix cms">
            <figure>
               <img src="assets/images/portfolio/hms-1.PNG" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search zoom-port" id="hms"></i>
                  <h5 class="port-title">Smart Hospital</h5>
                  <span class="desc">Backend of a Hospital site.</span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix softwares">
            <figure>
               <img src="assets/images/portfolio/alexa-school-1.png" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search zoom-port" id="alexa-school"></i>
                  <h5 class="port-title">Alexa School System</h5>
                  <span class="desc">Complete content management system for Alexa School System.</span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix cms">
            <figure>
               <img src="assets/images/portfolio/alexa-admin-1.png" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search zoom-port" id="pos"></i>
                  <h5 class="port-title">Alexa Admin</h5>
                  <span class="desc">Full controlled admin panel.</span>
               </figcaption>
            </figure>
         </div>


         <!-- Dummy Content Starts -->

         <div class="grid-item mix web-design">
            <figure>
               <img src="assets/images/portfolio/strip-4.jpg" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search" id="gaca"></i>
                  <h5 class="port-title">SoftiCare</h5>
                  <span class="desc">Sit, amet consectetur adipisicing elit. Recusandae. Dolor sit amet.</span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix ecommerce">
            <figure>
               <img src="assets/images/portfolio/tp2.jpg" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search" id="gaca"></i>
                  <h5 class="port-title">iShopy</h5>
                  <span class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, harum!</span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix softwares">
            <figure>
               <img src="assets/images/portfolio/strip-2.jpg" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search" id="gaca"></i>
                  <h5 class="port-title">W-Dev</h5>
                  <span class="desc">Dolor sit, amet consectetur adipisicing elit. Recusandae.</span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix cms">
            <figure>
               <img src="assets/images/portfolio/tp3.jpg" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search" id="gaca"></i>
                  <h5 class="port-title">Car Mania</h5>
                  <span class="desc">Sit, amet consectetur adipisicing elit. Recusandae. Dolor sit amet.</span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix web-design">
            <figure>
               <img src="assets/images/portfolio/strip-3.jpg" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search" id="gaca"></i>
                  <h5 class="port-title">Fruit Factory</h5>
                  <span class="desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, harum!</span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix ecommerce">
            <figure>
               <img src="assets/images/portfolio/strip-4.jpg" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search"></i>
                  <h5 class="port-title">Best Shoes</h5>
                  <span class="desc">Dolor sit, amet consectetur adipisicing elit. Recusandae.</span>
               </figcaption>
            </figure>
         </div>

         <div class="grid-item mix softwares">
            <figure>
               <img src="assets/images/portfolio/strip-2.jpg" alt="">
               <figcaption class="fig-caption">
                  <i class="fa fa-search" id="gaca"></i>
                  <h5 class="port-title">Desks</h5>
                  <span class="desc">Sit, amet consectetur adipisicing elit. Recusandae. Dolor sit amet.</span>
               </figcaption>
            </figure>
         </div>


         <!-- Dummy Content end -->


                     
                     
               
      </div>
      
   </section>










    <!--====== PORTFOLIO PART ENDS ======-->
    
    <!--====== PRINICNG START ======-->

    <!-- <section id="pricing" class="pricing-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">Pricing Plans</h3>
                        <p class="text">Stop wasting time and money designing and managing a website that doesn’t get results. Happiness guaranteed!</p>
                    </div> 
                </div>
            </div> 
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/basic.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Basic</h5>
                            <p class="month"><span class="price">$ 199</span>/month</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="#">GET STARTED</a>
                        </div>    
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/pro.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Pro</h5>
                            <p class="month"><span class="price">$ 399</span>/month</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="#">GET STARTED</a>
                        </div>
                    </div> 
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="pricing-style mt-30">
                        <div class="pricing-icon text-center">
                            <img src="assets/images/enterprise.svg" alt="">
                        </div>
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">Enterprise</h5>
                            <p class="month"><span class="price">$ 699</span>/month</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni lni-check-mark-circle"></i> Carefully crafted components</li>
                                <li><i class="lni lni-check-mark-circle"></i> Amazing page examples</li>
                            </ul>
                        </div>
                        <div class="pricing-btn rounded-buttons text-center">
                            <a class="main-btn rounded-one" href="#">GET STARTED</a>
                        </div>
                    </div> 
                </div>
            </div> 
        </div> 
    </section> -->


    <section id="about" class="about-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-25">
                        <h3 class="title">About Us</h3>
                        <p class="text">All you need to know about us</p>
                    </div> 
                </div>
            </div> 
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-xl-6 col-lg-6">
                      <div class="about__3-img-wrapper p-relative mb-60">
                         <!-- <div class="about__3-top w-img">
                            <img src="assets/images/about/aboutN.jpg" alt="About">
                         </div> -->
                         <div class="about__3-main w-img">
                            <img src="assets/images/about/aboutL.jpg" alt="About">
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-6 col-lg-6">
                      <div class="about__3-content mb-60">
                         <div class="section__title mb-30">
                            <!-- <span class="sub-title">about us</span> -->
                            <h2 class="title">FF Technical Solutions involved in <br> servicing, maintenance.</h2>
                         </div>
                         <div class="about__3-content-inner p-relative">
                            <div class="about__3-content-left">
                               <p>
                                  FF Technical Solutions is a global provider of professional integration, development and maintenance solutions. We are committed to providing superior service and customized customer solutions.
                               </p>
                               <p>
                                  FF Technical Solutions offers and sets up a wide range of solutions for businesses, education institutions and the government.
                               </p>
                               
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             
        </div> 
    </section>
   
    <!--====== PRINICNG ENDS ======-->
    
    <!--====== ABOUT PART START ======-->

    

    <!--====== ABOUT PART ENDS ======-->
    

    
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Contact</h3>
                        <p class="text">Contact us for great service</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-map mt-30">
                    <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.7817393681994!2d72.83320902138357!3d33.68871529158463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa3d977da201d%3A0x184074d5941b956!2sParis%20Heights!5e0!3m2!1sen!2s!4v1668759267218!5m2!1sen!2s" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div> <!--row-->
                </div>
            </div> <!-- row -->
            <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">Masjid Rahmat Ul Alamin, Near Gate 2, <br>B-17 Islamabad.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">contact@fftechsol.com</p>
                                <p class="text">support@fftechsol.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                            <div class="contact-info-icon">
                                <i class="lni lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+92 346 5430413</p>
                                <p class="text">+92 312 5193127</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Leave <span>A Message.</span></h4>
                        
                        <form id="contact-form" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Name</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Name">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Email</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input mt-25">
                                        <label>Massage</label>
                                        <div class="input-items default">
                                            <textarea name="message" placeholder="your message"></textarea>
                                            <i class="lni lni-pencil-alt"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <input type="submit"  name="send" value="submit" class="main-btn light-rounded-two">
                                        <?php if (!empty($message)){?>
                                        <div class="success" >
                                            <strong><?php echo $message;?></strong>
                                        </div>
                                        <?php } ?>
                                    
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->
    
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                    <a class="mt-30" href="index.php">
  <img src="assets/images/fftech.svg" alt="Logo" style="width: 100px; height: 100px;">
</a>

                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+92 346 5430413</span>
                        <span class="mail">support@fftechsol.com</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <p class="text">Designed by FF Technical Solutions Team </p>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->    

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    
    <!--====== Isotope js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <script src="assets/js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUA57ugsOg6LZr_6Xbd8go7XnVk3AWcdc&callback=myMap"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
   <script src="assets/js/mixitup.min.js"></script>

    <script>
		
		$(document).ready(function(){

			// portfolio nav
			$('.portfolio-nav li').click(function(){
				$('.portfolio-nav li').removeClass('active')
				$(this).addClass('active')
			})

			// mixitup
			var containerEl = document.querySelector('.portfolioContainer');

            var mixer = mixitup(containerEl, {
                animation: {
                    animateResizeContainer: false // required to prevent column algorithm bug
                }
            });

            // portfolio overlay
            	$('.zoom-port').on('click',function(e){
            		var clickedId= $(this).attr("id");
      				// alert(clickedId);
	               $('#'+clickedId).fadeIn();
	               e.stopPropagation();
	             });

	             

             	$('.port-close').on('click',function(e){
               		$('.port-overlay').fadeOut();
               		e.stopPropagation();
             	});

		})

	</script>
    
</body>

</html>
