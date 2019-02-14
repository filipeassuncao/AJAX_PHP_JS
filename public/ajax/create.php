<?php 

require "../../config.php";

use app\models\User;

$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);

$user = new User;

$cadastro = $user->create($name,$email);

if($cadastro) {
	echo 'cadastrado';
} else {
	echo 'erro';
}
