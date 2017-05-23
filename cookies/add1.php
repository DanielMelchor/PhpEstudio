<?php

$_value = $_COOKIE['count'];
$_value++;

setcookie('count', $_value);

echo "Adding 1";