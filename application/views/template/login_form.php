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
		margin: 0px auto;
}


body{
	background-image: url('<?php echo $bg; ?>'); 
}


</style>
<body>
<div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395307606.png" /></div>
<!--<div id="login_form" style="margin-right:auto; margin-left:auto;">
	<!--<h1>login_form</h1>
	-->
<?php 
	
	echo form_open('login/validate_credentials');
	echo form_input('login',set_value('login'));
?>
<br><br>
<?php	
	
	echo form_password('password',set_value('password'));
	echo form_submit('submit', 'Login');
	echo anchor('login/signup', 'Create Account')
	
	?>
<!--
</div>-->
</body>
