<?php
$servername = "localhost";
$username = "jcubitgr_ict";
$password = "123zxc";

//create
$conn = new mysqli($servername, $username, $password, 'jcubitgr_wecare');

//check connect
	if ($conn -> connect_error){
		die('Connect Error: '.$conn -> connect_error);
	}
?>
