<?php

$pwd = 'redvine@2021';
$password = password_hash($pwd, PASSWORD_DEFAULT);
echo $password;
