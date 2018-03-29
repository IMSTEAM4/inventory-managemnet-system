<?php
session_start();
$tot=0;
$gst=0;
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Invoice</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>

<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1>Invoice</h1>
			<address contenteditable>
				<p>John</p>
				<p>101 Saw Road<br>Visakhapatnam</p>
				<p>(800) 525-1234</p>
			</address>
			<span><img alt="" src="img/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p><input type="text" placeholder="Recipient details"</p>
			</address>
			<table class="meta">
				<tr>
					<th><span contenteditable>Invoice #</span></th>
					<td><span contenteditable>132</span></td>
				</tr>
				<tr>
				
					<th><span contenteditable>Date</span></th>
					<td><span contenteditable><input type="date" </span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Due</span></th>
					<td><span id="prefix" contenteditable>₹</span><span><input type="number"</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span contenteditable>Item</span></th>
						<th><span contenteditable>Rate</span></th>
						<th><span contenteditable>Quantity</span></th>
						<th><span contenteditable>Price</span></th>
					</tr>
				</thead>
					<?php  foreach($_SESSION['fb'] as $p){
					echo "<tbody>";
					echo "<tr>";
						echo "<td><span contenteditable>";echo $p[0]; echo "</span></td>";
						echo "<td><span data-prefix>$</span><span contenteditable>"; echo $p[1]; echo "</span></td>";
						echo "<td><span contenteditable>"; echo $p[2]; echo "</span></td>";
						echo "<td><span data-prefix>$</span><span>"; echo ($p[1]*$p[2]); echo "</span></td>";
					echo "</tr>";
					echo "</tbody>";
					$tot=$tot+($p[1]*$p[2]);}
					?>
			</table>

			<table class="balance">
				<tr>
					<th><span contenteditable>Total</span></th>
					<td><span data-prefix>$</span><span><?php echo $tot;?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>state GST 9%</span></th>
					<td><span data-prefix>$</span><span contenteditable><?php $gst=$tot*(9/100); echo $gst;?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>central GST 9%</span></th>
					<td><span data-prefix>$</span><span contenteditable><?php echo $gst;?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Final Amount</span></th>
					<td><span data-prefix>$</span><span><?php echo $tot+(2*$gst);?></span></td>
				</tr>
				<tr>
					<th><span contenteditable>Amount Paid</span></th>
					<td><span data-prefix>$</span><span contenteditable>00</span></td>
				</tr>
				
			</table>
		</article>
		<aside>
			<h1><span contenteditable>Additional Notes</span></h1>
			<div contenteditable>
				<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
			</div>
		</aside>
	</body>
</html>
    <script  src="js/index.js"></script>

</body>

</html>
