<h1>All orders</h1>



<?php
		echo "<table>";
		echo "<tr><th>ID</th><th>CID</th><th>Date</th><th>Time</th><th>Total</th><th>Credit Number</th><th>Month</th><th>Year</th><th></th><th></th></tr>";
		
	
		foreach ($orders as $order) {
			echo "<tr>";
			echo "<td>" . $order->id . "</td>";
 			echo "<td>" . $order->customer_id . "</td>";
			echo "<td>" . $order->order_date . "</td>";
			echo "<td>" . $order->order_time . "</td>";
			echo "<td>" . $order->total . "</td>";
			echo "<td>" . $order->creditcard_number. "</td>";
			echo "<td>" . $order->creditcard_month . "</td>";
			echo "<td>" . $order->creditcard_year. "</td>";
			
			echo "<td>" . anchor("order/delete/$order->id",'Delete',"onClick='return confirm(\"Do you really want to delete this record?\");'") . "</td>";
			echo "<td> | " . anchor("order/read/$order->id",'View') . "</td>";
				
			echo "</tr>";
		}
		echo "<table>";
		
		echo "<p><b>" . anchor("login/logout", "Logout") . "</p>";
?>	