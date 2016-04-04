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
         
                <div id="log_in">


                    <p>helllo</p>
                    <?php
                    echo $this->session->userdata('username');
                    ?>


                </div>
            </div>
        </div>
    </div>

    
    
    
    <?php  echo "<a href='".site_url('login/loggedout')."'>Logout</a>" ?>
</body>

</html>