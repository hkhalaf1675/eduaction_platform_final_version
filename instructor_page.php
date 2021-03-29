<?php 
    session_start();
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
        <link rel="stylesheet" href="./cssfiles/instructor_page.css" />
    </head>
    <body>
        <!-- Header -->
        <?php 
            include 'instructor_header.php';
            instructorheader($_GET['user_id']);
        ?>

        <!-- courses -->
        <section id="courses" class=" pb">
            <div class="container">
                <div class="section-title">
                    <h2>Based on your experience, we think these resources will be helpful.</h2>
                </div>
                <div class="panel_body box">
                    <div class="panel_content">
                        <img src="./img/panal1.png" />
                    </div>
                    <div class="panel_content">
                        <h2>Create an Engaging Course</h2>
                        <p>Whether you've been teaching for years or are teaching for the first time, 
                            you can make an engaging course. We've compiled resources and best practices 
                            to help you get to the next level, no matter where you're starting.</p>
                            <a href="#">Get Start</a>
                    </div>
                </div>
                <hr />
                <div class="panel_body box">
                    <div class="panel_content">
                        <img src="./img/panal3.png" />
                    </div>
                    <div class="panel_content">
                        <h2>Get Started with Video</h2>
                        <p>Whether you've been teaching for years or are teaching for the first time, 
                            you can make an engaging course. We've compiled resources and best practices 
                            to help you get to the next level, no matter where you're starting.</p>
                            <a href="#">Get Start</a>
                    </div>
                </div>
                <hr />
                <div class="panel_body box">
                    <div class="panel_content">
                        <img src="./img/panal2.png" />
                    </div>
                    <div class="panel_content">
                        <h2>Build Your Audience</h2>
                        <p>Whether you've been teaching for years or are teaching for the first time, 
                            you can make an engaging course. We've compiled resources and best practices 
                            to help you get to the next level, no matter where you're starting.</p>
                            <a href="#">Get Start</a>
                    </div>
                </div>
                <div class="panel_create_course">
                  <span>Are You Ready to Begin?</span>
                  <a href='create_course.php'>
                    <button type="button" class="btn_create_course">Create Your Course</button>
                  </a>
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
<?php
    session_destroy();
?>