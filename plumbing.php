<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['fb']))
    $_SESSION['fb'] = array();
if(!isset($_SESSION['product']))
    $_SESSION['product'] = array();
if(!isset($_SESSION['rate']))
    $_SESSION['rate'] = array();
if(!isset($_SESSION['quant']))
    $_SESSION['quant'] = array();  
$name=array('Ashirvad Pipes','blow mould water tank','water pipe','fittings','taps','clamps','cpvc tee','couplings','valves','heaters');

$qnt = $_POST['quantity'];

$host="localhost";

$username="root";

$password="";

$db_name="imsproject";



$conn = mysqli_connect($host, $username, $password, $db_name);


if (!$conn)
{
	die("CONNECTION FAILED: " . mysqli_connect_error());

}
$d=array();

foreach( $name as $key => $n ) {

	if($qnt[$key]!=0){
		$result = mysqli_query($conn,"SELECT amount,number FROM `items` WHERE `name` = '$n' ");
		$row = mysqli_fetch_array($result);
		array_push($d,$row[1]);
		$temp=array();	
		$c= $row[1] - $qnt[$key] ;
		array_push($_SESSION['product'],$n);
		array_push($_SESSION['rate'],$row[0]);
		array_push($_SESSION['quant'],$qnt[$key]);
		array_push($temp,$n,$row[0],$qnt[$key],"\n");
		array_push($_SESSION['fb'],$temp);
		$sql="UPDATE items ". "SET number = '$c' ". "WHERE name = '$n' " ;
		mysqli_query($conn,$sql);	
	}
	else
	{
		$result = mysqli_query($conn,"SELECT number FROM `items` WHERE `name` = '$n' ");
		$row = mysqli_fetch_array($result);
		array_push($d,$row[0]);
	}
 }

$_SESSION['q_plu']=$d;
unset($d);
include 'update.php';
header('Location:categeories.html');
$conn->close();

?>
