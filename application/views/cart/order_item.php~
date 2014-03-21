<!--<h2>add into cart</h2>
-->
<div align="center">
<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395303414.png" /></div>
<?php 
	

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
	
</style>



<title>My Form</title>
</head>
<body>

	<?php if ($fromcart === true):?>
		<?php echo form_open('shoppingcart/update_cart'); ?>
		
		<p>original quantity : <?php echo $quantity?> </p>
		
		<h5>Quantity</h5>
		<input type="text" name="quantity" value="" size="5" />
		<br/><br/>

		<div><input type="submit" value="Fix Order" /></div>
	<?php else:?>
	
		<?php echo form_open('shoppingcart/add_to_cart'); ?>
		
		<h5>Quantity</h5>
		<input type="text" name="quantity" value="" size="5" />
		<br/><br/>
		<div><input type="submit" value="Order Now" /></div>
	
	<?php endif;?>

<?php form_close();?>
</form>
<br><br>
<?php
	echo "<p>" . anchor('candystore/index','Back') . "</p>";
?>

</body>
</html>

