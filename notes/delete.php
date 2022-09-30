<?php
include '../connect.php';
 $id=filterRequest('id');
 $imegename=filterRequest('imegename');
 $stmt=$con->prepare("Delete from notes where notes_id=$id");
 $stmt->execute();
 $count=$stmt->rowCount();
 if($count>0)
 {
   deleteFile("../upload",$iamgename);
    echo json_encode(array("status"=>"success"));
 }
 else{
    echo json_encode(array("status"=>"failed"));
 }