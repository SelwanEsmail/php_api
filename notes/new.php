<?php
include '../connect.php';


 $name=filterRequest('name');
 
 $stmt=$con->prepare("INSERT INTO s(`name`)values('$name')");
 $stmt->execute();
 $count=$stmt->rowCount();
 if($count>0)
 {
    echo json_encode(array("status"=>"success"));
 }
 else{
    echo json_encode(array("status"=>"failed"));
 }
 