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

</style>

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
echo "<p>" . anchor('customer/index','<< Back') . "</p>";
echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>
</body>
</html>


