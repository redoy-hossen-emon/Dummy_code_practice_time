<?php

$host = 'localhost';
$dbuser = 'root';
$dbpwd = '';
$dbname = 'loginsystem';

$dbconn = mysqli_connect($host,$dbuser,$dbpwd,$dbname);


if(!$dbconn){
    die('somthing is wrong');
}


?>