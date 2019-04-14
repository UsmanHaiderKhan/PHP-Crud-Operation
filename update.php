<?php
$connnection = new PDO("mysql:host=localhost;dbname=basic database", 'root', '');

$sth = $connnection->prepare("update users set email='usmankhan@gmail.com',password='123456789' where id='2'");
$sth->execute();
echo $sth->rowCount() . "Data Updated Successfully";
