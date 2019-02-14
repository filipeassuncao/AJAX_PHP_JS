<?php

require "../../config.php";

use app\models\User;

sleep(5);

$user = new User;


echo json_encode($user->all());
