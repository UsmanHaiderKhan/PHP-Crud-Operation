<?php
$connection = new PDO("mysql:host=localhost;dbname=basic database", "root", "");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sth = $connection->query("delete from users where id='1'");
$sth->execute($sth);
echo "Recorde Deleted Successfully";
