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
p{
	display:inline;
}
</style>

</head>
<body> 
<div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395344671.png" /></div>

<?php 
echo "<b><p>" . anchor('customer/index','<< Back') . "</p></b>";

echo form_open_multipart('order/create');
?><br>
<?php
echo form_label('Card Number(16 digits)');?><br><?php
echo form_error('creditcard_number');
echo form_input('creditcard_number',set_value('creditcard_number'),"required");
?>
<br><br>
<?php
echo form_label('Expiry Month');?><br><?php
echo form_error('creditcard_month');
echo form_input('creditcard_month',set_value('creditcard_month'),"required");
?><br><br><?php
echo form_label('Expiry Year');?><br><?php
echo form_error('creditcard_year');
echo form_input('creditcard_year',set_value('creditcard_year'),"required");


if(isset($fileerror))
	echo $fileerror;
?>
<br><br><br>
	
<?php 	
	
	echo form_submit('submit', 'Submit Payment Information');
	echo form_close();
?>	
