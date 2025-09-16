<?php


include 'main.php';



if(isset($_REQUEST['usernm'])){
    $dbuser = $_REQUEST['usernm'];
  echo "<script> document.querySelector('.login').innerHTML =''</script>";
  echo "<script> document.querySelector('.sign').innerHTML ='$dbuser'</script>";
 
  }
  


?>