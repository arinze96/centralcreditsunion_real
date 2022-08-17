<?php

function prepare_new_member($post) {
	global $uri;
	if(!empty($post->from_admin) || ($post->password == $post->password2)){
		if(empty($post->password))$post->password = "DEFAULT";
		$post->password = password_hash($post->password, PASSWORD_DEFAULT);
		$post->username = substr(explode("@", $post->email)[0].random(3), 0, 10);
		$post->picture_ref = "{$uri->backend}images/c_icon.png";
		$post->return_values = 1;
	}else $post->error = "password does not match";
	return $post;
}

function site_login($user, $action = 'Login'){
	global $generic;
  	$uri = $generic->getURIdata();
	$response = new stdClass;
	if(!empty($user->primary_key))$user->id = $user->primary_key;

	$_SESSION["mloggedin"] = 1;
	$_SESSION["user_id"] = $user->id;
	$_SESSION["email"] = $user->email;
	$_SESSION["username"] = $user->username;
	$_SESSION["user_name"] = "{$user->first_name}";

	$response->status = 1;
  	$desc = ["Login"=>"Welcome, {$user->first_name}", "Registration"=>"Welcome, your registration was successful."];
	$response->message = $desc[$action];
	$response->id = $user->id;
	return $response;
}

function sendCode($messenger, $user) {
	global $generic;
	$actions 		= [
		"login"=>"login",
		"resetPassword"=>"reset password",
		"verify-email"=>"verify your email",
		"wallet"=>"modify your wallet",
		"update-email"=>"update your email",
		"changeWallet"=>"change wallet address",
		"withdrawal"=>"authenticate your withdrawal",
	];

	$action 		= $messenger->pinAction;
	$title  		= $actions[$action];
	$company 		= $generic->company();
	if(empty($_SESSION[$action])){
		$loginCode 	= rand(100000,999999);
		$_SESSION[$action] = $loginCode;
	}else {
		$loginCode 	=  $_SESSION[$action];
	}
	$mail 			= (object)[
		'subject'		=>	"Token",
		'body'			=>	"Use this token to {$title}. \n $loginCode",
		'from'			=>	$company->email,
		'to'				=>	$user->email,
		'from_name'	=>	$company->name,
		'to_name'		=>	"{$user->first_name}",
		"template"  =>  "token",
		"token"     =>  $loginCode
	];
	$response 	= $messenger->sendMail($mail);
	if(in_array($generic->getServer(), $generic->getLocalServers())){
		$response->{$action} = $loginCode;
	}
	return $response;
}

function verifyPin($formData){
	global $generic;
	$user = $generic->getFromTable("users", "id={$_SESSION['user_id']}");
	$user = reset($user);
	// see($formData);
	if($user->account_pin != $formData->pin){
		$formData->error = "wrong pin or account details";
	}
	return $formData;
}

function lockAccount($id){
	global $generic;
	$response = new stdClass;
	$date = date("Y-m-d");
	$user_id = $_SESSION['user_id'];
	$trans = $generic->getFromTable("transaction", "user_id={$user_id}");
	$today = array_filter($trans, function($trx) use ($date){
		$_date = new DateTime($trx->date);
		return $_date->format("Y-m-d") == $date;
	});

	if (count($today) > 8) {
		$db = $generic->connect();
		$db->query("UPDATE users SET lock_account='1' WHERE id='{$user_id}'");
		$response->message = "Account Locked";
		$response->locked = 1;
	}else {
		$response->message = "Successful";
	}
	$response->status = 1;
	return  $response;
}
?>
