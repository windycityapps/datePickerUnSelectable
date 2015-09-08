<?php
$dbName="train_imp";
$host="127.0.0.1";
$ds = "mysql:dbname=$dbName;host=$host";
$user = "root";
$pw = "";

try {
$dbh = new PDO($ds, $user, $pw);
} catch (PDOException $e) {
echo "connection error " . $e->getMessage();

}