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

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395305183.png" />
</div>


<h1>Congratulations!</h1>
<p>Your account has been created! 

<?php echo 
	anchor('login', 'Login Now');
	echo "<b><p>" . anchor('customer/index','<< Back') . "</p></b>";
?>