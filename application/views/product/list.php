<h2>Product Table</h2>
<?php 
		echo "<p>" . anchor('candystore/newForm','Add New') . "</p>";
		echo "<p>" . anchor('customer/index','come here') . "</p>";
		echo "<p>" . anchor('shoppingcart/view_shopping_cart','cart') . "</p>";
		
		
		echo "<h2> WASSUP   " . $this->session->userdata('login') . "</h2>";
		echo "<p>here  </p>".$this->session->userdata('is_logged_in');
		
		echo "<table>";
		echo "<tr><th>Name</th><th>Description</th><th>Price</th><th>Photo</th></tr>";
		
		foreach ($products as $product) {
			echo "<tr>";
			echo "<td>" . $product->name . "</td>";
			echo "<td>" . $product->description . "</td>";
			echo "<td>" . $product->price . "</td>";
			echo "<td><img src='" . base_url() . "images/product/" . $product->photo_url . "' width='100px' /></td>";
				
			echo "<td>" . anchor("candystore/delete/$product->id",'Delete',"onClick='return confirm(\"Do you really want to delete this record?\");'") . "</td>";
			echo "<td>" . anchor("candystore/editForm/$product->id",'Edit') . "</td>";
			echo "<td>" . anchor("candystore/read/$product->id",'View') . "</td>";
			echo "<td>" . anchor("shoppingcart/order_form/$product->id",'Order') . "</td>";
				
			echo "</tr>";
		}
		echo "<table>";
?>	

