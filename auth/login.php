<?php
include '../connect.php';

$email=filterRequest('email');
$password=filterRequest('password');

$stm=$con->prepare("SELECT * FROM users WHERE `password`='$password' and email='$email'");
$stm->execute();
$count=$stm->rowCount();
$data=$stm->fetch(PDO::FETCH_ASSOC);
if($count>0)
{
    echo json_encode(array("status"=>"success","data"=>$data));
}
else{
    json_encode(array("status"=>"fail"));
}
?>