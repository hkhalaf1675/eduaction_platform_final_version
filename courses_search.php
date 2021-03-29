<?php
    function courses_search($instructor_id){
        session_start();
        $_SESSION['message']='';
        $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
        //check connection
        if($con->connect_error){
            die("Connection Failed : " . $con->connect_error);
        }
        $sql="SELECT * FROM course WHERE instructor_id=$instructor_id;";
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
                        $categ_id=$row['categ_id'];
                        $categ_title='Development';
                        /*$sql2="SELECT categ_title FROM category WHERE categ_id=$categ_id;";
                        $res2=$con->query($sql2);
                        if($res2->num_rows > 0){
                            while($row2 = $res->fetch_assoc()){
                                $categ_title=$row2['categ_title'];
                            }
                        }*/
                        echo "<p>".$categ_title."</p>";
                        echo '<p>Price : 0$ </p>';
                        echo '</div>';
                echo '</div>';
            }
        }
        else{
            header("location:instructor_page.php");
        }
        session_destroy();
        $con->close();
    }
?>