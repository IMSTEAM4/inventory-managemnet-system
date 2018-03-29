<?php
session_start();
include 'update.php';
$num=$_SESSION['q_ele'];
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

    <h1 style="font-family:courier; font-size:50px;"><b>ELECTRICAL</b></h1>
</center>
<form action="electrical.php" method="post" id="form1">
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px;">bulbs</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹223</button></span><span><button type="button" style="width:65px !important; margin:10px 50px;"><input type="number"  style="width:50px !important; "value= "<?php echo $num[0]; ?>" ></button></span><span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0  min=0 max="<?php echo $num[0];?>"></button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">lights</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹892</button></span><span><button type="button" style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[1]; ?>" ></button></span> <span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]"  pattern="[0-9]{5}"  value=0 min=0 max="<?php echo $num[1]; ?>"></button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">fan</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹2135</button></span><span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[2]; ?>" ></button></span> <span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[2]; ?>"></button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">switches</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹30</button></span> <span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[3]; ?>" ></button></span><span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[3]; ?>"></button></span><span><button type="submit" form="form1" value="submit" class="btn btn-warning btn-oval"  style="margin:10px 100px">Add</button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">wire</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹490</button></span><span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[4]; ?>" ></button></span> <span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[4]; ?>"></button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">indicator</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹58</button></span><span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[5]; ?>" ></button></span> <span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]"  pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[5]; ?>"></button></span><span><a href="<?php include 'order.php';?>" class="btn btn-danger btn-oval " style="margin:10px 100px">Order</a></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">study light</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹220</button></span> <span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[6]; ?>" ></button></span><span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[6]; ?>"></button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">electric clamps</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹55</button></span> <span><button type="button"  style="width:65px !important; margin:10px 50px;"><input type="number" style="width:50px !important; " value= "<?php echo $num[7]; ?>" ></button></span><span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]"  pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[7]; ?>"></button></span><span><a href="finalbill.php" class="btn btn-success btn-oval " style="margin:10px 100px">Tax invoice</a></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">blades</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹32</button></span> <span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[8]; ?>" ></button></span><span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[8]; ?>"></button></span>
	<br>
	<span><button type="button" class="btn btn-info btn-lg"  style="margin:10px 60px">soldering gun</span> <span><button 		type="button" class="btn btn-primary btn-circle" style="margin:10px 60px">₹1030</button></span><span><button type="button"  style="width:65px !important; margin:10px 50px"><input type="number" style="width:50px !important; " value= "<?php echo $num[9]; ?>" ></button></span> <span><button type="button"  style="margin:0px 10px"><input type="number" name="quantity[]" pattern="[0-9]{5}" value=0 min=0 max="<?php echo $num[9]; ?>"></button></span>


</form>
</body>
</body>
</html>

