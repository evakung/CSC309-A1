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

 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395422745.png" /></a></div>



<h2>Cannot process payment because your cart is empty!</h2>

<?php 
echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>

