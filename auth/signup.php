<?php
include '../connect.php';
 $username=filterRequest('username');
 $email=filterRequest('email');
 $password=filterRequest('password');

 $stmt=$con->prepare("insert into users(username,email,password) values('$username','$email','$password')");
 $stmt->execute();
 $count=$stmt->rowCount();
 if($count>0)
 {
    echo json_encode(array("status"=>"success"));
 }
 else{
    echo json_encode(array("status"=>"failed"));
 }