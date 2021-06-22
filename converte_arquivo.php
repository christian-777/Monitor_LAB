<?php 
   $url=md5(file_get_contents($_POST["url"]));
   echo $url;
   
   /*if($url=file_get_contents("http://dados.cvm.gov.br/dados/FI/DOC/INF_DIARIO/META/meta_inf_diario_fi.txt")){
	   echo $url;
   }
   else{
	   echo "indisponivel";
   }*/
?>