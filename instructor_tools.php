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
        <link rel="stylesheet" href="./cssfiles/instructor_tools.css" />
    </head>
    <body>
        <!-- Header -->
        <?php 
            include 'instructor_header.php';
            instructorheader($GLOBALS['user_id']);
        ?>

        <section class="panel pt pb">
            <div class="container">
                <div class="panel_title">
                    <h1>Tools</h1>
                </div>
                <div class="panel">
                    <div class="test_video">
                        <a href="#">
                            <div class="icon">
                                <i class="ti-video-clapper"></i>
                            </div>
                            <div class="text">
                                <h3>Test Video</h3>
                                <p>Get free feedback from video experts on 
                                <br />your audio, video, and delivery.</p>
                            </div>
                        </a>
                    </div>
                    <div class="test_video">
                        <a href="#">
                            <div class="icon">
                                <i class="ti-harddrive"></i>
                            </div>
                            <div class="text">
                                <h3>Marketplace insights</h3>
                                <p>Get free feedback from video experts on 
                                <br />your audio, video, and delivery.</p>
                            </div>
                        </a>
                    </div>
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