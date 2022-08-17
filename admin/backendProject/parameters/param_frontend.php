

<?php
$user_id = empty($_SESSION['user_id']) ? 0 : $_SESSION['user_id'];
$front = [
 "loginMembers"=> [ //Signin Parameters
    "table" 			=> "users",
    "primary_key"	=> "id",

    "username_col"=> "username",
    "password_col"=> "password",
    "name_col"  	=> "first_name",
    "email_col" 	=> "email",
    "image_col"		=> "picture_ref",
    "phone_col"		=> "phone",

    "unique_key" 	=>"email",
    "fixed_values" 	=>"status=1, type=3",
    "callback" 		=> "site_login",
    
  ],

];

?>
