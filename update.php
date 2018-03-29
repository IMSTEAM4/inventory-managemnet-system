<?php

$name_p=array('Ashirvad Pipes','blow mould water tank','water pipe','fittings','taps','clamps','cpvc tee','couplings','valves','heaters');
$name_e=array('bulbs','lights','fan','switches','wire','indicator','study light','electricclamps','blades','soldering gun');
$name_m=array('1 inch CRI Pump','pump pipes','agricultural motor','3/4 inch motor','pvc motors');

$host="localhost";
$username="root";

$password="";

$db_name="imsproject";

$_SESSION['q_plu']=array();
$_SESSION['q_ele']=array();
$_SESSION['q_mot']=array();

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn)
{
	die("CONNECTION FAILED: " . mysqli_connect_error());

}

$a=array();
$b=array();
$c=array();

foreach( $name_p as $key => $n ) {
		$result = mysqli_query($conn,"SELECT number FROM `items` WHERE `name` = '$n'  ");
		$row = mysqli_fetch_array($result);
		array_push($a,$row[0]);
 }

foreach( $name_e as $key => $n ) {
		$result = mysqli_query($conn,"SELECT number FROM `items` WHERE `name` = '$n'  ");
		$row = mysqli_fetch_array($result);
		array_push($b,$row[0]);
 }

 foreach( $name_m as $key => $n ) {
		$result = mysqli_query($conn,"SELECT number FROM `items` WHERE `name` = '$n'  ");
		$row = mysqli_fetch_array($result);
		array_push($c,$row[0]);
 }

$_SESSION['q_plu']=$a;
$_SESSION['q_ele']=$b;
$_SESSION['q_mot']=$c;
?>
