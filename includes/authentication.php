<?php 
if (!empty($session->mloggedin) && !empty($session->user_id)) {
    
    $user = $generic->getFromTable("users", "id={$session->user_id}");
    $user = reset($user);
    $transac = $generic->getFromTable("transaction", "user_id={$session->user_id}");
    // $transac = reset($transac);
    // see($transac);
    // if(count($transac) == count($transac) + 1){
        
    // }
    // see(count($transac));
    
    if(!empty($user->lock_account) && $uri->page_source != "lock-account"){
        header("Location: {$uri->site}lock-account");
        die();
    }


}else{
    header("Location: {$uri->site}sign-in?redirect={$uri->page_source}");
    die();
}

?>