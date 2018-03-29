<?php

$name_e=array('bulbs','lights','fan','switches','wire','indicator','study light','electricclamps','blades','soldering gun');
$name_p=array('Ashirvad Pipes','blow mould water tank','water pipe','fittings','taps','clamps','cpvc tee','couplings','valves','heaters');
$name_m=array('1 inch CRI Pump','pump pipes','agricultural motor','3/4 inch motor','pvc motors');
$host="localhost";

$username="root";

$password="";

$db_name="imsproject";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn)
{
	die("CONNECTION FAILED: " . mysqli_connect_error());

}
else{
		foreach( $name_e as $key => $n ) {
			mysqli_query($conn,"UPDATE items ". "SET number = 100 ". "WHERE number=0 ");
 		}
 		foreach( $name_p as $key => $n ) {
			mysqli_query($conn,"UPDATE items ". "SET number = 100 ". "WHERE number=0 ");
 		}
 		foreach( $name_m as $key => $n ) {
			mysqli_query($conn,"UPDATE items ". "SET number = 100 ". "WHERE number=0 ");
 		}
}
include 'update.php';
?>
