<?php


try
{  
//host 
define("HOST", "localhost");


//Database Name
define("DBNAME", "maymaFood");

//Database User
define("USER", "root");

//Database Password
define("PASS", "");


//Database Connection
$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";", USER, PASS);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// if($conn == true) {
//     echo "connected successfully";
// } else {
//     echo "connection failed";
// }

}catch (PDOException $e)
{
    echo $e->getMessage();
}