<?php

// Purpose is same DB Object can be used multiple times,


require_once('classes/DB.php');

$users = DB::getInstance()->query('SELECT * FROM single_device limit 1');

if ($users->count()) {
    foreach ($users->results() as $user) {
        //echo 'id: ', $user->transaction_checksum, ' ', 'Name: ', $user->transaction_affiliate_id, "<br>";
    }
}

$db1 = new DB();

?>