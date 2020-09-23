<?php
   $db_hostname = 'localhost';
   
   $db_username = 'root';
   
   $db_password = '';
   
   $db_server = mysqli_connect($db_hostname, $db_username, $db_password);
   
   if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
   
   mysqli_select_db($db_server,'register')
   
   or die("Unable to select database: " . mysqli_error());
   
   if(isset($_POST["submit"]))
   
   {    
  
       $name=$_POST['name'];
   
      $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
      
       if (!preg_match("/^[a-zA-Z]*$/",$name))
   {
   $msg8 = "Only letters are allowed in user name field...";
   echo "<script type='text/javascript'>
      alert('$msg8');
   </script>";
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
   {
   $msg4 = "Invalid email format...";
   echo "<script type='text/javascript'>
      alert('$msg4');
   </script>";
   }
       
      
else{
    
    $query = "INSERT INTO contact (name, email, subject,message)VALUES ('$name', '$email','$subject','$message')";
   
       if (mysqli_query($db_server, $query))
   
       {
           
//         
      
           
//       $result='<div class="alert alert-success">Thank You! I will be in touch</div>';   
        
//           
//             echo "<script>
//   alert('Successful');
//   </script>";         
           
           

           header("Location:index.php");
                  
//    header("Location:index.php");       
//        
       }
   
       else
   
       {
            header("Location:err.html");
//   
//          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
       }
}
   
   }

?>


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
    <style>
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
        
        
        
        
        

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 500px; /* Should be removed. Only for demonstration */
}
/*
        row{
            width:50%;
            height: 500px;
        }
*/

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}  
        @media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
    
            
            
 
            
</style>
 </head>

<body>
   
            <header id="header">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/logoh3.png" alt=""></a>
            <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Products</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li ><a href="#features">Features</a>
    
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
                </div>
            </header>
    
     <main id="main">
    
    
    <!-- Navigation -->
<!--
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >

  <div class="container" id="navbar">
      <div style="margin-bottom: 20px;">
    <a class="navbar-brand" href="#index"><img src="assets/img/HEGNUS%20.png" style="width:40%;"></a>
      </div>
      
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     <b>
    <div class="collapse navbar-collapse" id="navbarResponsive" style="padding:10px;">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#index"> &nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about"> About&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services"> Services&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="#services"> Products&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
          
           <li class="nav-item">
          <a class="nav-link" href="#services"> Testimonials&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
          
          
           <li class="nav-item">
          <a class="nav-link" href="#services">   Features&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
          
           <li class="nav-item">
          <a class="nav-link" href="#services"> Team&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact"> Contact</a>
        </li>
      </ul>
    </div>
      </b>
  </div>
</nav>
-->

<header>
    <section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url(assets/img/hegnus.jpg)">
          
    
          <center>
              
            <img src="assets/img/logoh3.png" style="width: 40%;margin-top: 150px;">
              
              <br/>
              <meta content="width=device-width, initial-scale=1.0" name="viewport">
              <center>
              <h2 class="glow">ALWAYS DELIVER MORE THAN EXPECTED</h2>
              </center>
<!--              <h3 style="color:white">Automate Your Lives With Us  </h3>-->
               <h3 style="color:white;">Automate Your <span class="typed" data-typed-items="Lives With Us"></span></h3>
               <div class="actions">
<!--
                   <button>  <a href="#about" class="btn-get-started">Get Strated</a></button>
                   <button style="color: white;background-color:  #03C4EB;padding: 16px;transition: 0.5s;
  border: 1px solid #03C4EB;
}"><a href="#services" >Our Services</a></button>
-->
        </div>
              
              
            </center>
          
         
<!--
        <div class="carousel-caption d-none d-md-block">
         <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
-->
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(assets/img/ph.jpg);background-size: cover;">
       
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url(assets/img/tab.jpg)">
        
      </div>
        
        <div class="carousel-item" style="background-image: url(assets/img/hom.jpg)">
        
      </div>
        
        <div class="carousel-item" style="background-image: url(assets/img/cam.jpeg)">
       
      </div>
        
        
          
           
          <div class="carousel-item" style="background-image: url(assets/img/aut.jpg)">
        
      </div>
           
           
        
        
        
        
        
        
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
        
</header>


    
    </section>
    
      
      
      
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
  <div class="column" style="background-color:whitesmoke;padding: 50px;">
    
      <h1><b>How it works</b></h1><br/><br/>
      <div style="margin-left:  20%">
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


    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-md-12">
<!--            <h3 class="section-title">Our Team</h3>-->
              
                <center> <h2 class="about-title" style="font-size: 35px;"><b>Team</b></h2></center>
              
            <div class="section-title-divider"></div>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-1.jpg" alt=""></div>
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-2.jpg" alt=""></div>
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-3.jpg" alt=""></div>
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-4.jpg" alt=""></div>
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Team Section -->
      
      <section id="cont" style="background-color: black">
          <br/> <br/>
          <h1 style="text-align: center;color: white;"><b>JUST YOU ARE ONE CALL AWAY </b></h1> <br/> 
          <h2 style="text-align: center;color: white;">CONTACT US @ 8625645910</h2>
           <br/> <br/>
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
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
<!--              <form action="forms/contact.php" method="post" role="form" class="php-email-form">-->
         <form action="" method="post" role="form"         
          >
<!--             onsubmit="myFunction()"-->
                
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" min="4" required>
                 
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required >
                 
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" min = 4 required>
                  
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5"  placeholder="Message" min= 4 required></textarea>
                  
                </div>
<!--
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
-->
             <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
              
        </div>
    </div>
             
             
                <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
              </form>
<!--

                <script>
function myFunction() {
  alert("Thank you for contacting us");
}
</script>
-->

            </div>
          </div>

        </div>
      </div>
        
        
        
        
    
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



<!--
<style>
	.bs-example{
    	margin: 20px;
    }
</style>
-->

<?php
   $db_hostname = 'localhost';
   
   $db_username = 'root';
   
   $db_password = '';
   
   $db_server = mysqli_connect($db_hostname, $db_username, $db_password);
   
   if (!$db_server) die("Unable to connect to MySQL: " . mysqli_error());
   
   mysqli_select_db($db_server,'register')
   
   or die("Unable to select database: " . mysqli_error());
   
//   if(isset($_POST["submit"]))
   
   {    
  
       $name=$_POST['name'];
   
      $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
//      
//       if (!preg_match("/^[a-zA-Z]*$/",$name))
//   {
//   $msg8 = "Only letters are allowed in user name field...";
//   echo "<script type='text/javascript'>
//      alert('$msg8');
//   </script>";
//           
//   }
//   else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
//   {
//   $msg4 = "Invalid email format...";
//   echo "<script type='text/javascript'>
//      alert('$msg4');
//   </script>";
//   }
//       
//      
//else{
//    
    $query = "INSERT INTO contact (name, email, subject,message)VALUES ('$name', '$email','$subject','$message')";
   
       if (mysqli_query($db_server, $query))
   
       {
     echo"<script>alert('thankyou for contacting')</script>";
            header("Location:index.php");
//         
      
           
//       $result='<div class="alert alert-success">Thank You! I will be in touch</div>';   
        
//           
           
          
                  
//    header("Location:index.php");       
//        
       }
   
       else
   
       {
            header("Location:err.html");
//   
//          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
       }
}
   
//   }
   
  
   
   ?>