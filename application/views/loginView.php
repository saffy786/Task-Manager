<!DOCTYPE HTML>
 <html>
  <head>
   
   <title>Login</title>
  </head>
  <body>
   
        <h1>Task Manager</h1>
        
        <div id="box1">
        <div class="wrapper">
        <div class="half">
        <h1>Login</h1>
        <div id="log_in">
        <?php

if (isset($errormessage))
	{
	echo "$errormessage";
	}

if (isset($loginerrors))
	{
	echo "$loginerrors";
	}

// echo validation_errors('<p class="error">');

echo form_open('login/validate_credentials');
echo form_label('Username: ');
echo "<input type = 'text' name='username' id='username' placeholder='Username' Required >";
echo form_label('Password: ');
echo "<input type = 'password' name='password' placeholder='Password' Required >";
echo form_submit('login_submit', 'Login');
echo form_close();
?>
        </div>
        </div>
      
        <div class="half">
        <h1>Register Client</h1>
        
        <div id="register">
         <?php

if (isset($account_created))
	{
	echo "$account_created";
	}

if (isset($regerrors))
	{
	echo "$regerrors";
	}

// echo validation_errors('<p class="error">');

echo form_open('login/insert');
echo form_label('First name:', 'first_name');
echo "<input name='first_name' placeholder='First Name' >";
echo form_label('Last name:', 'last_name');
echo "<input name='last_name' placeholder='Last Name' >";
echo form_label('Username:', 'username');
echo "<input name='username' placeholder='Username' >";
echo form_label('Email:', 'email');
echo "<input name='email' placeholder='Email' >";
echo form_label('Password:', 'password');
echo "<input name='password' type = 'password' placeholder='Password' >";
echo form_label('Confirm Password:', 'password_confirm');
echo "<input name='password_confirm' type = 'password' placeholder='Confirm Password'>";
echo form_submit('add_btn', 'Register');
echo form_close();
?>
        </div>
        </div>
        </div>
        </div>
     
       
</body>
  
</html>