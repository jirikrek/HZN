<?php
$db['db_server'] = "**********";
$db['db_user'] = "**********";
$db['db_pass'] = "**********";
$db['db_name'] = "**********";

foreach($db as $key => $value){
    
    define(strtoupper($key), $value);
    
    
    
}

$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if($connection){
    
  
    
}
 
