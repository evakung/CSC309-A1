<html>
<head>
<?php 
	$bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";
?>
</head>

<style type="text/css">
*{
	font-family:fantasy;
	text-align:left;
	color:#2B3856;
	margin-right:auto;
	margin-left:auto;
}


body{
	background-image: url('<?php echo $bg; ?>'); 
}
form{
	margin: 0px auto;
	float:center;
	position:relative;
}

</style>
<body> <div align="left"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395342334.png" /></div>
<!--<div id="login_form" style="margin-right:auto; margin-left:auto;">
	<!--<h1>login_form</h1>
	-->
<div align="center">
<?php 
	echo "<p> Login </p>";
	echo form_open('login/validate_credentials');
	echo form_input('login',set_value('login'));
?>
<br>
<?php	
	echo "<p> Password </p>";
	echo form_password('password',set_value('password'));
	echo form_submit('submit', 'Login');
	echo anchor('login/signup', 'Create Account')
	
	?>
</div>
<section>
<!--
</div>-->
</body>
