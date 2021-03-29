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
    <link rel="stylesheet" href="./cssfiles/style.css" />
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
                    <?php
                      include 'category_dropdown.php';
                      categdropdownmenu();
                    ?>
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
            <a href="./register.php"><span>Sign up</span></a>
          </div>
        </div>
        <div class="content">
          <p>Best online education service In the world</p>
          <h2>One Step Ahead This Season</h2>
        </div>
      </div>
    </header>

    <!-- Features -->
    <section id="features" class="pt pb">
      <div class="container">
        <div class="section-title">
          <h2>Awesome Features</h2>
          <p>Replenish man have thing gathering lights yielding shall you</p>
        </div>
        <div class="all-features">
          <div class="scholership box">
            <i class="fas fa-graduation-cap fa-2x"></i>
            <div class="box-content">
              <h3>Scholarship Facility</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam omnis quis vitae delectus a odit.
              </p>
            </div>
          </div>
          <div class="online-course box">
            <i class="fas fa-book-open fa-2x"></i>
            <div class="box-content">
              <h3>Sell Online course</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam omnis quis vitae delectus a odit.
              </p>
            </div>
          </div>
          <div class="certification box">
            <i class="fas fa-globe fa-2x"></i>
            <div class="box-content">
              <h3>Scholarship Facility</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam omnis quis vitae delectus a odit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Course section -->
    <section id="courses" class="pt pb">
      <div class="container">
        <div class="section-title">
          <h2>Our Popular Courses</h2>
        </div>
        <div class="course-wrapper">
          <div class="single-course">
            <div class="course-header">
              <img src="img/c1.jpg" alt="" />
            </div>
            <div class="course-content">
              <span class="price">$25</span>
              <span class="tag">Design</span>
              <h4>Custom Product Design</h4>
              <p>One make creepeth man bearing their one firmament won't fowl meat over sea</p>
            </div>
          </div>
          <div class="single-course">
            <div class="course-header">
              <img src="img/c2.jpg" alt="" />
            </div>
            <div class="course-content">
              <span class="price">$35</span>
              <span class="tag">Network</span>
              <h4>Social Media Network</h4>
              <p>One make creepeth man bearing their one firmament won't fowl meat over sea</p>
            </div>
          </div>
          <div class="single-course">
            <div class="course-header">
              <img src="img/c3.jpg" alt="" />
            </div>
            <div class="course-content">
              <span class="price">$40</span>
              <span class="tag">Science</span>
              <h4>Custom Product Design</h4>
              <p>One make creepeth man bearing their one firmament won't fowl meat over sea</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Expert -->
    <section id="expert" class="pt pb">
      <div class="container">
        <div class="section-title">
          <h2>Top categories</h2>
        </div>
        <div class="all-trainers">
          <div class="trainer">
            <div class="trainer-header">
              <img src="img/design.PNG" alt="" />
            </div>
            <div class="trainer-content">
              <div class="trainer-bio">
                <h3>Web Development</h3>
              </div>
              <div class="trainer-des">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
          </div>
          <!-- tr2 -->
          <div class="trainer">
            <div class="trainer-header">
              <img src="img/development.PNG" alt="" />
            </div>
            <div class="trainer-content">
              <div class="trainer-bio">
                <h3>Machine Learning</h3>
              </div>
              <div class="trainer-des">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
          </div>
          <!-- t3 -->
          <div class="trainer">
            <div class="trainer-header">
              <img src="img/it.PNG" alt="" />
            </div>
            <div class="trainer-content">
              <div class="trainer-bio">
                <h3>Cyber Security</h3>
              </div>
              <div class="trainer-des">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
          </div>
          <!-- t4 -->
          <div class="trainer">
            <div class="trainer-header">
              <img src="img/photo.PNG" alt="" />
            </div>
            <div class="trainer-content">
              <div class="trainer-bio">
                <h3>Graphic Design</h3>
              </div>
              <div class="trainer-des">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Events -->
    <section id="events" class="events pt pb">
      <div class="container">
        <div class="section-title">
          <h2>Become an instructor</h2>
        </div>

        <div class="our-events">
          <div class="single-event">
            <img src="img/e1.jpg" alt="" />
          </div>
          <div class="single-event">
              <p>Top instructors from around the world teach millions of students. We provide the tools and skills to teach what you love.</p>
              <a href="./instructor_signup.php" class="btn btn-event">Start teaching today</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Client  -->
    <section id="client" class="client pt pb">
      <div class="container">
        <div class="section-title">
          <h2>Client say about me</h2>
          <p>Replenish man have thing gathering lights yielding shall you</p>
        </div>
        <div class="testimonial">
          <div class="single-testimonial">
            <div class="client-thumb">
              <img src="img/t3.jpg" />
            </div>
            <div class="client-quote">
              <h4>Elite Martin</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi sapiente quibusdam assumenda alias</p>
            </div>
          </div>
          <div class="single-testimonial">
            <div class="client-thumb">
              <img src="img/t4.jpg" />
            </div>
            <div class="client-quote">
              <h4>Elite Martin</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi sapiente quibusdam assumenda alias</p>
            </div>
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
