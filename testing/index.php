<?php
/*
include 'config.php';

//if(isset($_POST['submit'])){

  if (isset($_post['submit'])) {
    

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $cheking = $_POST['cheking'];
  echo $name;
  
  $insert = "INSERT INTO login_info(firstName,lastName, email, pwd) VALUES('$fname', '$lname','$email','$pwd', '$cheking')";


//  $insert = "INSERT INTO login_info (firstName, lastName, email, pwd) VALUES ( 'manik', 'hoseen', 'manik@v.com', '1234')";

  musqli_query($newTble,$insert);
  }
//};
*/


//$name = $_POST['fname'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataBase connecting</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>

<form name="form" action="config.php" method="get" class="container col-sm-4 bg-danger mt-4 rounded text-white small">
  
      <div class="mb-3">
        <label for="firstName" class="form-label " >First Name</label>
        <input type="text"  name="firstname" class="form-control"required id="firstName" value="what">
      </div>      <div class="mb-3">
        <label for="lastName" class="form-label" >Last Name</label>
        <input type="text" name="lastname" class="form-control"required id="lastName" >
      </div>
      <div class="mb-3">
        <label for="InputEmail1" class="form-label">Email address</label>
        <input type="text" name="email" class="form-control" id="InputEmail1" >
      </div>
      <div class="mb-3">
        <label for="InputPassword1" class="form-label">Password</label>
        <input type="password" name="pwd" class="form-control" id="InputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="Check1">
        <label class="form-check-label" name="cheking" for="Check1">Check me out</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary col-sm-12 mb-4">Submit</button>
    </form>
    





</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



</body>
</html>

