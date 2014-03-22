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
	background-image: url('<?php echo $bg; ?>'); background-attachment: fixed;
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
<div align="center">
<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395303414.png" /></div>
<?php 
	

	echo "<p> Product ID: " . $product->id . "</p>";
	echo "<p> Name: " . $product->name . "</p>";
	echo "<p> Description: " . $product->description . "</p>";
	echo "<p> Item Price: " . $product->price . "</p>";
	echo "<p><img src='" . base_url() . "images/product/" . $product->photo_url . "' width='100px'/></p>";
?>	

<title>My Form</title>
</head>
<body>

	<?php if ($fromcart === true):?>
		<?php echo form_open('shoppingcart/update_cart'); ?>
		
		<p>Original Quantity : <?php echo $quantity?> </p>
		
		<h5>Quantity:</h5>
		<input type="text" name="quantity" value="" size="5" />
		<br/><br/>

		<div><input type="submit" value="Fix Order" /></div>
	<?php else:?>
	
		<?php echo form_open('shoppingcart/add_to_cart'); ?>
		
		<h5>Quantity :</h5>
		<input type="text" name="quantity" value="" size="5" />
		<br/><br/>
		<div><input type="submit" value="Order Now" /></div>
	
	<?php endif;?>

<?php form_close();?>
</form>
<br><br>
<?php
echo '<p><span class="back">'. anchor('candystore/index','Back') . "</span></p>";
echo '<p><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>

</body>
</html>

