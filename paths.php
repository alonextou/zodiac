<?php 
include 'private/zodiacs.php';
include 'private/connect.php';

$GLOBALS['server'] = $_SERVER['SERVER_NAME'].'/zodiac.phpfogapp.com';
$GLOBALS['private'] = 'http://' . $GLOBALS['server'].'/private';
$GLOBALS['public'] = 'http://' . $GLOBALS['server'].'/public';

?>