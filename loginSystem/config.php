<?php

$host = 'localhost';
$user = 'root';
$pwdd = '';
$datab = 'loginsystem';

$dbconn = mysqli_connect($host,$user,$pwdd,$datab);

$sql = "INSERT INTO userdata102 (fname, lname, phone, pwd) VALUES ('reeea', 'roy', '234', '1211')";
mysqli_query($sql,$dbconn);


?>