
<h2>Edit dat bitch</h2>

<style>
	input { display: block;}
	
</style>

<?php 
	echo "<p>" . anchor('customer/index','Back') . "</p>";
	
	echo form_open("customer/update/$customer->id");
	
	echo form_label('First'); 
	echo form_error('first');
	echo form_input('first',$customer->first,"required");
	
	echo form_label('Last');
	echo form_error('last');
	echo form_input('last',$customer->last,"required");
	
	echo form_label('Login');
	echo form_error('login');
	echo form_input('login',$customer->login,"required");
	
	echo form_label('Password');
	echo form_error('password');
	echo form_input('password',$customer->password,"required");
	
	echo form_label('Email');
	echo form_error('email');
	echo form_input('email',$customer->email,"required");
	

	
	
	echo form_submit('submit', 'Save');
	echo form_close();
?>	

