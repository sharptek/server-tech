<?php

    $db = new PDO("sqlite:users.db");
    

	//INSERT
	$name = $db->quote('Mike');
	$email = $db->quote('mike@hotmail.com');
//    echo $name." ".$email;
	$count = $db->exec("INSERT INTO user(name, email) VALUES ($name, $email)");

	echo $count;


?>