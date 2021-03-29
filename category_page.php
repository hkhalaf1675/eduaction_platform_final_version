
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
          include 'student_header.php';
          studentheader($GLOBALS['user_id']);
        ?>
        <!-- section category -->
        <section class="category">
            <div class="container">
                <?php
                  include 'category_search.php';
                  $categ_title=$_GET['categ_title'];
                  echo '<div class="category-title pb">';
                    echo "<h1>$categ_title</h1>";
                  echo "</div>";
                  categorysearch($categ_title);
                ?>
            </div>
        </section>
        
        <?php
          include 'footer.php';
          footerfun();
        ?>
    </body>
</html>