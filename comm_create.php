<?php
    include_once 'dbAction.php';
    session_start();
    $name = $_REQUEST['comm_name'];
    $desc = $_REQUEST['comm_desc'];
    $date = date('Y-m-d H:i:s');
    //$id = $row['idCol'];
    $id = $_SESSION['userID'];
    
    $sql = "INSERT INTO community (com_name ,com_desc, date_created,created_by) VALUES('$name','$desc','$date','$id')";
    
    if(mysqli_query($conn, $sql))
    {
        echo "Community created successfully.";
    } else
    {
        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn);
    }
    //$sql = "INSERT INTO community (comm_name ,comm_desc, nsfw) VALUES('$name','$desc','$sfw')";
    
    header( "Location: index.php" );
    

    
    