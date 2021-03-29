<?php
  session_start();
  $_SESSION['message']='';
  $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
  //check connection
  if($con->connect_error){
    die("Connection Failed : " . $con->connect_error);
  }
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['password'] == $_POST['confirm-password']){
      $fullname=$con->real_escape_string($_POST['fullname']);
      $username=$con->real_escape_string($_POST['username']);
      $phonenumber=$con->real_escape_string($_POST['phone-number']);
      $email=$con->real_escape_string($_POST['email']);
      $accounttype='Instructor';
      $userpassword=$con->real_escape_string($_POST['password']);

      $sql="SELECT * FROM user WHERE email='$email';";

      $res=$con->query($sql);
      if($res->num_rows > 0){
        echo "<script>alert('This is email is already used !');</script>";
      }
      else{
        $sql= "INSERT INTO user(fullname,username,phone_number,email,account_type,user_password) VALUES('$fullname','$username','$phonenumber','$email','$accounttype','$userpassword');";
      
        if(mysqli_query($con, $sql)){
          $_SESSION['message'] = 'Registeration successfully';
          header("location:instructor_page.php");
        }
        else{
          echo "Error: " . $sql . "<br>" . $con->error;
        }
      }
    }
    else{
      $_SESSION['message'] = 'An error on password or confirm password';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edustage Education</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="themify-icons.css" />
    <link rel="stylesheet" href="./cssfiles/instructor_signup.css" />
  </head>
  <body>
    <!-- Header -->
    <header id="hero">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="./index.php"><img src="img/logo.png" alt="" /></a>
          </div>
          <div class="navigation">
            <nav>
              <ul>
                <li>
                  <a href="#">Categories</a>
                  <!-- Submenu -->
                  <ul>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Mobile Development</a></li>
                    <li><a href="#">Machine Learning</a></li>
                    <li><a href="#">Cyber Security</a></li>
                  </ul>
                </li>
                <li><a href="#">About</a></li>
              </ul>
            </nav>
          </div>
          <div class="search">
            <input class="searchinput" type="text" size="50px" placeholder="Search"/>
            <a href="#"><i class="ti-search"></i></a>
          </div>
          <div class="login">
            <a href="./login.php"><span>Log in</span></a>
            <a href="./signup.php"><span>Sign up</span></a>
          </div>
        </div>
        <div class="content">
          <p>Create an online video course and earn money by teaching people around the world.</p>
          <h2>Become an instructor</h2>
        </div>
      </div>
    </header>

    <!-- Features -->
    <section id="features" class="pt pb">
        <div class="container">
          <div class="section-title">
            <h2>Envision your success</h2>
          </div>
          <div class="all-features">
            <div class="scholership box">
              <div class="box-content">
                <span class="number-circule-box">1</span>
                <span class="title">Plan your course<span>
              </div>
            </div>
            <div class="online-course box">
              <div class="box-content">
                <span class="number-circule-box">2</span>
                <span class="title">Record your video<span>
              </div>
            </div>
            <div class="certification box">
              <div class="box-content">
                <span class="number-circule-box">3</span>
                <span class="title">Build your community<span>
            </div>
          </div>
        </div>
      </section>

    <!-- Section Sign Up -->
    <section id="signup" class="pt pb">
        <div class="container">
            <div class="section-title">
                <h2>Sign Up</h2>
            </div>
            <div class="register-form">
                <form class="signup-form" action="instructor_signup.php" method='post'>
                    <input type="text" placeholder="Your Full Name" name="fullname" id="transparent-input" required/>
                    <input type="text" placeholder="Your User Name" name="username" id="transparent-input" required/>
                    <input type="text" placeholder="Your Phone Number" name="phone-number" id="transparent-input" required/>
                    <input type="email" placeholder="Your Email Address" name="email" id="transparent-input" required/>
                    <input type="password" placeholder="Your Passwaord" name="password" id="transparent-input" required/>
                    <input type="password" placeholder="Your Passwaord" name="confirm-password" id="transparent-input" required/>
                    <div class="alert_error"><?= $_SESSION['message'] ?></div>
                    <input type="submit" value="Signup" class="register-btn" />
                    <a href="./login.php">Already have account?</a>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
          include 'footer.php';
          footerfun();
        ?>
    </body>
</html>