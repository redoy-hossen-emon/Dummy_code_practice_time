<?php
include 'config.php';
if(isset($_REQUEST['id'])){
    $dleteId = $_REQUEST['id'];

    $sql = "DELETE FROM userdata102 WHERE id = $dleteId";
    
    mysqli_query($dbconn, $sql);
    header('location: index.php');

}


?>