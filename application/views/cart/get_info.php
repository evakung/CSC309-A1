<html>
<head>

<?php $bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";?>
<style type="text/css">
*{
	font-family:fantasy;
	text-align:center;
	color:#2B3856;
}

body{
	background-image: url('<?php echo $bg; ?>'); background-attachment: fixed;
}

table{
	margin: 0px auto;
}

p{
	display:inline;
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

.back{

	background-image: url('https://cdn1.iconfinder.com/data/icons/basic-tab-bar-icons/20/Back_button.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}
</style>

</head>
<body> 

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395344671.png" />
</div>

<?php	echo form_open_multipart('order/create'); ?>
<br>
<?php	echo form_label('Card Number');?>
<br>
<?php
	echo form_error('creditcard_number');
	echo form_input('creditcard_number',set_value('creditcard_number'),"required");
?>
<br><br>
<?php  echo form_label('Expiry Month');?>
<br>
<?php
	echo form_error('creditcard_month');
	echo form_input('creditcard_month',set_value('creditcard_month'),"required");
?>
<br><br>
<?php  echo form_label('Expiry Year');?>
<br>
<?php
	echo form_error('creditcard_year');
	echo form_input('creditcard_year',set_value('creditcard_year'),"required");

	if(isset($fileerror))
		echo $fileerror;
?>
<br><br><br>
<?php 	
	echo '<p><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
	echo form_submit('submit', 'Submit Payment Information');
	echo form_close();
	echo '<br><br><br><p><span class="back">' . anchor('shoppingcart/view_shopping_cart','Back') . "</span></p>";

?>	
