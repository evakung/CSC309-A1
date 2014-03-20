<h1>NEW FORM!!! :D</h1>


<style>
	input { display: block;}
	
</style>

<?php 
	echo "<p>" . anchor('customer/index','Back') . "</p>";
	
	echo form_open_multipart('customer/create');
		
	echo form_label('First'); 
	echo form_error('first');
	echo form_input('first',set_value('first'),"required");
	
	echo form_label('Last');
	echo form_error('last');
	echo form_input('last',set_value('last'),"required");
	
	echo form_label('Login');
	echo form_error('login');
	echo form_input('login',set_value('login'),"required");
	
	echo form_label('Password');
	echo form_error('password');
	echo form_input('password',set_value('password'),"required");
	
	echo form_label('Email');
	echo form_error('email');
	echo form_input('email',set_value('email'),"required");
	

	
	
	if(isset($fileerror))
		echo $fileerror;	
?>	
	
<?php 	
	
	echo form_submit('submit', 'create');
	echo form_close();
?>	

