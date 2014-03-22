<html>
<head>
<?php $bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";?>
</head>

<style type="text/css">
*{
	font-family:fantasy;
	text-align:center;
	color:#2B3856;
}


body{
	background-image: url('<?php echo $bg; ?>'); 
	background-attachment: fixed;
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
.back{

	background-image: url('https://cdn1.iconfinder.com/data/icons/basic-tab-bar-icons/20/Back_button.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}


</style>
<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395302430.png" />
</div>

<!--<div margin="auto">--> 
<?php 
	
	echo form_open_multipart('candystore/create');
		
	echo form_label('Name:'); 
	echo form_error('name');
	echo form_input('name',set_value('name'),"required");
?> 
<br>
<?php
	echo form_label('Description:');
	echo form_error('description');
	echo form_input('description',set_value('description'),"required");
?> 
<br>
<?php
	echo form_label('Price:');
	echo form_error('price');
	echo form_input('price',set_value('price'),"required");
?> 
<br>
<?php
	echo form_label('Photo:');
	
	if(isset($fileerror))
		echo $fileerror;	
?>

<input type="file" name="userfile" size="20" /><br>
</div>

<?php 	
	
	echo form_submit('submit', 'Create');
	echo form_close();
?>
<br><br>
<?php 
	echo '<p><span class="back">' . anchor('candystore/index','Back') . "</span></p>"; 
	echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>


