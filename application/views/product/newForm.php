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
<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395302430.png" />
</div>
<div margin="auto">
<?php 
	
	
	echo form_open_multipart('candystore/create');
		
	echo form_label('Name:'); 
	echo form_error('name');
	echo form_input('name',set_value('name'),"required");
?> <br>
<?php
	echo form_label('Description:');
	echo form_error('description');
	echo form_input('description',set_value('description'),"required");
?> <br>
<?php
	echo form_label('Price:');
	echo form_error('price');
	echo form_input('price',set_value('price'),"required");
?> <br>
<?php
	echo form_label('Photo:');
	
	if(isset($fileerror))
		echo $fileerror;	
?>
<input type="file" name="userfile" size="20" />
<br>
</div>
<?php 	
	
	echo form_submit('submit', 'Create');
	echo form_close();
?><br><br>

<?php
echo "<b><p>" . anchor('candystore/index','<< Back') . "</p></b>";
?>

