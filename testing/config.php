
<?php

$fname = $_GET['firstname'] ;
$lname = $_GET['lastname'] ;
$email = $_GET['email'] ; 
$pwd =  $_GET['pwd'] ;

if(isset($_GET['submit'])){

  $conn = new mysqli('localhost', 'root', '','userlist');

    $inst = "INSERT INTO login_info(firstName, lastName, email, pwd) VALUES('$fname', '$lname', '$email', '$pwd')";

}else{
    echo 'data not seved';
}



mysqli_query($conn, $inst);
//$newTble = new mysqli('localhost','root','','userlist');

// database creatin---- $createdb = "CREATE DATABASE userList";



// table creating----- $createtbl = "CREATE TABLE `userlist`.`login_info` ( `id` INT NOT NULL AUTO_INCREMENT , `firstName` VARCHAR(191) NOT NULL , `lastName` VARCHAR(191) NOT NULL , `email` VARCHAR(191) NOT NULL , `pwd` VARCHAR(191) NOT NULL , `check` BOOLEAN NOT NULL , PRIMARY KEY (`id`))";




?>

