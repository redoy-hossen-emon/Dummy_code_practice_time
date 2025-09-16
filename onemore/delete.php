<?php

include 'config.php';

if(isset($_REQUEST['id'])){

    $delid = $_REQUEST['id'];
  $sql = "DELETE FROM userlistddd WHERE id= $delid";

  mysqli_query($con, $sql);
  header('location: dbtable.php?id=deleted');
}else{
    header('location: dbtable.php?id=not');
}











?>