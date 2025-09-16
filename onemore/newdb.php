<?php
include "config.php";

if(isset($_REQUEST['submit'])){

// function set($nam)
// {
//     isset($_REQUEST["$nam"]);
// }
    if(isset($_REQUEST['fName'])&&isset($_REQUEST['lName'])&&isset($_REQUEST['email'])&&isset($_REQUEST['phone'])){


    $fname = $_REQUEST['fName'];
    $lname = $_REQUEST['lName'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

        echo $fname;

    if($fname != "" && $lname !="" && $email != "" && $phone != ""){
        $sql = "INSERT INTO `userlistddd` (`firstName`, `lastName`, `email`, `phone`) VALUES ('$fname', '$lname', '$email', '$phone')";

        mysqli_query($con, $sql);
        
    header('location: dbtable.php?id=added');


    }else{  header('location: dbtable.php?id=not');};
   };
   
};








?>