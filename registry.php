<?php

	$connect = mysqli_connect('localhost', 'root', '', 'mysql') or die(mysqli_error($connect));
	$query_insert = "INSERT INTO users(Name, Username, Password) VALUES ("'.$_POST["user"].'", "'.$_POST["user"].'", "'.$_POST["user"].'")









?>