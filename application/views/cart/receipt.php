<html>
<head>

<?php 
	$bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";
?>
<style type="text/css">
*{
	font-family:fantasy;
	text-align:center;
	color:#2B3856;
}

body{
	background-image: url('<?php echo $bg; ?>'); background-attachment: fixed;
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
.home{

	background-image: url('https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519941-001_Home-16.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}

</style>
<body>

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

 <button onclick="print()">Print this page</button>
 <form>
<input type=button value="Print Receipt Style"
onClick="writeMTable()">
</form>
 
 <script>
 function print()
 {
 	window.print();
 }

 function writeMTable() {
	 top.wRef=window.open('','myconsole',
	  'width=500,height=450,left=10,top=10'
	   +',menubar=1'
	   +',toolbar=0'
	   +',status=1'
	   +',scrollbars=1'
	   +',resizable=1')
	 top.wRef.document.writeln(
	  '<html><head><title>Multiplication Table</title></head>'
	 +'<body bgcolor=white onLoad="self.focus()">'
	 +'<center><font color=red><b><i>For printing, <a href=# onclick="window.print();return false;">click here</a> or press Ctrl+P</i></b></font>'
	 +'<H3>Meva CandyShop Order Reciept</H3>'
	 +'<h3>Order Information</h3>'
	 
	 +'<table>'
	 +	'<tr>'
	 		+'<td>Order ID</td>'
	 	+	'<td><?php echo $order_info->id;?></td>'
	 	+'</tr><tr><td>Order Date</td><td><?php echo $order_info->order_date;?></td>'
	 	+'</tr><tr><td>Order Time</td><td><?php echo $order_info->order_time;?></td></tr><tr>'
	+ '</table><h3>Items</h3><table><tr><td>Quantity</td><td>Item</td><td>Price</td><td>Sub-Total</td></tr>'
	 	+'<?php foreach($cart as $item):?><td><?php echo $item['quantity'];?></td><td><?php echo $item['name'];?></td>'
	 	+'	<td>$<?php echo $item['price'];?></td><td>$<?php echo $item['subtotal'];?>	</td><?php endforeach;?>'
	+' </table></br> </br> </br> </br> <?php echo "TOTAL : $"; ?> <?php echo $order_info->total;?></br> </br>'
	 )
	 
	 top.wRef.document.writeln(buf+'</center></body></html>')
	 top.wRef.document.close()
	}
 </script>
 
  
  <?php
echo '<p><span class="home">' . anchor('candystore/index',' Back to the Candyshop') . "</p></span>";
echo '<p><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>
</body>
</html>


