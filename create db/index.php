<?php

echo 'working';

 global $db_con;
 $db_con = mysqli_connect('localhost', 'root', '', 'userdata');


$crt_tbl = " CREATE TABLE mydata ( id INT NOT NULL AUTO_INCREMENT , firstName VARCHAR(191) NOT NULL , lastName VARCHAR(191) NOT NULL ,  subj VARCHAR(191) NOT NULL ,class VARCHAR(191) NOT NULL , PRIMARY KEY (id))" ;


mysqli_query($db_con, $crt_tbl);


?>