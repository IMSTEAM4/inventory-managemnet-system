<?php
session_start();
include 'update.php';
$num=$_SESSION['q_mot'];
?>
<html>
<body>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

.btn-lg{
    width: 250px !important;
}
.btn-circle{
    width: 80px !important;
}
.btn-oval{
    width: 100px !important;
    button-radius:50px;
}
</style>
</head>
<body>
<center>

    <h1 style="font-family:courier; font-size:50px;"><b>MOTORS</b></h1>
</center>
<form action="motors.php" method="post" id="form1">
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px;">1 Inch CRI Pumps</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹24720</button></span><span><button type="button" style="width:65px !important; margin:10px 50px;"><input type="number"  style="width:50px !important; "value= "<?php echo $num[0]; ?>" ></button></span><span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0  min=0 max="<?php echo $num[0];?>"></button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">Pump Pipes</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹250</button></span><span><button type="button" style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[1]; ?>" ></button></span> <span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]"  pattern="[0-9]{5}"  value=0 min=0 max="<?php echo $num[1]; ?>"></button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">Agricultural Motor</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹13789</button></span><span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[2]; ?>" ></button></span> <span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[2]; ?>"></button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">3/4 Inch Motor</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹22900</button></span> <span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[3]; ?>" ></button></span><span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[3]; ?>"></button></span><span><button type="submit" form="form1" value="submit" class="btn btn-warning btn-oval"  style="margin:10px 100px">Add</button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">PVC Motors</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹9870</button></span><span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[4]; ?>" ></button></span> <span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[4]; ?>"></button></span>
<a href="<?php include 'order.php';?>" class="btn btn-danger btn-oval " style="margin:10px 100px">order</a></span>

</form>
</body>
</body>
</html>

