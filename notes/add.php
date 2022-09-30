<?php
include '../connect.php';

 $title     =  filterRequest('title');
 $content   =  filterRequest('content');
 $user_id   =  filterRequest('user_id');
 $imegename =  imageupload('file');

 if($imegename != 'fail')
 {
   $stmt=$con->prepare("INSERT INTO notes(`notes_title`, `notes_content`, `notes_img`, `notes_users`) VALUES('$title','$content','$imegename',$user_id)");
   $stmt->execute();
   $count=$stmt->rowCount();
   if($count>0)
   {
      echo json_encode(array("status"=>"success"));
   }
   else{
      echo json_encode(array("status"=>"failed"));
   }
 }
 else{
   echo json_encode(array("status"=>"failed"));
 }
 