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
      header("Location: login.php?error=Oops, User does not exist!!");
    }
    
  }      
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible", content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body style="background-color:#0071b5">
  <div >
      <a href="index.php">
      <img width="40px;" height="40px;" style="margin-left: -600%;" src="images/back.png" alt="back">
  </a>
  </div>


    <div class="wrapper">
<section class="form login">
    <!-- <header style="text-align: center;"><p style="margin-top:-20%"><img src="images/tmis.png" style="margin-right:100px;"></p>Login</header> -->
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error" style="background-color:red; color:white; padding:3px; border-radius:12px; width:50%; margin-left:70px;"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
    <form action="" method="post" enctype="multipart/form-data" >
        <!-- <div class="error-txt">This is an error message</div> -->
       
  
        <div class="name-details">

            <div class="field input">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your Email Address">
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="password" name="password" autocomplete="current-password" class="fa fa-eye" required="" id="id_password>
                <i class="fa fa-eye" id="togglePassword" ></i>
<script>
                const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>

            </div>
            <div class="field button">
                <input type="submit" name="SignIn" value="Login">
        </div>
    </form>
    <!-- <div class="link">Not yet  signed up? <a href="#">Signup now</a></div> -->
</section>
    </div>
</body>
</html>
