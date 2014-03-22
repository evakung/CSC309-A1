<html>
<head>
<?php $bg="http://www.samsung-wallpapers.com/uploads/allimg/130523/1-130523011435.jpg";?>
</head>

<style type="text/css">
*{
	font-family:fantasy;
	text-align:center;
	color:#2B3856;
	margin-right:auto;
	margin-left:auto;
}


body{
	background-image: url('<?php echo $bg; ?>'); 
	background-attachment: fixed;
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
.backbuttonicon{
	background-image: url('https://cdn1.iconfinder.com/data/icons/basic-tab-bar-icons/20/Back_button.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
	
	
}

.backbutton{

	width:1000px;
	text-align:center;
}

.delete{
	float:right;
	width:1200px;
}
</style>

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395309189.png" />
</div>

<?php 
	// echo "<p>" . anchor('customer/newForm','Add new user') . "</p>";    Admins do not make new customers
	//echo '<p>' . anchor('customer/deleteAll','Delete All') . "</p>";
	echo "<table>";
	echo "<tr><th>First Name </th><th>Last Name </th><th>Login Username </th><th>Password </th><th>Email </th></tr>";
	
	if (isset($customers)){
		foreach ($customers as $customer) {
			echo "<tr>";
			echo "<td>" . $customer->first . "</td>";
			echo "<td>" . $customer->last . "</td>";
			echo "<td>" . $customer->login . "</td>";
			echo "<td>" . $customer->password . "</td>";
			echo "<td>" . $customer->email . "</td>";
			
		
			echo "<td>" . anchor("customer/delete/$customer->id",'Delete',"onClick='return confirm(\"Do you really want to delete this record?\");'") . "</td>";
	//		echo "<td>" . anchor("customer/editForm/$customer->id",'Edit') . "</td>";
			echo "<td>" . anchor("customer/read/$customer->id",'View') . "</td>";
		
			echo "</tr>";
		}	
	}
	echo "<table>";
	echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';	
	echo '<p><div class="delete">' . anchor('customer/deleteAll','Delete All') . "</p></div>";
	echo '<div class="backbutton"><p><span class="backbuttonicon">' . anchor('candystore/index','Back') . "</p></span></div>";


	
	
?>
