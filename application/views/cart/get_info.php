<?php 
echo "<p>" . anchor('candystore/index','Back') . "</p>";

echo form_open_multipart('order/create');

echo form_label('creditcard_number');
echo form_error('creditcard_number');
echo form_input('creditcard_number',set_value('creditcard_number'),"required");

echo form_label('creditcard_month');
echo form_error('creditcard_month');
echo form_input('creditcard_month',set_value('creditcard_month'),"required");

echo form_label('creditcard_year');
echo form_error('creditcard_year');
echo form_input('creditcard_year',set_value('creditcard_year'),"required");


if(isset($fileerror))
	echo $fileerror;
?>

	
<?php 	
	
	echo form_submit('submit', 'Submit Credit Information');
	echo form_close();
?>	
