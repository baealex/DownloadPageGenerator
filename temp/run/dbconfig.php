<?php
$dbconfig_host = "localhost";
$dbconfig_name = "subscribe-db";
$dbconfig_user = "-";
$dbconfig_passwd = "-";

$pdo = new PDO('mysql:host='.$dbconfig_host.';dbname='.$dbconfig_name.';', $dbconfig_user, $dbconfig_passwd);
?>