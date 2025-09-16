<?php
include 'config.php';



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>



<?php

$slct = "SELECT * FROM login_info";

$quer = mysqli_query($conn,$slct);

$rie = mysqli_fetch_assoc($quer);
 
if($rie){
 echo "  <table class='table container'>
 <thead>
   <tr>
     <th scope='col'>#</th>
     <th scope='col'>First</th>
     <th scope='col'>Last</th>
     <th scope='col'>Email</th>
     <th scope='col'>Handle</th>
   </tr>
 </thead>
 <tbody>";

do{
    $id= $rie['id'];
    $name = $rie['firstName'];
    $email = $rie['email'];
    $pwd = $rie['pwd'];

  echo"  
     <tr>
    <th scope='row'>$id</th>
      <td>$name</td>
      <td>$name</td>
      <td>$email</td>    
      <td>
      <a class='btn btn-info' href='edit.php?id=$id'  >edit</a>
      <a class='btn btn-warning' href='delete.php?id=$id' >delete</a>
      </td>
    </tr>";
}while($rie =mysqli_fetch_assoc($quer) ) ;
   
}else{echo "<script>alert('No data found') </script> ";}





?>
  </tbody>
</table>






    
</body>
</html>