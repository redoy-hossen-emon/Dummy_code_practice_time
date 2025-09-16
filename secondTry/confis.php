<?php

$name = $_GET['fullname'];
$email = $_GET['email'];
$pwd = $_GET['pwd'];


header('Location: indesx.php');



$dbconn = new mysqli('localhost', 'root','', 'sacondDb');
    
$enst = "INSERT INTO userInfo(name,email, pwd) VALUES('$name','$email','$pwd')";
mysqli_query($dbconn,$enst);

echo "name $name <br> email $email <br> pass $pwd";


?>