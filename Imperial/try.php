

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    
  <title>Hegnus</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="bootstrap/animate.css-master.zip/animate.css-master/animate.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Imperial - v3.0.0
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <!-- ======= Hero Section ======= -->
    <style >
/*
.container {
  position: relative;
  width: 100%;
}
*/

        .container.img{
            margin-top: 5px;
        }        
        
        
.image {
  opacity: 1;
  display: block;
  width: 50%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}
    /*glow*/
        
.glow {

  font-size: 40px;
      max-width: 100%;
  color: #fff;
/*  text-align: center;*/
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #026075, 0 0 20px #33ccff, 0 0 30px #33ccff, 0 0 40px #33ccff, 0 0 50px #33ccff, 0 0 60px #026075, 0 0 70px #003642;
  }
  
  to {
    text-shadow: 0 0 20px #026075, 0 0 30px #33ccff, 0 0 40px #33ccff, 0 0 50px #33ccff, 0 0 60px #33ccff, 0 0 70px #026075 , 0 0 80px #003642;
  }
}
 
/*
@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #006fbf, 0 0 20px #004678, 0 0 30px #006fbf, 0 0 40px #006fbf 0 0 50px #33ccff, 0 0 60px #003642, 0 0 70px #004678;
  }
  
  to {
    text-shadow: 0 0 20px #006fbf, 0 0 30px #004678, 0 0 40px #006fbf, 0 0 50px #33ccff, 0 0 60px #33ccff, 0 0 70px #003642 , 0 0 80px #004678;
  }
}       
*/

        
        
        
        .grid-container {
  display: grid;
  justify-content: space-evenly;
  grid-template-columns: 150px 150px 150px; /*Make the grid smaller than the container*/
  grid-gap: 10px;
  background-color: black;
  padding: 20px;
}

.grid-container > div {
/*  background-color: rgba(255, 255, 255, 0.8);*/
    background-color: black;
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
        
/*
        
        
 * {
        box-sizing: border-box
      }
      body {
        font-family: Verdana, sans-serif;
        margin: 0
      }
      .mySlides {
        display: none
      }
      img {
        vertical-align: middle;
      }
      .slideshow-container {
        max-width: 1600px;
        position: relative;
        margin: auto;
      }
*/
      /* Next & previous buttons */
/*
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
*/
      /* Position the "next button" to the right */
/*
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
*/
      /* On hover, add a black background color with a little bit see-through */
/*
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }
*/
      /* Caption text */
/*
      .text {
        color: #ffffff;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
*/
      /* Number text (1/3 etc) */
/*
      .numbertext {
        color: #ffffff;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
*/
      /* The dots/bullets/indicators */
/*
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #999999;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }
      .active,
      .dot:hover {
        background-color: #111111;
      }
*/
      /* Fading animation */
/*
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }
      @-webkit-keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      @keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
*/
      /* On smaller screens, decrease text size */
/*
      @media only screen and (max-width: 300px) {
        .prev,
        .next,
        .text {
          font-size: 11px
        }
      }        
        
*/

        


@keyframes slider {
	0% {
		left: 0;
	}
	20% {
		left: 0;
	}
	25% {
		left: -100%;
	}
	45% {
		left: -100%;
	}
	50% {
		left: -200%;
	}
	70% {
		left: -200%;
	}
	75% {
		left: -300%;
	}
	95% {
		left: -300%;
	}
	100% {
		left: -400%;
	}
    
}            
        
            
            
</style>
 </head>

<body>
   
           
            <header id="header">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo mr-auto"><img src="assets/img/logoh3.png" alt=""></a>
            <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Products</a></li>
<!--          <li><a href="#team">Team</a></li>-->
          <li><a href="#testimonials">Testimonials</a></li>
          <li ><a href="#features">Features</a>
    
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
                </div>
            </header>
    
     <main id="main">
    
   

<header>
   

      
	<div id="slider" style="overflow: hidden;">
		<figure style="position: relative;
	width: 500%;
	margin: 0;
	left: 0;
	animation: 20s slider infinite;">
            
			<img src="assets/img/Screenshot%20(185).png" style="width: 20%;
	float: left;">
			<img src="assets/img/Screenshot%20(186).png" style="width: 20%;
	float: left;">
			<img src="assets/img/Screenshot%20(187).png" style="width: 20%;
	float: left;">
			<img src="assets/img/Screenshot%20(188).png" style="width: 20%;
	float: left;">
			<img src="assets/img/Screenshot%20(189).png" style="width: 20%;
	float: left;">
            

<!--

            <img src="assets/img/Screenshot%20(190).png" style="width: 20%;
	float: left;">
-->


		</figure>
	</div>

      
      
      
    <!-- ======= About Section ======= -->
    <section id="about" style="background-color: whitesmoke">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
              <center> <h2 class="about-title" style="font-size: 35px;">About Us</h2></center>
              
            <div class="section-title-divider"></div>
            <h4 class="section-description">Hegnus manufactures automation and security devices,that makes your homes smart,secure and comfortable.<br/><br/>All at your fingertips.our ultimate goal is to see our products in every indian home</h4><br/>
          </div>
        </div>
      </div>
      <div class="container about-container wow fadeInUp">
        <div class="row">

          <div class="col-lg-6 about-img">
            <img src="assets/img/about-img.jpg" alt="">
          </div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
          <div class="col-md-6 about-content">
            <h2 class="about-title">Our Vision & Mission</h2>
            <p class="about-text">
                 <a href="#">
                     <span class="glyphicon glyphicon-phone"></span></a>&nbsp;&nbsp;
                We Believe That We Are Leading Routing Life. We Are Using Routine Products That’s Not Changing. We Are Constantly Focusing On Innovating We Believe In The Simple Not The Complex. We Belive That We Need To Own And Control The Primary Technologies Behind The Products, That We Make And Participate Only In Market Where We Can Make A Significant Contribution. </p>
              
               <p class="about-text"> 
                   <a href="#">
          <span class="glyphicon glyphicon-cog"></span>
        </a>&nbsp;&nbsp;
                We Belive In Saying No To Thousands Of Projects, So That We Can Really Focus On The Few That Are Truely Important And Meaningful To Us. To Have Our Product In Every Home In India.
            </p>
            <p class="about-text">
                <a href="#">
          <span class="glyphicon glyphicon-briefcase"></span>
        </a>&nbsp;&nbsp;
              Our Company’s Goal Is To Enhance The Core Functions Of Homes To Make Them More Smarter,More Efficient And More Comfortable.
            </p>
            
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
<!--            <h3 class="section-title">Our Services</h3>-->
              
              <center> <h2 class="about-title" style="font-size: 35px;"><b>Our Services</b></h2></center>
              
            <div class="section-title-divider"></div>
<!--            <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>-->
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-desktop"></i></div>
            <h3 class="service-title"><a href="pry1.html">Home Automation</a></h3>
            <p class="service-description">We all want convenience in our homes.What better way to do it other than technology,we provide you with a wide range of home automation products to make your home smart home.</p>
          </div> 
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
            <h3 class="service-title"><a href="q.html">Security Services</a></h3>
            <p class="service-description">Security is one of the principal concerns of many people and is very troublesome to manage.So we help you through the process of upgrading your home security using our wide range of security services and products.</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
            <h3 class="service-title"><a href="w.html">Agriculture Automation</a></h3>
            <p class="service-description">IoT based automation using various types of sensors so that a system is built for monitoring the crop field is highly efficient than conventional methods.Not only for larger fields but also for a home grown backyard spice garden this kind of IoT based system is efficient and easy </p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-photo"></i></div>
            <h3 class="service-title"><a href="of.html">Office Automation</a></h3>
            <p class="service-description"> In a workspace ,even a slight increase in efficiency can have a great turnout so an office space equipped with IoT devices ,and thus connected to the internet,is the epitome of highly productive office space. </p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-road"></i></div>
            <h3 class="service-title"><a href="ind.html">Industrial Automation</a></h3>
            <p class="service-description">Automation is one of the increasing requirements within industries as well as for domestic applications.So Automating your industry can reduce the human efforts by replacing it by a system which is self-operated.</p>
          </div>
          <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
            <h3 class="service-title"><a href="cust.html">Customized Automation</a></h3>
            <p class="service-description">From private homes to large companies we can automate any requirements of yours.We can customize and construct the products according to your needs and necessities.</p>
          </div>
            <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
            <h3 class="service-title"><a href="pr.html">Private Sector Automation</a></h3>
            <p class="service-description"></p>
          </div>
             <div class="col-md-4 service-item">
            <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
            <h3 class="service-title"><a href="ho.html">Hotel/Resorts Automation</a></h3>
            <p class="service-description">With comfort and ease being the main motive of hotelsand resorts our IoT systems can offer luxury experiences with the implementation of IoT in the hospitality business,these amenities seem almost like an upgrade for free. </p>
          </div>
             
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Subscrbe Section ======= -->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-8">
            <h3 class="subscribe-title">Contact and Manage your Internet of Things products within minutes.... </h3>
<!--            <p class="subscribe-text"></p>-->
          </div>
          <div class="col-md-4 subscribe-btn-container">
            <a class="subscribe-btn" href="#cont">Contact Now</a>
          </div>
        </div>
      </div>
    </section><!-- End Subscrbe Section -->
      
      
<!--      <section style="background-color: black;">-->

<!--
        <div class="row">

          <div class="col-lg-6 about-content">
            
            <h1 class="glow"><i class="fa fa-tachometer" style="font-size:50px;color:white"></i>&nbsp;&nbsp;speed</h1>
            </div>
         
           
          
         
                <div class="col-lg-6 about-content">
                <h1 class="glow">accurate</h1>
              </div>
          
     
          <div class="col-lg-6 about-content">
            <h1 class="glow">easy</h1>
              </div>
          </div>

          
      </section>
-->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
<!--            <h3 class="section-title">Products</h3>-->
              
              
                <center> <h2 class="about-title" style="font-size: 35px;"><b>Products</b></h2></center>
              
              
              
            <div class="section-title-divider"></div>
            <p class="section-description">Si stante, hoc natura videlicet vult, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
          </div>
        </div>

<!--
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>
-->

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="fa fa-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="fa fa-link fa-flip-horizontal"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
     
<div class="row">
  <div class="column" style="background-color:whitesmoke;padding: 10px;">
    <h1 style="margin-left:  10%;"><b>How it works</b></h1><br/><br/>
      <div style="margin-left:  20%;">
      <h4><b>
          <i style='font-size:24px' class='fas'>&#xf245;</i> &nbsp;&nbsp;</b><b> Step 1: Pick a Home Automation Theme</b><br/><br/><p>Explore the concepts and use-cases to find a theme that's intresting to you</p></h4><br/>
      
      <h4><b><i style='font-size:24px' class='far'>&#xf044;</i></b><b>&nbsp; &nbsp;Step 2: Pick your desired pack/Device of your choice </b><br/><br/><p>Based on your home design and your need pick best customized devices</p> </h4><br/>
      
      <h4><b> <i style='font-size:24px' class='fas'>&#xf085;</i></b><b>&nbsp;&nbsp;Step 3: Schedule Installation at Your Conveniance </b><br/><br/><p> We ship the smart home protects to you </p></h4>
      </div>
  </div>
    
  <div class="column" style="background-color:whitesmoke;">
      
    <img src="https://www.pngitem.com/pimgs/m/387-3877427_vector-marketing-training-seminar-internet-learning-hd-png.png"  width=100%>
  </div>
</div>
         <br/>
         <br/> 
    </section><!-- End Testimonials Section -->
    
    <section id="features">  
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      
        <h1 style="text-decoration-color: white; text-align: center;"><b>OUR TECHNOLOGY</b></h1><br/>
      
<div class="grid-container">
<!--
    <div><p class="glow">
        <i class="fa fa-tachometer" style="font-size:50px;color:white"></i> &nbsp;&nbsp;Fast</p></div>
-->
    
<!--
    <div><p class="glow" >
        <br/><br/><br/>
        <span class="glyphicon">&#xe230;</span>&nbsp;&nbsp;Fast&nbsp;&nbsp;</p>
        <br/>
    <p style="color:aliceblue;font-size: 15px; ">We have an express system in delivering orders.We believe in fast turn-around time, we help you seamlessly save time.</p>
    </div>
    
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <div>
        <br/><br/>
        <p class="glow"><i class='fas fa-shield-alt' style='font-size:48px;color:white'></i>Secure</p>
        <br/>
        <p style="color:aliceblue;font-size: 15px; ">Security is the principal motive for us,we deliver products with the utmost security.Your protection is our prime concern</p>
        
    </div>
    
    <div>
        
        <p class="glow"><i class='far fa-thumbs-up' style='font-size:48px;color:white'></i>&nbsp;&nbsp;&nbsp;Easy&nbsp;&nbsp;</p>
    <br/>
     <p style="color:aliceblue;font-size: 15px; ">Our streamlined ordering process makes it one of the most straightforward processes which you can ever seek for.</p>
        
    </div>  
-->
 
   
    <div><p class="glow" >
        <br/>
        <span class="glyphicon">&#xe230;</span>&nbsp;Fast&nbsp;&nbsp;</p>
        <br/>
    <p style="color:aliceblue;font-size: 15px;text-align: left; ">We have an express system in delivering orders.We believe in fast turn-around time, we help you seamlessly save time.</p>
    </div>
    
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <div>
        <br/>
        <p class="glow"><i class='fas fa-shield-alt' style='font-size:48px;color:white'></i>Secure</p>
        <br/>
        <p style="color:aliceblue;font-size: 15px;text-align: left; ">Security is the principal motive for us,we deliver products with the utmost security.Your protection is our prime concern</p>
        
    </div>
    
    <div>
        <br/>
        <p class="glow"><i class='far fa-thumbs-up' style='font-size:48px;color:white'></i>&nbsp;Easy&nbsp;&nbsp;</p>
    <br/>
     <p style="color:aliceblue;font-size: 15px; text-align: left;">Our streamlined ordering process makes it one of the most straightforward processes which you can ever seek for.</p>
        
    </div>  
  
    
    
    
    
    
    
    
</div>
      </section>
<section>
    <br/>
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
         </section>


      
      <section id="cont" style="background-color: grey;">
          <br/> <br/>
          <h1 style="text-align: center;color: black;"><b>JUST YOU ARE ONE CALL AWAY </b></h1> <br/> 
          <h2 style="text-align: center;color: white;">CONTACT US @ +91 8019933883
/ +91 9581086798</h2>
           <br/> <br/>
      </section>
      
      <section>
    <br/>
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
         </section>
      
      <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
<!--            <h3 class="section-title">Contact Us</h3>
-->
              
              
                <center> <h2 class="about-title" style="font-size: 35px;"><b>Contact Us</b></h2></center>
              
            <div class="section-title-divider"></div>
<!--            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4" style="margin-top:60px;">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Seethammadhara<br>,vizag</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>satish@hegnus.com<br/>
sekhar@hegnus.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+91 8019933883<br/>
+91 9581086798</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
              
<!--
              <div class="wrapper">

  <div id="error_message">
     
  </div>
  <form action="" id="myform" onsubmit = "return validate();">
    <div class="input_field">
        <input type="text" name="name" placeholder="Name" id="name">
    </div>
    <div class="input_field">
        <input type="text" name="subjet" placeholder="Subject" id="subject">
    </div>
    <div class="input_field">
        <input type="text" name="phone" placeholder="Phone" id="phone">
    </div>
    <div class="input_field">
        <input type="text" name="email" placeholder="Email" id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" name="message" id="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit" name="submit">
    </div>
  </form>
</div>
-->
              
<!--            <div class="form">-->
<!--              <form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
        

               <form method="post" id="myform" action="co.php" id="myform"  onsubmit = "return validate();">
                  
        <div class="ridge">
            <table align="center">
             
               <div >
                  <tr>
                    
                     <td> <input type="text" size="50" name="name" id="name" placeholder="Your name"
                      pattern="[a-zA-Z ]{4,}" title="Only letters allowed">
<!--                         minlength="4" required -->
                         <br/><br/></td>
                  </tr>
                 
                 
                  <tr>
                     
                     <td>
                         

                         <input type="email" size="50" id="email" name="email" placeholder="Your email"
                        autocomplete="email" pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[A-Za-z0-9.-]+\.+(com)"        
                                
                            
                     title="check the email pattern" required/>

                         
                         
<!--                         <input type="email" placeholder="" autocomplete="email" pattern="[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[A-Za-z0-9.-]+\.+(com)" maxlength="256" required>-->

                               
                         <br/><br/></td>
                     
                    
                  </tr>
                   
                    <tr>
                    
                     <td><input type="text" size="50" name="phone" id="phone" placeholder="Phone"
                     pattern="[0-9]{10}" title="Enter only 10 digits"             
                     required /><br/><br/></td>
                     
                    
                  </tr>
                  
                    <tr>
                  
                     <td><input type="text" size="50" id="subject" name="subject" 
                            pattern="[a-zA-Z0-9 ]{4,}" 
                                title="Only letters allowed" 
                                placeholder="Subject"
                        required><br/><br/></td>
                     
                    
                  </tr>
                  
                   
                   
                  
                  <tr>
                    
                     <td> <textarea rows="5" cols="53" size="50" name="message" id="message" 
            pattern="[a-zA-Z0-9 ]{4,}"                                  title="Only letters allowed"
                         placeholder="Message "  required > </textarea><br/><br/></td>
                  </tr>
                  <tr>
                     <td><input type="submit" name="submit" value="Send message"></td>
                    
                  </tr>
                  <br/>
               </div>
            </table>
         </div>
      </form>

                

    




                <script>
                    
                    
function validate() {
  alert("Thank you for contacting us");
}
</script>


            </div>
          </div>

        </div>
<!--      </div>-->
        
        
        
        
    
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
          -->
            Designed by <a href="">Sujana</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    
    
<!--    <script type="scripts.js"></script>-->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
