<?php
$connnection = new PDO("mysql:host=localhost;dbname=basic database", 'root', '');
$name = "Usman Haider Khan";
$email = "usm@gmail.com";
$dob = "2/2/1997";
$password = "123./,";
$address = "Pakistan,Lahore";
$sth = $connnection->prepare('insert into users(name,email,dob,password,address) values(:name,:email,:dob,:password,:address)');

$sth->bindParam(':name', $name);
$sth->bindParam(':email', $email);
$sth->bindParam(':dob', $dob);
$sth->bindParam(':password', $password);
$sth->bindParam(':address', $address);

$sth->execute();
echo "Data Inserted Successfully :)";
