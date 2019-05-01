<?php include 'dbconfig.php'?>
<?php
// CREATE TABLE
$statement = $pdo->query("CREATE TABLE USERINFO(EMAIL char(30), PASSWD char(255))");
?>