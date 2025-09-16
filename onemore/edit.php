<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>once more try</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>


<?php
include 'config.php';
if(isset($_REQUEST['edid'])){

$getid = $_REQUEST['edid'];




$sql = " SELECT * FROM userlistddd WHERE id= $getid";
$eduser = mysqli_query($con, $sql);
while( $rowitem = mysqli_fetch_assoc($eduser)){
    echo $rowitem['id']; echo "<br>";


?>
<form class="container col-6 mt-4" action="edit.php" method="get">
<div class="mb-3 ">
    <label for="InputPassword1" class="form-label">First Name</label>
    <input value="<?php echo $rowitem['firstName']?>" name="fName" type="text" class="form-control" id="InputPassword1">
  </div>
  <div class="mb-3">
    <label for="InputPassword1" class="form-label">Last Name</label>
    <input value="<?php echo $rowitem['lastName']?>" name="lName" type="text" class="form-control" id="InputPassword1">
  </div>

  <div class="mb-3">
    <label for="InputEmail1" class="form-label">Email address</label>
    <input value="<?php echo $rowitem['email'] ?>" name="email" type="text" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="InputPassword1" class="form-label">Phone</label>
    <input value="<?php echo $rowitem['phone'] ?>" name="phone" type="text" class="form-control" id="InputPassword1">
  </div>
  <?php echo "<input type='hidden' name='hideid' value='$getid'>"; ?>
  <button type="submit" name="edited" class="btn btn-primary col-12">Submit</button>
</form>


</body>
</html>

<?php
}}



if (isset($_REQUEST["edited"])) {
  $fname = $_REQUEST["fName"];
  $lname = $_REQUEST["lName"];
  $email = $_REQUEST["email"];
  $phone = $_REQUEST["phone"];
  $hideid = $_REQUEST["hideid"];
  echo $fname ;
  echo $hideid; 
  echo "<br>" ;
  echo $lname ;
  echo "<br>" ;
  echo $phone;
  echo "<br>" ;


  $sql = " UPDATE `userlistddd` SET `firstName` = '$fname', `lastName` = '$lname', `email` = '$email', `phone` = '$phone' WHERE `id` = $hideid";  
  mysqli_query($con, $sql);

  header('location:dbtable.php?id=edited');
  
}




?>
