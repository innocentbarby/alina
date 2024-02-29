<?php

define("SERVER_DB","localhost");
define("USERNAME_DB","root");
define("PASSWORD_DB","");
define("DATABASE_DB","general-store");

$conn = mysqli_connect(SERVER_DB,USERNAME_DB,PASSWORD_DB,DATABASE_DB) or die("not connected");


// if($conn){
//     echo "connected";
// }else{
//     echo "not connected"; 
// }

?>