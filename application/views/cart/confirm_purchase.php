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
}

table{
	margin: 0px auto;
}
p{
	display:inline;
	color:red;
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

.back{

	background-image: url('https://cdn1.iconfinder.com/data/icons/basic-tab-bar-icons/20/Back_button.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}
</style>

</head>
<body> 

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395345733.png" />
</div>

<?php
	echo "<p>Note: Please double check on your order details and press confirm to proceeed. </p>";

	// $order_info  -- the variable that youare going to display infrom from. ie. $order_info->order_date etc.
	$cart = $this->session->userdata('cart'); // The info of all the items -- need to loop first, then call our the items ie. item['name']
	echo "<br><br><br>";

	echo "<h3> Order Information </h3>";
	echo "<table>";	
	echo "<tr><th>Name</th><th>Quantity</th><th>Price</th><th>Sub-Total</th></tr>";
		foreach($cart as $items){
			echo"<tr>";		
			echo "<td>".$items['name']."</td>";
			echo "<td>".$items['quantity']."</td>";
		
			echo "<td>  $".$items['price']."</td>";	
			echo "<td> $".$items['subtotal']."</td>";
	}

	echo "</table>";
	echo "<br><br><br>";
	echo "<h3> Payment Information </h3>";
	echo "<table>";
	echo "<tr><th>Customer ID</th><th>Order Date</th><th>Order Time</th><th>Card Number</th><th>Expiry Date</th></tr>";
	echo "<tr>";
	echo "<td>".$order_info->cid."</td>";
	echo "<td>".$order_info->date."</td>";
	echo "<td>".$order_info->time."</td>";
	echo "<td>".$order_info->credit_num."</td>";
	echo "<td>".$order_info->credit_month."/".$order_info->credit_year."</td>";

	echo "</table>";

	echo form_open('item/create');
	echo form_submit('submit', 'Confirm ');
	echo form_close();

	echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
 	echo '<p><span class="back">' . anchor('shoppingcart/purchase','Back') . "</span></p>";
?>

