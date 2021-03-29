<?php
    function categorysearch($categ_title){
        session_start();
        $_SESSION['message']='';
        $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
        //check connection
        if($con->connect_error){
            die("Connection Failed : " . $con->connect_error);
        }

        $sql="SELECT categ_id FROM category WHERE categ_title=$categ_title;";
        $categ_id=1;
        $res=$con->query($sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $categ_id=$row['categ_id'];
            }
        }
        
        $sql="SELECT * FROM course WHERE categ_id=$categ_id;";
        $res=$con->query($sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                echo '<div class="panel box">';
                    echo '<div class="panel-img">';
                        echo '<img src="./img/t1.jpg" />';
                    echo '</div>';
                    echo '<div class="panel-content">';
                        echo "<h2>".$row['course_title']."</h2>";
                        echo "<p>".$row['short_description']."</p>";
                        echo '<p>Num of lectures</p>';
                        $sql="SELECT full_name FROM register_data WHERE id = ".$row['instructor_id'].";";
                        $res2=$con->query($sql);
                        if($res2->num_rows > 0){
                            while($row2 = $res2->fetch_assoc()){
                                echo "<p>".$row2['full_name']."</p>";
                            }
                        }
                        else{
                            echo "<p>Name of Instructor </p>";
                        }
                        echo '<p>Price : 0$ </p>';
                        echo '</div>';
                echo '</div>';
            }
        }
        session_destroy();
        $con->close();
    }

?>