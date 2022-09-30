<?php
include '../connect.php';
 $title=filterRequest('title');
 $content=filterRequest('content');
 $note_id=filterRequest('id');
 $stmt=$con->prepare("update notes set notes_title='$title',notes_content='$content' where notes_id='$note_id'");
 $stmt->execute();
 $count=$stmt->rowCount();
 if($count>0)
 {
    echo json_encode(array("status"=>"success"));
 }
 else{
    echo json_encode(array("status"=>"failed"));
 }