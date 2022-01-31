<?php
    session_start();
    include './EmpConn.php';

    $output = '';
    $id = $_SESSION['unique_id'];
    $emp = $_COOKIE['profileid'];

    $sql = "SELECT * FROM `msg` WHERE amin_key = '{$id}' AND reciving_msg_id = '{$emp}'";


    $query = mysqli_query($conn, $sql);

    // $row = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) > 0){
        while( $row = mysqli_fetch_assoc($query)){
            $output .= '
                <div class="senter-message">
                    <h3 id="act-msg">'. $row['msg'].'</h3>
                </div> 
            ';

        }

        echo $output;
    }





    



?>