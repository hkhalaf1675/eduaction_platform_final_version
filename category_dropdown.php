<?php
function categdropdownmenu(){
  session_start();
  $_SESSION['message']='';
  $con=new mysqli('localhost' , 'root' , '' , 'educatiom_platform_v2');
  //check connection
  if($con->connect_error){
    die("Connection Failed : " . $con->connect_error);
  }

  
    $sql="SELECT DISTINCT categ_id,categ_title FROM category;";
    $res=$con->query($sql);
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            echo "<li><a href='category_page.php?categ_title=".$row['categ_id']."'>".$row['categ_title']."</a></li>";
        }
    }
    session_destroy();
    $con->close();
  }