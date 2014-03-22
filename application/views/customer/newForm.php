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
	background-image: url('<?php echo $bg; ?>'); background-attachment: fixed;
}

input{ 
	display: block;
	margin: 0px auto;
}

.red {
color: red;
}
.logout{
	position:absolute;
	font-size:20px;
	top:20;
   	right:50;

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
.back{

	background-image: url('https://cdn1.iconfinder.com/data/icons/basic-tab-bar-icons/20/Back_button.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}
</style>

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395304735.png" />
</div>
<?php 
	echo form_open_multipart('customer/create');
		
	echo form_label('First Name<span class="red">*</span>:'); 
	echo form_error('first');
	echo form_input('first',set_value('first'),"required");

	echo form_label('Last Name<span class="red">*</span>:');
	echo form_error('last');
	echo form_input('last',set_value('last'),"required");

	echo form_label('Login Username<span class="red">*</span>:');
	echo form_error('login');
	echo form_input('login',set_value('login'),"required");

	echo form_label('Password<span class="red">*</span>:');
	echo form_error('password');
	echo form_password('password',set_value('password'),"required");

	echo form_label('Confirm Password<span class="red">*</span>:');
	echo form_error('passwordconf');	
	echo form_password('passwordconf',set_value('password'),"required");

	echo form_label('Email<span class="red">*</span>:');
	echo form_error('email');
	echo form_input('email',set_value('email'),"required");
?>

<br><br>

<?php	

	echo form_submit('submit', 'Create');
	echo form_close();
?>
<p> <span class="red">*</span> = required fields </p>
<br><br>

<?php 
echo '<p><span class="back">' . anchor('login/index','Back') . "</span></p>";
echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>

