<?php
include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

$inst = "INSERT INTO login_info(firstName,lastName, email, pwd) VALUES('$name','$name','$email','$pwd')";

mysqli_query($conn, $inst);
 echo "<script>alert('Success')</script>";
 echo "<script>window.location.href='admin.php'</script>";

};



?>