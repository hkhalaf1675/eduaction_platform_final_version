<?php
    function instructorheader($instructor_id){
        echo '<header class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="./index.php"><img src="img/logo.png" alt="" /></a>
                </div>
                <div class="navigation">
                    <nav>
                    <ul>
                        <li> <a href="./instructor_page.php">Courses</a></li>
                        <li>
                            <a href="./instructor_communication.php">Communication</a>
                            <!-- Submenu -->
                            <ul>
                                <li><a href="./instructor_communication.php">Q & A</a></li>
                                <li><a href="#">Messages</a></li>
                                <li><a href="#">Assignments</a></li>
                            </ul>
                        </li>
                        <li><a href="./instructor_tools.php">Tools</a></li>
                        <li>
                            <a href="#"><span>';
                            $_SESSION['message']='';
                            $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
                            //check connection
                            if($con->connect_error){
                            die("Connection Failed : " . $con->connect_error);
                            }
                            /* *********************************************************************************** */
                            
                            $username='ahmed';
                            $sql="SELECT username FROM user WHERE id=$instructor_id";
                            $res=$con->query($sql);
                            if($res->num_rows > 0){
                                while($row=$res->fetch_assoc()){
                                    $username=$row['username'];
                                }
                            }
                            echo strtoupper($username[0]).'</span></a>
                            <!-- submenu -->
                            <ul>
                                <li><a href="#">Profile</a></li>
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