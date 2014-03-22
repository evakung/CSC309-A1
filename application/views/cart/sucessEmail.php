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

.home{

	background-image: url('https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519941-001_Home-16.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}
</style>

</head>
<body> 
<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395518099.png" />
</div>


<h4> Your receipt has been succesfully emailed to you. <br>Please check your email for the electronic copy of the receipt! </h4>

<?php
	echo '<p><span class="home">' . anchor('candystore/index',' Back to the Candyshop') . "</p></span>";
	echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>
