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

a:hover{
	color:white;
}
a:visited{
	color:#663366;
}
.back{

	background-image: url('https://cdn1.iconfinder.com/data/icons/basic-tab-bar-icons/20/Back_button.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
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
 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395363546.png" /></a></div>
<h3><b>Currently viewing information of : <?php echo $customer->login;?></b></h3>
<?php 
	
	echo "<p> First Name : " . $customer->first . "</p>";
	echo "<p> Last Name : " . $customer->last . "</p>";
	echo "<p> Login Username : " . $customer->login . "</p>";
	echo "<p> Password : " . $customer->password . "</p>";
	echo "<p> Email : " . $customer->email . "</p>";
	echo '<p><span class="back">' . anchor('customer/index','Back') . "</span></p>";
echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>	

