<?php

include "config.php";

if (isset($_REQUEST["phone"]) && isset($_REQUEST["password"])) {
    $phone = $_REQUEST["phone"];
    $pwd = $_REQUEST["password"];

    $sql = "SELECT * FROM userdata101 WHERE phone= $phone";
    $result = mysqli_query($dbconn, $sql);

    //  $_GLOBAL = $phone;
    // if ($result) {
        while($row = mysqli_fetch_array($result)){
            $dbphone = $row["phone"];
            $dbpwd = $row["pwd"];
            $dbuser = $row["username"];
  echo 'phone = '.$dbphone.' pass = '.$dbpwd.' user = '.$dbuser;
        }
            // if ($phone == $dbphone && $pwd == $dbpwd) {
            //     echo "<script>alert('logged in' ) </script> ";
            //     header("location: index.php?usernm= $dbuser");
            // } else {
            //     echo "<script>alert('Undifind user account !!' ) </script> ";
            // }
        
    // } else {
    //     echo "<script>alert('Undifind user account !!' ) </script> ";
    // }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login to access all feature</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>






<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex " id="navbarSupportedContent">
  <div class="">  
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-start">
     
        <li class="nav-item"> <a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"> <a class="nav-link" href="#">Link</a>   </li>
        <li class="nav-item"> <a class="nav-link" href="#">Action</a>  </li>
        <li class="nav-item"> <a class="nav-link" href="#">About</a>  </li>
        <li class="nav-item"> <a class="nav-link" href="#">Contact</a>  </li>
     
      </ul>
</div>
 
</div>
 

    </div>
  </div>
</nav>



<form class=" mt-4 container col-6" action="login.php" method="get">
  
  <div class="mb-3 ">
    <label for="phone" class="form-label">Phone number</label>
    <input type="text" name="phone" class="form-control" id="phone">
    <div id="emailHelp" class="form-text">We'll never share your Number with anyone else.</div>

  </div>
  <div class="mb-3 " >
    <label for="pass" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="pass"> 
  </div>

  <button type="submit" class="btn btn-primary col-12">Submit</button>
</form>
<!-- <div class="mb-3 mt-4 container col-6" > <a href="signup.php" class="stretched-link text-primary">Create an acount </a> </div> -->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>