<html>
<head>
<?php 
	$bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";
?>
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
}

input{ 
	display: block;
}
	
</style>
<body>
 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395302158.png" /></div>
<h2>Product Entry</h2>
<?php 

	echo "<p> ID = " . $product->id . "</p>";
	echo "<p> NAME = " . $product->name . "</p>";
	echo "<p> Description = " . $product->description . "</p>";
	echo "<p> Price = " . $product->price . "</p>";
	echo "<p><img src='" . base_url() . "images/product/" . $product->photo_url . "' width='100px'/></p>";
		
?>	


<br><br>
<?php 
echo "<p>" . anchor('customer/index','<< Back') . "</p>";
?>
</body>
</html>

