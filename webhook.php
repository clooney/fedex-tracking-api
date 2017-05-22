<?php

$handle    = fopen('test.log','a+'); 
$inputJSON = file_get_contents("php://input");
if(!empty($inputJSON)){
	fwrite($handle, date("Y-m-d H:i:s").":  ".$inputJSON . "\r\n");
	echo 200;
}else{
	fwrite($handle, date("Y-m-d H:i:s").": can not get webhook data!\r\n");
}

?>