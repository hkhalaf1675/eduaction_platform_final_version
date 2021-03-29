<?php
  session_start();
  $_SESSION['message']='';
  $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
  //check connection
  if($con->connect_error){
    die("Connection Failed : " . $con->connect_error);
  }
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $email=$con->real_escape_string($_POST['email']);
      $userpassword=$con->real_escape_string($_POST['password']);

      $sql="SELECT * FROM user WHERE email='$email' AND user_password='$userpassword';";

      $res = $con->query($sql);
      if($res->num_rows > 0){
          while($row = $res->fetch_assoc()){
            $fullname=$row['fullname'];
            $username=$row['username'];
            $accounttype=$row['account_type'];
            $user_id=$row['id'];

            $_SESSION['message'] = 'login successfully';

            if($accounttype == 'Student'){
                header("location:stduent_mainpage.php?user_id=$user_id");
            }
            elseif ($accounttype == 'Instructor') {
                header("location:instructor_courses.php?user_id=$user_id");
            }
          }
      }
      else{
          $_SESSION['message']='An erro in email or password';
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
        <link rel="stylesheet" href="./cssfiles/login.css" />
    </head>
    <body>
          <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="logo">
                    <a href="./index.php"><img src="img/logo.png" alt="" /></a>
                </div>
            </div>
        </header>

        <!-- Register section -->
        <section id="login" class=" pb">
            <div class="container">
                <div class="section-title">
                    <h2>Log in</h2>
                </div>
                <div class="login-form">
                    <form class="booking-form" action="login.php" method='post'>
                        <input type="email" placeholder="Your Email Address" name="email" id="transparent-input" required/>
                        <input type="password" placeholder="Your Passwaord" name="password" id="transparent-input" required/>
                        <div class="alert_error"><?= $_SESSION['message'] ?></div>
                        <a href="#">Forget Password  ?!</a>
                        <input type="submit" value="Login" class="register-btn" />
                        <a href="./register.php">Create a new account?</a>
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