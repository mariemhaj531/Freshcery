<?php



//host 
define("HOST", "localhost");


//Database Name
define("DBNAME", "MaymaFood");

//Database User
define("USER", "root");

//Database Password
define("PASS", "");


//Database Connection
$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";", USER, PASS);

if($conn == true) {
    echo "connected successfully";
} else {
    echo "connection failed";
}

