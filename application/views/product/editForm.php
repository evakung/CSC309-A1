<html>
<head>
<?php 
	$bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";
?>
</head>

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
	margin: 0px auto;
}

</style>
<!--
<h2>Edit Product</h2>
 -->
<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395303043.png" />
</div>

<?php 
	
	
	echo form_open("candystore/update/$product->id");
	
	echo form_label('Name'); 
	echo form_error('name');
	echo form_input('name',$product->name,"required");
?>
<br>
<?php
	echo form_label('Description');
	echo form_error('description');
	echo form_input('description',$product->description,"required");
?>
<br>
<?php
	echo form_label('Price');
	echo form_error('price');
	echo form_input('price',$product->price,"required");
?>
<br>
<?php
	echo form_submit('submit', 'Save');
	echo form_close();
?>	
<br><br>
<?php
echo "<b><p>" . anchor('customer/index','<< Back') . "</p></b>";
?>
</body>
</html>


