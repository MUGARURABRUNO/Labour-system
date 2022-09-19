
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
                                 <li class="nav-item">
                                    <a class="nav-link" href="testimonial.php">Testimonials</a>
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
                           <li><a class="sign_btn" href="sign-out.php">Sigin Out</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
     
    
      <div id="contact" class="contact ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2><strong class="yellow">View Employee</strong><br>Employee Report</h2>
                  </div>
               </div>
            </div>

            <?php 
            if(isset($_GET['employee'])){
               $eid = $_GET['eid'];

             $sql_fetch="SELECT * FROM employee where eid='".$_SESSION['eid']."'";
             $sql_query=mysqli_query($conn, $sql_fetch);
             $rows=mysqli_fetch_assoc($sql_query);
            
            ?>
            
                  <table border="1">
                     <tr> 
                     <td>Employee Id</td>
                     <td><?php echo $rows['eid']?></td>
                  </tr>
                     <tr>
                     <td>First Name</td>
                     <td><?php echo $rows['firstName']?></td>
                  </tr>

                  <tr>
                     <td>Last Name</td>
                     <td><?php echo $rows['lastName']?></td>
                  </tr>

                     <tr>
                     <td>Nin</td>
                     <td><?php echo $rows['nin']?></td>
                  </tr>

                     <tr>
                     <td>Age</td>
                     <td><?php echo $rows['age']?></td>
                  </tr>
                  <tr>
                     <td>Contact</td>
                     <td><?php echo $rows['contact']?></td>
                  </tr>

                     <tr>
                     <td>Address</td>
                     <td><?php echo $rows['address']?></td>
                  </tr>

                     <tr>
                     <td>Email</td>
                     <td><?php echo $rows['email']?></td>
                  </tr>
                     <tr>
                     <td>Next Of Kin</td>
                     <td><?php echo $rows['next_of_kin']?></td>
                  </tr>
                  <tr>
                     <td>Employer</td>
                     <td><?php echo $rows['employer']?></td>
                  </tr>
                  <tr>
                     <td>Job</td>
                     <td><?php echo $rows['job']?></td>
                  </tr>
                  <tr>
                     <td>Contract</td>
                     <td><?php echo $rows['contract']?></td>
                  </tr>
                  <tr>
                     <td>Salary</td>
                     <td><?php echo $rows['salary']?></td>
                  </tr>
                  <tr>
                     <td>
                        <button onclick="window.print()">PRINT</button>
                     </td>
                  </tr>
                  </table>
               </div>
               <?php
               }
               ?>
            </div>
    
      <footer >
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2022 All Rights Reserved. TMIS</a></p>
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
