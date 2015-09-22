<?php

// Purpose is same DB Object can be used multiple times,


require_once('classes/DB.php');

echo "<pre>" ;
print_r($users = DB::getInstance()->query('SELECT * FROM users'));
 echo "</pre>";

if($users->count()){
	foreach($users->results() as $user){

		echo 'id: ', $user->id, ' ', 'Name: ', $user->name, "<br>";
	}
}

?>