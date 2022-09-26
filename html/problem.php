<?php 
include "config.php";

if (isset($_POST['SUBMIT'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $contact = $_POST['contact'];
   $address = $_POST['address'];
   $password = $_POST['password'];
   $link = $_POST['link'];
   $problem = $_POST['problem'];
   $description = $_POST['description'];


   $image_name= $_FILES['pic']['name'];
   $file_tmp= $_FILES['pic']['tmp_name'];
          //   image Upload
     move_uploaded_file($file_tmp,"images/".$image_name); 

   // $query=mysqli_query($conn,"SELECT * FROM agency WHERE email=  '$email'");
   // if(mysqli_num_rows($query)>0){
   //     echo "Email Already Exists";
   // }else{

   $sql_insert = "INSERT INTO `problem`( `name`, `email`, `contact`, `address`, `pic`, `link`, `problem`, `description`) VALUES ('$name','$email','$contact','$address','$image_name','$link','$problem','$description')";

     if (mysqli_query($conn, $sql_insert)) {

   //   echo "Data Inserted";
   header("Location: problem.php?success=You have submitted Succesfully");
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
                           <li><i class="fa fa-globe" aria-hidden="true"></i> Language : <img src="images/fleg.png" alt="#"/></li>
                        </ul>
                        <form action="#" >
                           <div class="select-box">
                              <label for="select-box1" class="label select-box1"><span class="label-desc">English</span> </label>
                              <select id="select-box1" class="select">
                                 <option value="Choice 1">English</option>
                                 <option value="Choice 1">Falkla</option>
                                 <option value="Choice 2">Germa</option>
                                 <!-- <option value="Choice 3">Neverl</option> -->
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
                     <div class="col-md-4 col-sm-4 " >
                        <a class="logo" href="#"><img src="images/tmis.png" alt="#"/></a>
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
                                 <li class="nav-item ">
                                    <a class="nav-link" href="index.php"> Home  </a>
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
                                    <a class="nav-link" href="help.php">help desk</a>
                                 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="contact.php"> contact us </a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="col-md-3 col-sm-5 d_none">
                     <ul class="sign">
                           <li><a class="sign_btn" href="pages-sign-in.php">Login</a></li>
                           
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
 
      <!-- contact  section -->
      <div id="contact" class="contact ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="yellow"></strong><br>Have a problem</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
               <form action="" method="Post" enctype="multipart/form-data">
             

                                 <div class="mb-3">
												<label class="form-label">Name</label>
												<input class="form-control form-control-lg" type="text" name="name" placeholder="Agency name.." required />
											</div>
											<div class="mb-3">
												<label class="form-label">Email</label>
												<input class="form-control form-control-lg" type="email" name="email" placeholder="Your email.." required/>
											</div>
                                 <div class="mb-3">
												<label class="form-label">Contact</label>
												<input class="form-control form-control-lg" type="text" name="contact" placeholder="Your Contact.." required/>
											</div>
											<div class="mb-3">
												<label class="form-label">Address</label>
												<input class="form-control form-control-lg" type="text" name="address" placeholder="Your Address.." required/>
											</div>
											<div class="mb-3">
												<label class="form-label">Attach a file</label>
												<input class="form-control form-control-lg" type="file"  name="pic" />
											</div>
                                            <div class="mb-3">
												<label class="form-label">Attach a url/Video Link</label>
												<input class="form-control form-control-lg" type="text" name="link" placeholder="Your Link.." required/>
											</div>
											<div class="mb-3">
												<label class="form-label">Problem</label>
												<input class="form-control form-control-lg" type="text"  name="problem" placeholder=" Your problem..." required/>
											</div>
                                 <div class="mb-3">
												<label class="form-label">Problem Description</label>
												<!-- <input class="form-control form-control-lg" type="date"  name="experience" placeholder="Your Agency experience.." required/> -->
                                    <textarea class="form-control form-control-lg" name="description" id="" cols="30" rows="10"></textarea>
											</div>
											
										
											<div class="text-center mt-3">
												<button type="submit" name="SUBMIT" class="btn btn-lg btn-primary">Submit</button>
											</div>
											<div class="text-center mt-3">
												<a href="index.php" class="btn btn-lg btn-primary">Back</a>
											</div>
										</form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact  section -->
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

 if (isset($_POST['REGISTER'])) {
  $a_name = $_POST['a_name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $experience = $_POST['experience'];
  $image = $_POST['image'];
  $password = $_POST['password'];
  

  $sql_insert = "INSERT INTO `agency`(`a_name`,`email`,`address`,`experience`,`image`,`password`) VALUES ('$a_name','$email','$address','$experience','$image','$password')";
  $sql_query = mysqli_query($conn, $sql_insert);
  if ($sql_query == TRUE) {
    echo "successful";
    // header('location: pages-clients.html');
  } else {
    echo mysqli_error($conn);
  }
}
?>