<?php
// include 'config.php' ; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data push delete show </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    
<form method="post" action="newdata.php"  class="container my-4 bg-success py-5 rounded col-md-6">
  <div class="mb-3 mx-5">
    <label for="Email1" class="form-label">Email address</label>
    <input type="text" name="email" class="form-control" id="Email1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3 mx-5">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" name="fullname" class="form-control" id="name">
  </div>
  
  <div class="mb-3 mx-5">
    <label for="Password1" class="form-label">Password</label>
    <input type="password" name="pwd" class="form-control" id="Password1">
  </div>
 
  <button type="submit" name="submit" class="col-11 btn btn-primary mx-5">Submit</button>
</form>








</body>
</html>