<?php
$password;
$salt;

$saltedPassword = substr($password, 0, ceil(strlen($password)/2)) . $salt . substr($password, ceil(strlen($password)/2), strlen($password));
echo $saltedPassword;