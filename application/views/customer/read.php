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

</style>

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395307027.png" />
</div>
<h2>here is your dirty bitch</h2>
<?php 
	
	echo "<p> First Name = " . $customer->first . "</p>";
	echo "<p> Last Name = " . $customer->last . "</p>";
	echo "<p> Login Username = " . $customer->login . "</p>";
	echo "<p> Password = " . $customer->password . "</p>";
	echo "<p> Email = " . $customer->email . "</p>";
	echo "<b><p>" . anchor('customer/index','<< Back') . "</p></b>";
?>	
