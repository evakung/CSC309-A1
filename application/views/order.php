<!-- All Orders Page --> 
<html>
<head>
<?php $bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";?>
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
	background-attachment: fixed;
}

table{ 
		margin: 0px auto;
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

.backbutton{
	display:inline;
	float:left;
	width:1200px;

}

.logout{
	position:absolute;
	font-size:20px;
	top:20;
   	right:50;

}
</style>
 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395429226.png" /></a></div>

<h1>All Checked Out Orders</h1>



<?php
		echo "<table>";
		echo "<tr><th>ID</th><th>CID</th><th>Date</th><th>Time</th><th>Total</th><th>Credit Number</th><th>Month</th><th>Year</th><th></th><th></th></tr>";
		
	
		foreach ($orders as $order) {
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
			echo "<td> | " . anchor("order/read/$order->id",'View') . "</td>";
				
			echo "</tr>";
		}
		echo "<table>";
		echo '<div class="backbutton"><p><span class="back">'. anchor('candystore/index','Back')."</span></div></p>" ;
		
	echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>	
