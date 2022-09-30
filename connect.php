<?php
$dsn="mysql:host=localhost;dbname=noteapp";
$user="root";
$pass="root";
// TO Support arabic language
$option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"
);
try{

    $con = new PDO($dsn,$user,$pass,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    include 'function.php';
}
catch(PDOException $e)
{
echo $e->getMessage();
}

?>