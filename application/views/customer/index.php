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

.back{
	background-image:url('https://cdn1.iconfinder.com/data/icons/basic-tab-bar-icons/20/Back_button.png');
	background-repeat:no-repeat;
	padding-left:30px;
}

</style>

 <div align="center"><img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395309189.png" /></div>
<h1>HARO</h1>
<?php 
	echo "<p>" . anchor('customer/newForm','Add new user') . "</p>";
	echo "<p>" . anchor('candystore/index','Home') . "</p>";


	
	echo "<p>" . anchor('customer/deleteAll','Delete All') . "</p>";
	echo "<table>";
	echo "<tr><th>First Name</th><th>Last Name</th><th>Login Username</th><th>Password</th><th>Email</th></tr>";
	
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
	echo '<p><span class="back">' . anchor('candystore/index','Back') . "</span></p>"; 
	echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';	
?>
