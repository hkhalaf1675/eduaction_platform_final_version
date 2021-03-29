<?php
    function student_course($student_id){
        $_SESSION['message']='';
        $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
        //check connection
        if($con->connect_error){
            die("Connection Failed : " . $con->connect_error);
        }

        //firstly the name of student
        $student_name='';
        $sql="SELECT username FROM user WHERE id=$student_id";
        $res=$con->query($sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $student_name=$row['username'];
            }
        }
        echo "<section id='features' class='pb'>
                    <div class='container'>
                    <div class='section-title'>
                        <h2>Let\'s start learning ". $student_name ."</h2>
                    </div>
                    <div class='all-features'>";
        
        //course that student registered in
        $course_id = 1;
        $categ_id = 1;
        $sql="SELECT course_id FROM course_register WHERE student_id=$student_id";
        $res=$con->query($sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $course_id=$row['course_id'];
                $sql2="SELECT course_title,course_img,short_description,categ_id FROM course WHERE course_id=$course_id;";
                $res2=$con->query($sql2);
                if($res2->num_rows > 0){
                    while($row2 = $res2->fetch_assoc()){
                        $categ_id = $row2["categ_id"];
                        echo '<div class="course box">
                                <div class="box-content">
                                    <h2>'.$row2["course_title"].'</h2>
                                </div>
                             </div>';
                    }
                }
            }
        }
        
        echo '</div>
            </div>
        </section>';

        echo "<section id='features' class='pb'>
                    <div class='container'>
                    <div class='section-title'>
                        <h2>Recommended for you</h2>
                    </div>
                    <div class='all-features'>";

        $sql="SELECT course_title,course_img,short_description,categ_id FROM course WHERE categ_id=$categ_id";
        $res=$con->query($sql);
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                echo '<div class="course box">
                        <div class="box-content">
                            <h2>'.$row["course_title"].'</h2>
                        </div>
                     </div>';
            }
        }

        echo '</div>
            </div>
        </section>';
        
        $con->close();
    }
?>