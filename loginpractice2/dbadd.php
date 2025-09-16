<?php

include 'config.php';

if(isset($_REQUEST['submit'])){

  $fname =  $_REQUEST['fName'];
  $lname =  $_REQUEST['lName'];
  $phone =  $_REQUEST['phone'];
  $pwd =  $_REQUEST['pwd'];
 $sql = "INSERT INTO `userdata102` (`fname`, `lname`, `phone`, `pwd`) VALUES ('$fname', '$lname', '$phone', '$pwd')";
mysqli_query($dbconn, $sql);
header('location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new user details</title>
    <link href="bootstrap.css" rel="stylesheet">
</head>

<body>
    <form class="container col-7 my-4" action="dbadd.php" method="get">

        <label class="form-label" for="fname"> First name</label> 
        <input class="form-control" name="fName" type="text" id="fname"> 

        <label class="form-label" for="lname"> Last name</label> 
        <input class="form-control" name="lName" type="text" id="lname"> 

        <label class="form-label" for="phone"> Phone</label> 
        <input class="form-control" name="phone" type="text" id="phone"> 

        <label class="form-label" for="pwd"> Password</label> 
        <input class="form-control" name="pwd" type="password" id="pwd"> 

        <input type="submit" name="submit" class="col-12 btn btn-info mt-4" value="Submit" >
    </form>


    <script>
  var allinput = document.querySelectorAll('.container input');
    let alertspan = document.querySelector('.passMatch');
    let sbtn =  document.querySelector('.submitBtn');

allinput.forEach(sinp => {
  
  sinp.addEventListener('keyup',function(){

    let pass= document.querySelector('#pwd').value;
    let fname= document.querySelector('[name="fName"]').value;
    let lname= document.querySelector('[name="lName"]').value;
    let phone= document.querySelector('[name="phone"]').value;



    if(pass != '' &&lname !='' && uname != '' && phone != ''){     

        alertspan.innerText ='';
        sbtn.removeAttribute('disabled')


    }else{    sbtn.setAttribute('disabled','')}

  })

  
});

</script>
</body>

</html>