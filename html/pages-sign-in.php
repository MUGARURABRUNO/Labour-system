<?php 
session_start();
include "config.php";


// submitting to the login form
if(isset($_POST['SignIn'])){
  //echo working
  $pass=$_POST['password'];
  // $pass=mysqli_real_escape_string($conn,$user);
  $email=($_POST['email']);
  // $pwd=mysqli_real_escape_string($conn,$pwd);
  


  $sql_fetch=mysqli_query($conn,"SELECT * FROM admin WHERE email='".$email."' AND password='".$pass."'");
  if ($rows=mysqli_num_rows($sql_fetch) > 0) {
   // echo "FOUND";
   session_start();
   $_SESSION['email']=$email;
   $_SESSION['id']="";
   // $_SESSION['fname']=$count['fname'];
   
   header("location: ../admin/enl.php");
  }else{

    $result=mysqli_query($conn,"SELECT * FROM agency WHERE email='".$email."' AND password='".$pass."'");
   if ($rows=mysqli_num_rows($result) > 0) {
    // echo "FOUND";
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['aid']="";
    // $_SESSION['fname']=$count['fname'];
    
    header("location: ../agency/enl.php");
  }
   else{
    header("Location: pages-sign-in.php?error=Oops, User does not exist!!");
  }
  
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
      
      <!-- end header -->
 
      <!-- contact  section -->
      <div id="contact" class="footer ">
         <div class="container">
            <div class="row" >
               <div class="col-md-8 offset-md-2">
            <div class="card" >
					<div class="card-body">
						<div class="m-sm-4">
            <div class="col-md-12">
                     <a class="logo2" href="#"><img src="images/tmis.png" alt="#" /></a>
                  </div>
                  <?php if (isset($_GET['error'])) { ?>
     		<p class="error" style="background-color:red; padding:5px; border-radius:12px; width:50%; margin-left:170px;"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 class="text-center"><br>LOGIN</h2>
                  </div>
               </div>
            </div>
            
		 
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <form id="post_form" class="contact_form" method="POST">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contact_control" placeholder=" Enter Your email" type="type" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contact_control" placeholder="Enter Your Password" type="type" name="password"> 
                        </div>
                        
                        <div class="col-md-12">
                           <input type="submit" name="SignIn" value="SIGN IN" class="send_btn"/>
                        </div>
                  </form>
                  </div>
               </div>
            </div>
            </div>
         </div>
         </div>
      </div>
         </div>
      </div>
      <!-- end contact  section -->
      <!--  footer -->
      
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
