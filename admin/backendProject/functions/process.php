<?php
require_once("../controllers/Messenger.php");
require_once("../controllers/ForExchange.php");
$appCurrency = "$";
$basemark = 5;

$exclusions = ["account-updates", "getReferrals"];
if(!in_array($post->case, $exclusions)){
	if(empty($session->user_id))die("Access Denied");
}
switch($post->case){
	case 'verify-account':
		$bank_det = $generic->getFromTable("bank_details", "account_number={$post->account_number}");
		if (count($bank_det)) {
			$response->status = 1;
			$response->data = reset($bank_det);
		}else $response->message = "Invalid Account Number";
	case 'user-details':	
		$user_det = $generic->getFromTable("users", "account_number={$post->account_number}");
		$response->user = reset($user_det);
		
	break;
	default: return(false);
}
?>
