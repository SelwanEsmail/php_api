<?php
include '../connect.php';

$id=filterRequest('id');


$stm=$con->prepare("SELECT * FROM notes WHERE `notes_users`=$id");
$stm->execute();
$count=$stm->rowCount();
$data=$stm->fetchAll(PDO::FETCH_ASSOC);
if($count>0)
{
    echo json_encode(array("status"=>"success","data"=>$data));
}
else{
   echo  json_encode(array("status"=>"fail"));
}
?>