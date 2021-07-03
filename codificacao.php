<?php
	$str=file_get_contents($_POST[""]);
	echo mb_detect_encoding($str, [ 'UTF-8', 'ISO-8859-1']);
?>