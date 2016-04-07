<!DOCTYPE HTML>
 <html>
  <head>
   <link href="<?php echo base_url() ."/css/style.css";?>" rel="stylesheet" type="text/css">
   <title>Login</title>
  </head>
  <body>
   

      <h1>Welcome To Task Manager</h1>
	
      <div class="form-bg">
       
  
<?php


echo form_open('login/validate_credentials');
?>

      <h2>Login To Task Manager</h2>
      
            <?php

if (isset($errormessage))
	{
	echo "$errormessage";
	}

if (isset($loginerrors))
	{
	echo "$loginerrors";
	}
?> 
     
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <button name="login_submit" type="submit">Login</button>
<?php
echo form_close();
?>
      
  </div>
     
     
     
     
     
      
      <!---------------register client ----------------------------->
      
     
     
     
     <div class="form-bg-reg">
    
<?php


echo form_open('login/insert');
?>

      
        <h2>Create A Task Manager Account</h2>
        
         <?php

if (isset($account_created))
	{
	echo "$account_created";
	}

if (isset($regerrors))
	{
	echo "$regerrors";
	}

?>
        <input type="text" class="form-control" name="first_name" placeholder="First Name" required="" autofocus="" />
	<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="" autofocus="" />
	<input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
	<input type="text" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
	<input type="password" class="form-control" name="password" placeholder="Password" required=""/>
	<input type="password" class="form-control" name="password_confirm" placeholder="Confirm Password" required=""/>    
	<button name="add_btn" type="submit">Register</button>
      
<?php
echo form_close();
?>
      
    
        </div>
     
       
</body>
  
</html>