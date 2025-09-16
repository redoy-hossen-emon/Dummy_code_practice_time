<?php



$jogajog = mysqli_connect('localhost', 'root', '','thirdTime');

$name = $_POST['fullname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


$inserting = "INSERT INTO login_info(fulname, email, pwd) VALUES('$name','$email','$pwd')";








mysqli_query($jogajog, $inserting);







?>