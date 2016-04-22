<?php

    try{
        $conn = new PDO('mysql:host=localhost;dbname=u1267493', 'u1267493', '04jul92');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

?>