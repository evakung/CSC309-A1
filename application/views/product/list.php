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
/*table.producttable td:link{
	color: white ;
	background-color: transparent ;
	text-decoration: none ;
}
table.producttable td:hover{
	background-color:white;
}
*/

</style>

</head>
<body> 

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395300957.png" />
</div>

<!--<h2>Product Table</h2>-->
<?php 
		echo "<p>" . anchor('candystore/newForm','Add New') . "</p>";
		echo "<p>" . anchor('customer/index','come here') . "</p>";
		
		if($this->session->userdata('is_logged_in')==true){
			echo "<p>" . anchor('shoppingcart/view_shopping_cart','cart') . "</p>";

		}else{
			echo "please log in";
		}
		//echo "<p>" . anchor('shoppingcart/view_shopping_cart','cart') . "</p>";
		
		
		echo "<h2> WASSUP   " . $this->session->userdata('login') . "</h2>";
		echo "<p>here  </p>".$this->session->userdata('is_logged_in');
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
			echo "<td>" . anchor("candystore/delete/$product->id",'Delete',"onClick='return confirm(\"Do you really want to delete this record?\");'") . "</td>";
			echo "<td>" . anchor("candystore/editForm/$product->id",'Edit') . "</td>";
			echo "<td>" . anchor("candystore/read/$product->id",'View') . "</td>";
			echo "<td>" . anchor("shoppingcart/order_form/$product->id",'Order') . "</td>";
				
			echo "</tr>";
		}
		echo "<table>";
?>	
</body>
</html>
