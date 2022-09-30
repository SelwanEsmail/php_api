<?php
define('MB',1048576);
function filterRequest($requestname)
{
    return htmlspecialchars(strip_tags($_POST[$requestname]));
}
function imageupload($imegeRequest){
   global $mstError;
   $iamgename   =rand(1000,10000).$_FILES[$imegeRequest]['name'];
   $imagetmp    =   $_FILES[$imegeRequest]['tmp_name'];
   $imagesize   =   $_FILES[$imegeRequest]['size'];
   $allowExt    =   array("jpg","png","gif","mp3","pdf");
   $strToArray  =   explode(".",$iamgename);
   $ext         =   end($strToArray);
   $ext         =   strtolower($ext);

   if(!empty($iamgename) && !in_array($ext,$allowExt))
   {
    $mstError[]="Ext";
   }
   if($imagesize > 2 *MB)
   {
    $mstError[]="size";
   }
   if(empty($mstError))
   {
    move_uploaded_file($imagetmp,"../upload/".$iamgename);
   return $iamgename;
   }
   else{
    return "fail";
   }

   
   
}
function deleteFile($dir,$iamgename)
{
    if(file_exists($dir."/".$iamgename))
    {
        unlink($dir."/".$iamgename);
    }
}