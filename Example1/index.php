<?php

// Purpose is same DB Object can be used multiple times,


require_once('classes/DB.php');

$users = DB::getInstance()->query('SELECT * FROM single_device limit 1');

if ($users->count()) {
    foreach ($users->results() as $user) {
        //echo 'id: ', $user->transaction_checksum, ' ', 'Name: ', $user->transaction_affiliate_id, "<br>";
    }
}

print "Niro for users = " . $users->getNiro();

$db1 = new DB();
$db2 = new DB();

print "Niro for db1 = " . $db1->getNiro();

$db1->setNiro(5);

print "\n\n ---- \n\n";
print "\nNiro for users = " . $users->getNiro();
print "\nNiro for db1 = " . $db1->getNiro();

$piotr = DB::getInstance();
$piotr->setNiro(6);

$dev = DB::getInstance();
$dev->setNiro(666);

$db1->setNiro(777);

print "\n\n ---- \n\n";
print "\nNiro for users = " . $users->getNiro();  // 666
print "\nNiro for db1 = " . $db1->getNiro();      // 777



?>



