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
        <link rel="stylesheet" href="./cssfiles/instructor_communication.css" />
    </head>
    <body>
        <!-- Header -->
        <?php 
            include 'instructor_header.php';
            instructorheader($GLOBALS['user_id']);
        ?>
        <section class="panel pt pb">
            <div class="container">
                
                <!-- Q & A -->
                <div class="q_a_panel">
                    <div class="q_a_title">
                        <h1>Q & A</h1>
                    </div>
                    <div class="q_a_img">
                        <img src="./img/messages_no_messages.svg" />
                    </div>
                    <div class="q_a_text">
                        <h2>No questions yet</h2>
                        <p>Q&A is a forum where your students can ask questions, hear your responses, 
                            and respond to one another.<br />
                             Here’s where you’ll see your courses’ Q&A threads</p>
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