<?php 
echo "hello"; 
$json_str=file_get_contents('php://input');
$json_obj=json_decode($json_str);
$myfile=fopen("log.txt","w+") or die ("unable to open file.");
fwrite("$myfile,"\xEF\xBB\xBf".$json_str);
fclose($myfile);
?> 
