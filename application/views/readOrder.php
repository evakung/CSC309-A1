<html>
<head>
<?php 
	$bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";
?>
</head>
<!-- #f8bfe2pink #809cf4blue --> 
<style type="text/css">
*{
	font-family:fantasy;
	text-align:center;
	color:#2B3856;
}


body{
	background-image: url('<?php echo $bg; ?>'); 
}

input{ 
	display: block;
}
	
</style>
<body>
 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395302158.png" /></div>
<h2>Order Entry</h2>


<br><br>
<?php 
echo "<table>";
		echo "<tr><th>ID</th><th>CID</th><th>Date</th><th>Time</th><th>Total</th><th>Credit Number</th><th>Month</th><th>Year</th><th></th><th></th>";
		echo "<tr>";
			echo "<td>" . $order->id . "</td>";
 			echo "<td>" . $order->customer_id . "</td>";
			echo "<td>" . $order->order_date . "</td>";
			echo "<td>" . $order->order_time . "</td>";
			echo "<td>" . $order->total . "</td>";
			echo "<td>" . $order->creditcard_number. "</td>";
			echo "<td>" . $order->creditcard_month . "</td>";
			echo "<td>" . $order->creditcard_year. "</td>";
			
			echo "<td>" . anchor("order/delete/$order->id",'Delete',"onClick='return confirm(\"Do you really want to delete this record?\");'") . "</td>";
				
			echo "</tr>";
		echo "</table>";
?>
</body>
</html>

