<?php   
   if($url=@file_get_contents($_POST["url"])){
	   $url=md5($url);
	   echo $url;
   }
   else{
	   echo "Indisponivel";
   }
?>