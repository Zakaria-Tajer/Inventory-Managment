<?php

    session_start();
    include 'EmpConn.php';
    
    $id = $_SESSION['id'];
    
    // // $sql = 

    // echo $id;


    // echo $id;

    // $Emp_id = $_SESSION['id'];

    $query1 = mysqli_query($conn, "SELECT * FROM `employee`");
    // $rows = mysqli_fetch_assoc($query1);
    $html = "";
    $output = "";
    


    if(mysqli_num_rows($query1) == 1){
        echo 'No one is connected';
    }else if(mysqli_num_rows($query1)>0){
        while($row = mysqli_fetch_assoc($query1)){
            // print_r($row['fname']."\n");
            $html .= '
                <div class="user-wrapper" id="user_wrapper" onclick="clicked(`'.$row['fname'].'`,`'.$row['id'].'`)">
                <div class="img">
                    <img src="../admin-manage/employePics/'. $row['img'] .'"alt="">
                </div>
                <div class="info-user">
                    <h1>'. $row['fname'] .'</h1>
                    <h3>Last message sent</h3>
                </div>
                </div>


            ';
        
        } 
    }
        
    echo $html;
    // echo $output;


?>