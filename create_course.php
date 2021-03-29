<?php
    session_start();
    $_SESSION['message']='';
    $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
    //check connection
    if($con->connect_error){
        die("Connection Failed : " . $con->connect_error);
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $course_title=$con->real_escape_string($_POST['course_title']);
        $categ_id=$con->real_escape_string($_POST['category']);
        $instructor_id=$con->real_escape_string($_POST['instructor_id']);
        $sql="INSERT INTO course(course_title,categ_id,instructor_id) VALUES('$course_title','$categ_id',$instructor_id);";
        if(mysqli_query($con,$sql)){
            header("location:instructor_courses.php?user_id=$instructor_id");
            echo "<script>alert('Course Created Successfully !');</script>";
        }
    }
    session_destroy();
    $con->close();
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
        <link rel="stylesheet" href="cssfiles/create_course.css" />
    </head>
    <body>
        <!-- Header -->
        <?php 
            include 'instructor_header.php';
            instructorheader($_GET['user_id']);
        ?>
        <section>
            <div class="container">
                <div class="page-title">
                    <h1>Create Your Course </h1>
                    <p>Create rich learning experiences with the help of video lectures, quizzes, coding exercises, etc.</p>
                </div>

                <div class="form-content">
                    <form class="create-form pt pb" action="create_course.php" method="post">
                        <h3>How about a working title?</h3>
                        <p>It's ok if you can't think of a good title now. You can change it later.</p>
                        <input type="text" name="course_title" id="transparent-input" required />

                        <h3>What category best fits the knowledge you'll share?</h3>
                        <select name='category'>
                            <?php
                                session_start();
                                $_SESSION['message']='';
                                $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
                                //check connection
                                if($con->connect_error){
                                die("Connection Failed : " . $con->connect_error);
                                }
                                $sql="SELECT DISTINCT categ_id,categ_title FROM category;";
                                $res=$con->query($sql);
                                if($res->num_rows > 0){
                                    while($row = $res->fetch_assoc()){
                                        echo "<option id='transparent-input' value='".$row['categ_id']."'>".$row['categ_title']."</option>";
                                    }
                                }
                                ?>
                            <option id="transparent-input" value="other">Different Category </option>
                        </select>
                        <?php
                            echo "<input type='hidden' name='instructor_id' value='".$_GET['user_id']."' />";
                            session_destroy();
                            $con->close();
                        ?>
                        <input type="submit" value="Create Course" class="btn-create"/>
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