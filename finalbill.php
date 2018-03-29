<?php
session_start();

$filename = "bill_" . date('Ymd') ."_".time('hms') . ".csv";
 header("Content-Disposition: attachment; filename=\"$filename\"");
 header("Content-Type: application/vnd.ms-excel");
	$x=array("name","amount","quantity","\n");
	echo implode(",",$x);
	
	foreach($_SESSION['fb'] as $p){
    	    echo implode(",",$p);
 }

unset($_SESSION['fb']);
exit();
session_destroy();
header('Location:categeories.html');
?>
