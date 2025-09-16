<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All data structure</title>
    <link href="bootstrap.css" rel="stylesheet">

    <style>

    </style>
</head>
<body>
<a class="btn btn-primary float-end" href="dbadd.php"> add new user</a>
    

<table class="container col-md-6 my-4 table table-primary table-striped">
<thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">id</th>
      <th scope="col">Email Address</th>
      <th scope="col">Password</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>

<?php
include 'config.php';

$sql = "SELECT * FROM userdata102";
$result = mysqli_query($dbconn, $sql);
$num =1;
while($dbrow = mysqli_fetch_assoc($result)){

?>

 <tr>
<th scope='row'><?php echo $num; $num++?> </th>

 <td> <?php echo $dbrow['fname'];?> </td>
 <td> <?php echo $dbrow['lname'];?> </td>
 <th> <?php echo $dbrow['id'];?> </th>
 <td> <?php echo $dbrow['phone'];?> </td>
 <td> <?php echo $dbrow['pwd'];?> </td>
 <td width="200px"> 
    <a class="btn btn-info mx-3" href="edit.php?edid=<?php echo $dbrow['id']?>">Edit</a>
    <a class="btn btn-danger m-0"  onclick="return confirm('Are you sure')" href="delete.php?id=<?php echo $dbrow['id']?>">Delete</a>        
</td>


 </tr>

<?php

}



?>

   </tbody>

</table>








</body>
</html>

