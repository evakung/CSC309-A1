<h1>HARO</h1>
<?php 
	echo "<p>" . anchor('customer/newForm','add new bitches') . "</p>";
	echo "<p>" . anchor('candystore/index','go home bitch') . "</p>";


	echo "<table>";
	echo "<tr><th>First</th><th>LAst</th><th>login</th><th>password</th><th>email</th></tr>";
	
	foreach ($customers as $customer) {
		echo "<tr>";
		echo "<td>" . $customer->first . "</td>";
		echo "<td>" . $customer->last . "</td>";
		echo "<td>" . $customer->login . "</td>";
		echo "<td>" . $customer->password . "</td>";
		echo "<td>" . $customer->email . "</td>";
		
	
		echo "<td>" . anchor("customer/delete/$customer->id",'Delete',"onClick='return confirm(\"Do you really want to delete this record?\");'") . "</td>";
		echo "<td>" . anchor("customer/editForm/$customer->id",'Edit') . "</td>";
		echo "<td>" . anchor("customer/read/$customer->id",'View') . "</td>";
	
		echo "</tr>";
	}
	echo "<table>";
	?>
