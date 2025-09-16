<?php

include 'config.php';

$dltId = $_GET['id'];
$dlt = "DELETE FROM login_info WHERE id= $dltId";


mysqli_query($conn,$dlt);
echo "<script>alert('Successfuly deleted')</script>";
echo "<script>window.location.href='admin.php'</script>";





?>
