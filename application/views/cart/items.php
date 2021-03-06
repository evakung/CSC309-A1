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
	background-image: url('<?php echo $bg; ?>'); 
	background-attachment: fixed;
}

table{
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

.cart{	
 	background-image: url('http://zurametals.com/wp-content/themes/zurametals/images/cart-icon.png');
  	background-repeat: no-repeat;
	padding-left: 30px;  
}

.backbutton{
	width:890px;
	display:inline;
	float:left;
}

.cartbutton{
	display:inline;
	width:2000px;

}
</style>

</head>
<body> 

<div align="center">
	<img border="0" src="http://www.snazzyspace.com/banner-creator/banners/1395343118.png" />
</div>

<h2> Your cart has just been updated! </h2>

<table cellpadding="6" cellspacing="1" style="width:50%" border="0">
<tr>
  <th>Quantity</th>
  <th>Item name</th>
  <th style="text-align:right">Item Price</th>
  <th style="text-align:right">Sub-Total</th>
</tr>
<?php $i = 1; ?>
<?php foreach ($cart as $items): ?>
	<?php if ($items['quantity'] > 0):?>
	
	<?php echo form_hidden($i.'[name]', $items['name']); ?>

	<tr>
	  <td><?php echo $items['quantity']; ?></td>
	  <td>
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['name']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>
	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
	</tr>
<?php $i++; ?>
<?php endif;?>
<?php endforeach; ?>

<tr>
  <td colspan="2"> </td>
  <td colspan="1"> </td>
  <td class="right"><strong>Total</strong>: $<?php echo $total; ?></td>
  
</tr>

</table>
<br><br>
<?php echo '<div class="backbutton"><p><span class="back">' . anchor('candystore/index','Back') . "</span></p></div>";?>
<?php echo '<div class="cartbutton"><p><span class="cart">' . anchor('shoppingcart/view_shopping_cart','View Shopping Cart') . "</span></p></div>";
echo '<p id="icon"><b><span class="logout">' . anchor("login/logout", "Logout") . '</span></p>';
?>

</body>
</html>

