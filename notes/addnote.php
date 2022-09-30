<?php
include '../connect.php';
 $title=filterRequest('title');
 $content=filterRequest('content');
 $user_id=filterRequest('id');
 $stm=$con->prepare("INSERT INTO `notes`(`notes_title`, `notes_content`,`notes_users`) VALUES ('$title','$content',$user_id");
 $stm->execute();
 $count=$stm->rowCount();
 if($count>0)
 {
   echo json_encode(array("status"=>"success"));
 }
 else{
   echo json_encode(array("status"=>"failed"));
 }