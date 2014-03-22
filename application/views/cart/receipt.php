<html>
<head>

<?php $bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";?>
<style type="text/css">
*{
	font-family:fantasy;
	text-align:center;
	color:#2B3856;
}

body{
	background-image: url('<?php echo $bg; ?>'); 
	background-attachment: fixed;
}

table{
	margin: 0px auto;
}
p{
	display:inline;
}

a:hover{
	color:white;
}

a:visited{
	color:#663366;
}

a:visited:hover{
	color:white;
}

.logout{
	position:absolute;
	font-size:20px;
	top:20;
   	right:50;

}
</style>
<body>

<<<<<<< HEAD
<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395357042.png" />
</div>
<?php
	print_r($cart);
	echo "<br>FINAL RECEIPT!";
	echo "<p><br>" . anchor('candystore/index',' Back to the Candyshop') . "</p>";
	echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
=======
 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395357042.png" /></div>

 
 <h3>Order Information</h3>
 
 <table>
 	<tr>
 		<td>Order ID</td>
 		<td><?php echo $order_info->id;?></td>
 	</tr>
 	<tr>
 		<td>Order Date</td>
 		<td><?php echo $order_info->order_date;?></td>
 	</tr>
 	<tr>
 		<td>Order Time</td>
 		<td><?php echo $order_info->order_time;?></td>
 	</tr>
 	<tr>
 </table>
 <h3>Items</h3>
 <table>
 	<tr><td>Quantity</td><td>Item</td><td>Price</td><td>Sub-Total</td></tr>
 	<?php foreach($cart as $item):?>
 		<td><?php echo $item['quantity'];?>		</td>
 		<td><?php echo $item['name'];?>			</td>
 		<td>$<?php echo $item['price'];?>		</td>
 		<td>$<?php echo $item['subtotal'];?>	</td>
 	<?php endforeach;?>
 </table>
  </br> </br> </br> </br>
 <?php echo "TOTAL : $"; ?>
 <?php echo $order_info->total;?>
  </br> </br>
 <?php




echo "<p>" . anchor('candystore/index',' Back to the Candyshop') . "</p>";
echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
>>>>>>> 5177799dc622670b8339413c403fe045ff590289
?>

</body>
</html>


