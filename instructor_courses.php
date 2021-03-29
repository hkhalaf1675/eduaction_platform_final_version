<?php
  session_start();
  $_SESSION['message']='';
  $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
  //check connection
  if($con->connect_error){
    die("Connection Failed : " . $con->connect_error);
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
        <link rel="stylesheet" href="cssfiles/category_page_style.css" />
    </head>
    <body>
        <!-- Header -->
        <?php 
            include 'instructor_header.php';
            instructorheader($_GET['user_id']);
        ?>
        <!-- section course -->
        <section class="category">
            <div class="container">
                <?php
                  include 'courses_search.php';
                  session_destroy();
                  $user_id=$_GET['user_id'];
                  courses_search($user_id);
                echo '<div class="panel_create_course">';
                  echo "<a href='create_course.php?user_id= $user_id'>";
                    echo '<input type="button" class="btn_create_course pb" value="Create New Course" />';
                  echo "</a>
                </div>
            </div>
        </section>"
        ?>
        <!-- Footer -->
        <?php
          include 'footer.php';
          footerfun();
        ?>
    </body>
</html>
<?php
    session_destroy();
    $con->close();
?>