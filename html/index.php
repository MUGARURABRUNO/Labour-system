<?php 
include "config.php";

if (isset($_POST['REGISTER'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];
   // $experience = $_POST['experience'];
   // $password = $_POST['password'];

   $profile= $_FILES['photo']['name'];
   $file_tmp= $_FILES['photo']['tmp_name'];
          //   image Upload
     move_uploaded_file($file_tmp,"images/".$profile); 

   // $query=mysqli_query($conn,"SELECT * FROM agency WHERE email=  '$email'");
   // if(mysqli_num_rows($query)>0){
   //     echo "Email Already Exists";
   // }else{

   $sql_insert = "INSERT INTO `testimony`( `name`, `email`, `photo`, `message`) VALUES ('$name','$email','$profile','$message')";

     if (mysqli_query($conn, $sql_insert)) {

   //   echo "Data Inserted";
   header("Location: index.php?success=You have submitted Succesfully");
}else{
// echo "Data not inserted";
// header("Location: header.php?error=Email already taken, register again");
              }
        }

  
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>tmis</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      
      <!-- $i = $_GET['page_no'] * $people_per_page + 1; -->
      <style>

  #stage {
    margin: 1em auto;
    width: 382px;
    height: 292px;
  }

  #stage a {
    position: absolute;
  }
  #stage a img {
    padding: 10px;
    border: 1px solid #ccc;
    background: #fff;
  }

  #stage a:nth-of-type(1) {
    animation-name: fader;
    animation-delay: 4s;
    animation-duration: 1s;
    z-index: 20;
  }
  #stage a:nth-of-type(2) {
    z-index: 10;
  }
  #stage a:nth-of-type(n+3) {
    display: none;
  }

  @keyframes fader {
    from { opacity: 1.0; }
    to   { opacity: 0.0; }
  }

</style>
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="header_to d_none">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <ul class="lan">
                        <li><i class="fa fa-globe" aria-hidden="true"></i> Language : <img src="images/fleg.png" alt="#" /></li>
                     </ul>
                     <form action="#">
                        <div class="select-box">
                           <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                           <select id="select-box1" class="select">
                              <option value="Choice 1">English</option>
                              <option value="Choice 1">Falkla</option>
                              <option value="Choice 2">Germa</option>
                              <option value="Choice 3">Neverl</option>
                           </select>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 col-sm-6 ">
                     <ul class="social_icon1">
                        <li> F0llow Us
                        </li>
                        <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_midil">
            <div class="container">
               <div class="row d_flex">
                  <div class="col-md-4 col-sm-4 d_none">
                     <ul class="conta_icon">
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Us : +256 782710288</a> </li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-4 ">
                     <a class="logo" href="#"><img src="images/tmis.png"  alt="#" /></a>
                  </div>
                  <div class="col-md-4 col-sm-4 d_none">
                     <ul class="conta_icon ">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> tmis@gmail.com</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_bo">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-sm-7">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php"> Home </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">about</a>
                              </li>
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="service.html">services</a>
                              </li> -->
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="team.html">team </a>
                              </li> -->
                              <li class="nav-item">
                                 <a class="nav-link" href="help.php">Help Desk</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php"> contact us </a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-3 col-sm-5 d_none">
                     <ul class="sign">
                        <li><a class="sign_btn" href="login.php">Login</a></li>
                        
                        <!-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
                      
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg">
                  <h1>Promoting rights and <br>Enhancing protection of employees abroad</h1>
                  <span>for your Safety</span>
                  <!-- <p>Showcase your Profile to the world using online CV builder and Get Hired Faster</p> -->
                  <a href="#">About us</a>
               </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <div class="ban_img">
                  <!-- <figure><img src="images/crop.png" alt="#" height="200" /> -->
                  <div id="stage">
                  <a href="images/Premier.jpg"><img src="images/Premier.jpg" width="360" height="270"></a>
                   <a href="images/export.jpg"><img src="images/export.jpg" width="360" height="270"></a>
                   <a href="images/export1.jpg"><img src="images/export1.jpg" width="360" height="270"></a>
                   <a href="images/export4.jpg"><img src="images/export4.jpg" width="360" height="500"></a>
                   <a href="images/export5.jpg"><img src="images/export5.jpg" width="360" height="270"></a>
                   </div>
               
               </figure>
               </div>
            </div>
         </div>
      </div>
      <!-- slider javascript -->
      <script>

  window.addEventListener("DOMContentLoaded", function(e) {

    // Original JavaScript code by Chirp Internet: chirpinternet.eu
    // Please acknowledge use of this code by including this header.

    var stage = document.getElementById("stage");
    var fadeComplete = function(e) { stage.appendChild(arr[0]); };
    var arr = stage.getElementsByTagName("a");
    for(var i=0; i < arr.length; i++) {
      arr[i].addEventListener("animationend", fadeComplete, false);
    }

  }, false);

</script>

 <!-- end slider javascript -->
   </section>
   <!-- end banner -->
   <!-- about section -->
   <div id="about" class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 col-lg-7">
               <div class="about_box">
                  <div class="titlepage">
                     <h2><strong class="yellow"></strong><br> About Us</h2>
                  </div>
                  <p>Tracking and monitoring employees to ensure their safety........</p>
                  <!-- <span>HELP YOUR NEXT CAREER MOVE MORE SMOOTHER AND <br> MORE EFFICIENT</span>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of usingt</p>
                  <span class="try">TRY ONLINE CV BUILDER FOR Free</span> -->
                  <a class="read_morea" href="about.php">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  <h3>In conjuction with ministry of labour, gender and social development</h3>
           
               </div>
            </div>
            <div class="col-md-12 col-lg-5">
               <div class="about_img">
                  <figure><img src="images/gender.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section -->
   <!-- service section -->
   <!-- <div id="service" class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">service</strong><br> WE CAN HELP YOUR business GROW</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon1.png" alt="#" />
                  <h3>DIGITAL marketing</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon2.png" alt="#" />
                  <h3>FINANCIAL PLANING</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon3.png" alt="#" />
                  <h3>DIGITAL marketing</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon4.png" alt="#" />
                  <h3>BUSINESS CONSULTING</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon5.png" alt="#" />
                  <h3>MARKETING RESEARCH</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
                  <img src="images/service_icon6.png" alt="#" />
                  <h3>UX RESEARCH</h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and1500s, </p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
   </div>
   </div> -->

   <!-- service section -->
   <!-- portfolio -->
   <!-- <div class="portfolio">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2><strong class="yellow">PORTFOLIO</strong><br> CHOOSE A PROFESSIONAL DESIGN</h2>
                  <span>Websites</span>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distrib</p>
               </div>
            </div>
         </div>
      </div>
      <div id="myCarousel" class="carousel slide portfolio_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </div> -->
   <!-- end portfolio section -->


   <!-- business  section -->
   <!-- <div class="business">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">CREATE</strong><br>PERSONALISED Business</h2>
                  <p>ss normal distribution of letters, as opposed to using </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon1.png" alt="#" /></i>
                  <h3>23</h3>
                  <p>NOMINATIONS </p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon2.png" alt="#" /></i>
                  <h3>31</h3>
                  <p>AGENCIES</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon3.png" alt="#" /></i>
                  <h3>7</h3>
                  <p>AWARDS</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon4.png" alt="#" /></i>
                  <h3>8</h3>
                  <p>Supported </p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
   </div> -->
   <!-- end business  section -->


   <!-- team  section -->
   <!-- <div id="team" class="team">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">Team</strong><br>We Have a Professional Team of Business Analysts.</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="team" class="carousel slide team_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#team" data-slide-to="0" class="active"></li>
                     <li data-target="#team" data-slide-to="1"></li>
                     <li data-target="#team" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team1.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team2.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <img src="images/team3.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <img src="images/team1.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team2.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team3.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="row">
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team1.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6 d_none1">
                                    <div id="ho_bg" class="team_img ">
                                       <img src="images/team2.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img src="images/team3.png" alt="#" />
                                       <div class="ho_socal">
                                          <ul class="social_icont">
                                             <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                             <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                             <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#team" role="button" data-slide="prev">
                     <i class="fa fa-chevron-left" aria-hidden="true"></i>
                  </a>
                  <a class="carousel-control-next" href="#team" role="button" data-slide="next">
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   
   <!-- end team  section -->
   <!-- testimonial -->
   <!-- <div id="client" class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">testimonial</strong><br>What people say</h2>
               </div>
            </div>
         </div>
      </div>
  
      <div id="testimo" class="carousel slide testimonial_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#testimo" data-slide-to="0" class="active"></li>
            <li data-target="#testimo" data-slide-to="1"></li>
            <li data-target="#testimo" data-slide-to="2"></li>
         </ol>
         
         


 

         <div class="carousel-inner">
            <div class="carousel-item active">
          
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                        <?php
                        // retrieving data
$sql_fetch="SELECT * FROM testimony where 1";
$sql_query=mysqli_query($conn, $sql_fetch);

?>
                           <div class="test_box">
                           <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
  
                              <p><?php echo $rows['message']; ?> </p>
                              <i><img style="width:200px; height200px:" src="images/<?php echo $rows['photo']; ?>" alt="#" /></i> <span><?php echo $rows['name']; ?></span>
                              <?php
}
?>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                        <?php
                        // retrieving data
$sql_fetch="SELECT * FROM testimony where testimony_id='2'";
$sql_query=mysqli_query($conn, $sql_fetch);

?>
                           <div class="test_box">
                           <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
  
                              <p><?php echo $rows['message']; ?> </p>
                              <i><img style="width:200px; height200px:" src="images/<?php echo $rows['photo']; ?>" alt="#" /></i> <span><?php echo $rows['name']; ?></span>
                              <?php
}
?>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> 
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                        <?php
                        // retrieving data
$sql_fetch="SELECT * FROM testimony where testimony_id='3'";
$sql_query=mysqli_query($conn, $sql_fetch);

?>
                           <div class="test_box">
                           <?php
  while($rows=mysqli_fetch_assoc($sql_query)){
  
 ?>
  
                              <p><?php echo $rows['message']; ?> </p>
                              <i><img style="width:200px; height200px:" src="images/<?php echo $rows['photo']; ?>" alt="#" /></i> <span><?php echo $rows['name']; ?></span>
                              <?php
}
?>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
 
   </div> -->
   <!-- end testimonial
        <!-- contact  section -->
        <div id="contact" class="contact ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="yellow">Contact us</strong><br>Share with us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <form id="post_form" class="contact_form" method="POST">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contact_control" placeholder=" Name" type="text" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" placeholder="Email" type="text" name="email"> 
                        </div>
                        
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="text" name="Message">Message </textarea>
                        </div>
                        <div class="col-md-12">
                           <input type="submit" class="send_btn" value="Send" name="send">
                        </div>
                  </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact  section -->

        <!-- team  section -->
        <div id="team" class="team">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="yellow">Partners</strong><br>Our partners</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="team" class="carousel slide team_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#team" data-slide-to="0" class="active"></li>
                        <li data-target="#team" data-slide-to="1"></li>
                        <li data-target="#team" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                       <div id="ho_bg" class="team_img">
                                          <img src="images/labour.jpg"style="width:200px; height:200px;" alt="#"/>
                                          <div class="">
                                             <!-- <ul class="social_icont">
                                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li> <a href="#">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                             </ul> -->
                                          </div> 
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div id="ho_bg"  class="team_img">
                                          <img src="images/labour1.png" style="width:200px; height:200px;" alt="#"/>
                                           <div class="">
                                             <!-- <ul class="social_icont">
                                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li> <a href="#">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                             </ul> -->
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 d_none1">
                                       <div id="ho_bg"  class="team_img ">
                                          <img src="images/labour2.jpg" style="width:200px; height:200px;" alt="#"/>
                                          <div class="">
                                             <!-- <ul class="social_icont">
                                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li> <a href="#">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                             </ul> -->
                                          </div> 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-4 col-sm-6 d_none1">
                                       <div id="ho_bg"  class="team_img ">
                                          <img src="images/labour3.jpg" style="width:200px; height:200px;" alt="#"/>
                                           <div class="">
                                             <!-- <ul class="social_icont">
                                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li> <a href="#">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                             </ul> -->
                                          </div> 
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div id="ho_bg"  class="team_img">
                                          <img src="images/labour4.jpg" style="width:200px; height:200px;" alt="#"/>
                                          <div class="">
                                             <!-- <ul class="social_icont">
                                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li> <a href="#">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                             </ul> -->
                                          </div> 
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                       <div id="ho_bg"  class="team_img">
                                          <img src="images/labour5.png" style="width:200px; height:200px;" alt="#"/>
                                           <div class="">
                                             <!-- <ul class="social_icont">
                                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li> <a href="#">   <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                             </ul> -->
                                          </div> 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                     <a class="carousel-control-prev" href="#team" role="button" data-slide="prev">
                     <i class="fa fa-chevron-left" aria-hidden="true"></i>
                     </a>
                     <a class="carousel-control-next" href="#team" role="button" data-slide="next">
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end team  section -->


   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <a class="logo2" href="#"><img src="images/tmis.png" alt="#" /></a>
               </div>
               <div class="col-lg-5 col-md-6 col-sm-6">
                  <h3>Contact Us</h3>
                  <ul class="location_icon">
                     <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Kampala,
                        <br> 
                     </li>
                     <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>tmis@gmail.com<br></li>
                     <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+256 782710288<br>+256 706090938</li>
                  </ul>
                  <ul class="social_icon">
                     <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                     <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <h3>Menus</h3>
                  <ul class="link_icon">
                     <li class="active"> <a href="index.php"> Home</a></li>
                     <li>
                        <a href="about.php">
                           </i>About Us
                     </li>
                     <!-- <li> <a href="service.html"> </i>Services</a></li> -->
                     <!-- <li> <a href="team.html"></i>Team</a></li> -->
                     <li> <a href="help.php"></i>Help Desk</a></li>
                     <li> <a href="contact.php"></i>Contact us</a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <h3>Services</h3>
                  <ul class="link_icon">
                     <li> <a href="#">Tracking</a></li>
                     <li>
                        <a href="#">
                           </i>Monitoring
                     </li>
                     <!-- <li> <a href="service.html"> </i>Services</a></li> -->
                     <!-- <li> <a href="team.html"></i>Team</a></li> -->
                     <li> <a href="#"></i>Management</a></li>
                     <li> <a href="#"></i>Reports</a></li>
                  </ul>
               </div>
              
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <h3>Newsletter</h3>
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="news" placeholder="Your Email" type="type" name="Your Email">
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2022 All Rights Reserved. TMIS</p>
                     <!-- <a href="https://html.design/"></a> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>

<?php
include 'config.php';

if (isset($_POST['send'])){
   
   $Name = $_POST['Name'];
   $email = $_POST['email'];
   $Message = $_POST['Message'];
      
      
    
   $sql_insert = "INSERT INTO `contact`(`Name`,`email`,`Message`) VALUES ('$Name','$email','$Message')";
   $sql_query = mysqli_query($conn, $sql_insert);
   if ($sql_query == TRUE) {
    echo "successful";
     
   } else {
    echo mysqli_error($conn);
      }
    }

?>