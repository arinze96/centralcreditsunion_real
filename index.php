
<?php
session_start();
require_once ("admin/controllers/Controllers.php");
// require_once ("admin/controllers/NumberFormatter.php");

$session	=	(object)$_SESSION;
$generic = new Generic;
$generic->connect();
$company = $generic->company();
$uri = $generic->getURIdata();
$currency = "&dollar;";
$ext = pathinfo($uri->page_source, PATHINFO_EXTENSION);
if(!empty($ext)){
  $url = $_SERVER['REQUEST_URI'];
  $url = str_replace(".$ext","",$url);
  header("Location: $url");
}
$paramControl = new ParamControl($generic);
$fmn = new NumberFormatter("en", NumberFormatter::DECIMAL);

$valid_pages = [
	''=>"home.php",
	'404'=>"404.php",
	'blog'=>"blog.php",
	'legal'=>"legal.php",
	'history'=>'history.php',
	'sign-in'=>"sign-in.php",
	'sign-out'=>"sign-out.php",
	'careers'=>"careers.php",
	'contact'=>"contact.php",
	'register'=>"register.php",
	'get-loan'=>"get-loan.php",
	'AMLPolicy'=>"AMLPolicy.php",
	'locations'=>"locations.php",
	'diversity'=>"diversity.php",
	'send-money'=>"send-money.php",
	'sponsoring'=>"sponsoring.php",
	'leadership'=>"leadership.php",
	'dash-board'=>"dash-board.php",
	'e-statement'=>"e-statement.php",
	'transactions'=>"transactions.php",
	'lock-account'=>"lock-account.php",
	'crypto-wallet'=>"crypto-wallet.php",
	'deposit-funds'=>"deposit-funds.php",
	'consumer-loan'=>"consumer-loan.php",
	'withdraw-funds'=>"withdraw-funds.php",
	'profile-setting'=>"profile-setting.php",
	'chip-debit-card'=>"chip-debit-card.php",
	'terms&conditions'=>'terms&conditions.php',
	'community-giving'=>"community-giving.php",
	'chip-credit-card'=>"chip-credit-card.php",
	'lending-services'=>"lending-services.php",
	'warehouse-lending'=>"warehouse-lending.php",
	'commercial-lending'=>"commercial-lending.php",
	'business-philosophy'=>'business-philosophy.php',
	'fund-tranfer-receipt'=>"fund-tranfer-receipt.php",
	'register-bank-account'=>"register-bank-account.php",
];

$cache_control = "?ab";

$page_exists = isset($valid_pages[$uri->page_source]);
if($page_exists == true){
  require_once("views/{$valid_pages[$uri->page_source]}");
}else{
  require_once("views/404.php");
}
?>
