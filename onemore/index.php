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


<form class="container col-6 mt-4" action="newdb.php" method="POST">
<div class="mb-3 ">
    <label for="InputPassword1" class="form-label">First Name</label>
    <input name="fName" type="text" class="form-control" id="InputPassword1">
  </div>
  <div class="mb-3">
    <label for="InputPassword1" class="form-label">Last Name</label>
    <input name="lName" type="text" class="form-control" id="InputPassword1">
  </div>

  <div class="mb-3">
    <label for="InputEmail1" class="form-label">Email address</label>
    <input name="email" type="text" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="InputPassword1" class="form-label">Phone</label>
    <input name="phone" type="text" class="form-control" id="InputPassword1">
  </div>

  <button type="submit" name="submit" class="btn btn-primary col-12">Submit</button>
</form>



</body>
</html>