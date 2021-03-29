<?php
    function studentheader($student_id){
        echo '<header class="header">
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
                        <ul>';
                            include "category_dropdown.php";
                            categdropdownmenu();
                            echo'</ul>
                      </li>
                      <li><a href="#">About</a></li>
                      <li>
                        <input class="searchinput" type="text" size="50px" placeholder="Search"/>
                      </li>
                      <li>
                        <a href="#"><i class="ti-search"></i></a>
                      </li>
                      <li>
                        <a href="#"><span class="profile">';
                        session_start();
                        $_SESSION['message']='';
                        $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
                        //check connection
                        if($con->connect_error){
                          die("Connection Failed : " . $con->connect_error);
                        }
                        /* *********************************************************************************** */
                        
                        $username='ahmed';
                        $sql="SELECT username FROM user WHERE id=$student_id";
                        $res=$con->query($sql);
                        if($res->num_rows > 0){
                          while($row=$res->fetch_assoc()){
                            $username=$row['username'];
                          }
                        }
                        echo strtoupper($username[0]).'</span></a>
                        <!-- submenu -->
                        <ul>';

                            echo'<li><a href="#">Profile</a></li>
                            <li><a href="./index.php">Logout</a></li>
                        </ul>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
        </div>
    </header>';
    }
?>