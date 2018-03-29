<?php

session_start();

$id= $_POST["first_name"];

$_SESSION['fb']=array();
$_SESSION['product']=array();
$_SESSION['rate']=array();
$_SESSION['quant']=array();

$host="localhost";

$username="root";

$password="";

$db_name="imsproject";

$tbl_name="login";

$conn = mysqli_connect($host, $username, $password, $db_name);


if (!$conn)
{
	die("CONNECTION FAILED: " . mysqli_connect_error());

}

$sql = "SELECT * FROM $tbl_name WHERE login='$id' ";

$result=mysqli_query($conn,$sql);

$count=mysqli_num_rows($result);

if ($count==1) {
	include 'update.php';
    header("Location:categeories.html");
} else {
	$_SESSION['errors'] = array("Invalid Credentials");
	header("Location:index.html");
	
}
unset($_SESSION['fb']);
$conn->close();
?>
