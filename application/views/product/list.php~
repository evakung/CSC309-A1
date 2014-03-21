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
	background-image: url('<?php echo $bg; ?>'); 
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
	padding-left: 30px;  /* width of the image plus a little extra padding */
}
</style>

</head>
<body> 

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395300957.png" />
</div>


<?php 
		if ($this->session->userdata('is_admin')==0){ //1 otherwise
			echo "Admin Privledges";
			
			echo "<p>" . anchor('candystore/newForm','Add New Product') . "</p>";
			echo "<p>" . anchor('customer/index','View Customers') . "</p>";
			echo "<p>" . anchor('order/index','View Orders') . "</p>";
			
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

