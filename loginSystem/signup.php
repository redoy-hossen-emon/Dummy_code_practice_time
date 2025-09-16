<?php
include 'config.php';

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up or Create an account</title>
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
  <div class="">    <ul class="navbar-nav me-auto mb-2 mb-lg-0 float-start">
     
        <li class="nav-item"> <a class="nav-link active" href="#">Home</a>   </li>
        <li class="nav-item"> <a class="nav-link" href="#">Link</a>   </li>
        <li class="nav-item"> <a class="nav-link" href="#">Action</a>  </li>
        <li class="nav-item"> <a class="nav-link" href="#">About</a>  </li>
        <li class="nav-item"> <a class="nav-link" href="#">Contact</a>  </li>
     
      </ul>
</div>

</div>
     <div class="navbar-nav me-auto mb-2 mb-lg-0 float-end" >
        <a href="login.php" class="nav-link border-end">login </a>
        <a href="signup.php" class="nav-link "> sign up</a> 

     </div>

    </div>
  </div>
</nav>

<form class=" mt-4 container col-6" action="signup.php" method="get">
  <div class="mb-3">
    <label for="fname" class=" form-label">Full Name</label>
    <input type="text" name="fullname" class="form-control" id="fname" >
  </div> 
  <div class="mb-3 ">
    <label for="phone" class="form-label">Phone number</label>
    <input type="text" name="phone" class="form-control" id="phone">
    <div id="emailHelp" class="form-text">We'll never share your Number with anyone else.</div>

  </div>
  <div class="mb-3 " >
    <label for="pass" class="form-label">Password</label> 
    <input type="password" name="pass" class="form-control" id="pass"> 
  </div>
  <div class="mb-3 " >
    <label for="copass" class="form-label">confirm Password</label><span class=" float-end passMatch">please insert same password</span> 
    <input type="password" name="copass" class="form-control" id="copass"> 
  </div>
 

  <button type="submit" class="btn btn-primary submitBtn col-12" disabled>Submit</button>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
  var allinput = document.querySelectorAll('.container input');
    let alertspan = document.querySelector('.passMatch');
    let sbtn =  document.querySelector('.submitBtn');

allinput.forEach(sinp => {
  
  sinp.addEventListener('keyup',function(){

    let pass= document.querySelector('#pass').value;
    let copass= document.querySelector('#copass').value
    let uname= document.querySelector('[name="fullname"]').value;
    let phone= document.querySelector('[name="phone"]').value;



    if(pass != '' &&copass !='' && uname != '' && phone != ''){     

      if(pass == copass){
        alertspan.innerText ='';
        sbtn.removeAttribute('disabled')

      }else{
        sbtn.setAttribute('disabled',''); alertspan.innerText ='please insert same password'
      }

    }else{    sbtn.setAttribute('disabled','')}

  })

  
});

</script>
</body>
</html>





<?php
if(isset($_REQUEST['phone'])){

  $getname = $_REQUEST['fullname'];
  $getphone = $_REQUEST['phone'];
  $getpass = $_REQUEST['pass'];
  $getcopass = $_REQUEST['copass'];


  if($getphone != ''&& $getname != ''&& $getpass != ''&& $getcopass != '' ){

               $dbinsert = "INSERT INTO userdata101(username,phone,pwd) VALUES('$getname','$getphone','$getpass')";
               mysqli_query($dbconn, $dbinsert);
         
          // while($row = mysqli_fetch_assoc($result)){
            // echo  $dbphone = $row['phone'];

            // if($dbphone != $getphone ){
     


          // }else{echo "<script> alert('please insert right confirm password') </script>";};



  }
  //else{echo "<script> alert('please insert all info perfectly') </script>";}




}


?>
