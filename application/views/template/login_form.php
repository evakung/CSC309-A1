<div id="login_form">
	<h1>login_form</h1>
	<?php 
	
	echo form_open('login/validate_credentials');
	echo form_input('login',set_value('login'));
	
	
	echo form_password('password',set_value('password'));
	echo form_submit('submit', 'Login');
	echo anchor('login/signup', 'Create Account')
	
	?>

</div>