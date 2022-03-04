<?php
//ini_set('display_errors' , 'On');
error_reporting(E_ALL);


	$user = $_POST['user'];
	$password = $_POST['password'];
	
	
	if(  isset($user) && isset($password) ){
		if($user == "xico" && $password == "123"){
			header("location: home.html");
		}else if($user == "jakim" && $password == "bio"){
			header("location: home.html");
		}else{
			header("location: loginError.html");
		}
	}
?>