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
      $accounttype='Student';
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
          header("location:index.php");
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
</script>

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
                    <h2>Sign Up</h2>
                </div>
                <div class="login-form">
                    <form class="booking-form" action="register.php" method='post' >
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