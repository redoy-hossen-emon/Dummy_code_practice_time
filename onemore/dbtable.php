


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all data structure</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container">
  <a href="index.php" class="btn btn-success col-3 mt-1"> add user </a>
  <a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=onemore&table=userlistddd&pos=0" class="btn btn-primary col-3 mt-1"> see database </a>
  <a class="btn btn-success col-3 mt-1"> learn more </a>
</div>

<table class="table table-striped table-hover container col-10 mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">id</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>


    <?php
include 'config.php';

$sql = "SELECT * FROM userlistddd" ;
$sqlrun =mysqli_query($con,$sql);
$count = 1;
while($table = mysqli_fetch_assoc($sqlrun)){

?>
    <tr>
    <th  scope="row"> <?php  echo $count; $count++ ?></th>
      <td> <?php  echo $table['firstName'] ?> </td>
      <td> <?php  echo $table['lastName'] ?></td>
      <td> <?php  echo $table['id'] ?></td>
      <td> <?php  echo $table['email'] ?></td>
      <td> <?php  echo $table['phone'] ?></td>
      <td>
        <a class="btn  btn-info" href="edit.php?edid=<?php echo $table['id'] ?>"> edit </a>
        <a class="btn  btn-danger" href="delete.php?id=<?php echo $table['id'] ?>"> delete </a>
      
      </td>

      <?php
}


if (isset($_REQUEST["id"])) {
    $getid = $_REQUEST["id"];
    if ($getid == "deleted") {
        echo "<script> alert('User deleted successfuly') </script>";
    } elseif($getid == 'edited'){
      echo "<script> alert('User edited successfuly') </script>";
    }elseif($getid == 'added'){
      echo "<script> alert('User added successfuly') </script>";
  }else{
    echo "<script> alert('Something is wrong') </script>";
}
}


?>

    </tr>
 
  </tbody>
</table>







</body>
</html>

