<?php 
   if($url=file_get_contents($_POST["url"])){
	   echo "true";
   }
   else{
	   echo "false";
   }
?>