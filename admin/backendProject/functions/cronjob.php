<?php
require_once("controllers/Generic.php");
require_once("controllers/DateDifference.php");
require_once("controllers/ParamControl.php");
$generic = new Generic;
$db = $generic->connect();
$company = $generic->company();
$paramcontrol = new ParamControl($generic);
// if($generic->islocalhost()){
//   $url = "http://localhost/apex/";
// }else{
//   $url = "https://apexforexglobal.com/";
// }
// $url = absolute_filepath($url);
// require_once("{$url}user/library/user_functions.php");
// // Delete all active investments
// $sql = "DELETE FROM tbl_accounts WHERE status=0 AND paid=0 AND date_created < DATE_SUB(now(), INTERVAL 1 DAY)";
// Get all active investments
$response = [];
$accounts = $generic->getFromTable("accounts", "status=1, identify=investment, identify=real-estate", 1, 0);

$lock_duration = $paramcontrol->load_sources("lock_duration");
foreach($accounts as $account){
  //Check if investment duration is still due
  $today            = date("Y-m-d H:i:s");
  $date_created     = date_create($account->date_created);
  $date_unclock     = date_create($account->next_unlock);
  $last_topup       = date_create($account->last_topup);
  $date_today       = date_create($today);

  $incr_diff        = date_diff($date_unclock, $date_today);
  $last_incremented_days = intval($incr_diff->days);
  $stopdate   = date("Ymd", strtotime("+{$account->expires}", strtotime($account->date_created)));
  $currdate   = date("Ymd");

  //Set status to completed
  if($currdate > $stopdate){
    $db->query("UPDATE accounts SET status='3' WHERE id='{$account->id}'") or die($db->error);
  }else{

    if(date("Ymd", strtotime($account->last_topup)) !== $currdate){
      $next_release = "";
      $number = (int) filter_var($account->duration, FILTER_SANITIZE_NUMBER_INT);
      $percent = get_percent_of($account->roi, $account->amount);
      $account->increase = round(($percent / $number), 2);

      if($last_incremented_days == 0 || (strtotime($account->next_unlock) < strtotime($today))){
        $next_unlock   = date("Y-m-d H:i:s", strtotime("+{$lock_duration}", strtotime($account->next_unlock)));
        $next_release = "next_unlock='{$next_unlock}',";
      }

      $sql  = "UPDATE accounts SET {$next_release} last_topup=now() WHERE id='{$account->id}'";
      $con = $db->query($sql);

      // $rand = md5(time().rand());
      // $trs = $db->query("INSERT INTO transaction (user_id, tx_no, tx_type, paid_into, account_details, amount, description, account_id, status) VALUES ('{$account->user_id}', '{$rand}', 'topup', 'MYWALLET', 'xxxxxxxxxxxxxxxxx', '{$account->increase}', 'Top Up for {$account->name} investment','{$account->id}', '1')");
      //
      // if(!$trs){
      //  $response[$account->id] = $db->error;
      // }else{
      //  $response[$account->id] = $account->increase;
      // }
    }
  }
}
see($response);
?>
