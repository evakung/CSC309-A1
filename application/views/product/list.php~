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
.cart{	
 	background-image: url('http://zurametals.com/wp-content/themes/zurametals/images/cart-icon.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}
.add{

	background-image: url('https://cdn0.iconfinder.com/data/icons/elite-food/512/candy-24.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}
.view{

	background-image: url('http://png-4.findicons.com/files/icons/949/token/16/msn.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}
.vieworder{

	background-image: url('https://www.bendzulla.com/images/help/membership/receipt_button.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}
</style>

</head>
<body> 

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395300957.png" />
</div>


<?php 
		if ($this->session->userdata('is_admin')==0){ //1 otherwise
			echo "<p><i>Admin Privileges</p></i>";
			
			echo '<p><span class="add">' . anchor('candystore/newForm','Add New Product') . "</span></p>";
			echo '<p><span class="view">' . anchor('customer/index','View Customers') . "</span></p>";
			echo '<p><span class="vieworder">' . anchor('order/index','View Orders') . "</span></p>";
			
		}
		
		
		if($this->session->userdata('is_logged_in')==true){
			echo '<p><span class="cart">' . anchor('shoppingcart/view_shopping_cart','My Shopping Cart') . '</span></p><br>'; //Users Cart option 

		}else{
			echo "You are not logged in, please log in or create a new account to access your shopping cart. ";
		}
		//echo "<p>" . anchor('shoppingcart/view_shopping_cart','cart') . "</p>";
		
		
		echo "<h2> Hello " . $this->session->userdata('login') . " ! </h2>";
?>
<table class="producttable">
<?php
		//echo "<table>";
		echo "<tr><th>Name</th><th>Description</th><th>Price</th><th>Photo</th></tr>";
		
		foreach ($products as $product) {
			echo "<tr>";
			echo "<td>" . $product->name . "</td>";
			echo "<td>" . $product->description . "</td>";
			echo "<td>" . $product->price . "</td>";
			echo "<td><img src='" . base_url() . "images/product/" . $product->photo_url . "' width='100px' /></td>";

			if ($this->session->userdata('is_admin')==0){
				echo "<td>" . anchor("candystore/delete/$product->id",'Delete',"onClick='return confirm(\"Do you really want to delete this record?\");'") . "</td>";
				echo "<td> | " . anchor("candystore/editForm/$product->id",'Edit') . "</td>";
			}
			echo "<td> | " . anchor("candystore/read/$product->id",'View') . "</td>";
			echo "<td> | " . anchor("shoppingcart/order_form/$product->id/false",'Order') . "</td>";
				
			echo "</tr>";
		}
		echo "<table>";
		echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>	
</body>
</html>

