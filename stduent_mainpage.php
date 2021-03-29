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
        <link rel="stylesheet" href="cssfiles/student_mainpage.css" />
    </head>
    <body>
        <!-- Header -->
        <?php
          include 'student_header.php';
          studentheader($_GET['user_id']);
        ?>

        <section class="sectiontop">
          <div class="top">
            <div class="content">
              <p>Best online education service In the world</p>
              <h2>One Step Ahead This Season</h2>
            </div>
          </div>
        </section>

        <?php
          include 'student_courses.php';
          student_course($_GET['user_id']);
        ?>

        <?php
          include 'footer.php';
          footerfun();
        ?>
    </body>
</html>