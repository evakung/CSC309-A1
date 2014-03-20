<h2>add into cart</h2>
<?php 
	echo "<p>" . anchor('candystore/index','Back') . "</p>";

	echo "<p> ID = " . $product->id . "</p>";
	echo "<p> NAME = " . $product->name . "</p>";
	echo "<p> Description = " . $product->description . "</p>";
	echo "<p> Price = " . $product->price . "</p>";
	echo "<p><img src='" . base_url() . "images/product/" . $product->photo_url . "' width='100px'/></p>";

	
	//echo form_open('shoppingcart/get_quantity');
	//echo form_input('quantity',set_value('quantity'));
	
	//echo "<td>" . anchor("shoppingcart/add_into_cart/$product->id",'Order') . "</td>";
	
	
?>	


<html>
<head>
<title>My Form</title>
</head>
<body>


<?php echo form_open('shoppingcart/add_to_cart'); ?>

<h5>Quantity</h5>
<input type="text" name="quantity" value="" size="5" />
<p name="pid">
<?php echo $product->id;?>
</p>

<div><input type="submit" value="Order Now" /></div>
<?php form_close();?>
</form>

</body>
</html>

