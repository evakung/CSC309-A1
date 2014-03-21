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

a:hover{
	color:white;
}
a:visited{
	color:#663366;
}
a:visited:hover{
	color:white;
}
</style>

</head>
<body> 
	<div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395362361.png" />
</div>
<p>Your log in has failed, you have have entered an incorrecct username and/or password. <br>Please try again.</p>
<br><br><br>
<?php echo "<p>" . anchor('login/index','<< Back') . "</p>";?>
