<?php

//Setting up connection
$servername="localhost";
$username ="root";
$password = "";

$conn= mysqli_connect($servername,$username,$password);
if(!$conn){
    die(" connection Failed :". mysqli_connect_error());
}else{
    echo "Conection is succesfully created. <br>";
}

//Creating database bank
$sql= "CREATE DATABASE nbibank";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Failed to create database. <br>";
}else{
    echo "DATABASE Created Successfully.<br>";
}

//Creating table customers
 $sql = "CREATE TABLE `nbibank`.`customers` ( `ID` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(20) NOT NULL , `Mail ID` VARCHAR(20) NOT NULL , `Amount` INT(30) NOT NULL , PRIMARY KEY (`ID`)) ";

 $result = mysqli_query($conn,$sql);

if(!$result){
    echo "Failed to create table.<br>";
}else{
    echo "Customer Table Created Successfully.<br>";
}

//Adding 10 dummey data into table customers
$sql ="INSERT INTO `nbibank`.`customers` (`ID`, `Name`, `Mail ID`, `Amount`) VALUES ('1', 'Rajasekhar', 'vnrs@hotmail.com', '2000000'), ('2', 'Indra', 'indra@gmail.com', '190000'), ('3', 'Shanmukh', 'sivaagni@gmail.com', '190000'), ('4', 'Ramesh', 'ramesh@yahoo.com', '150000'), ('5', 'Kinshuk', 'kinari@yahoo.com', '145000'), ('6', 'Vinay', 'kosanam@gmail.com', '165000'), ('7', 'Yodha', 'yash143@gmail.com', '175000'), ('8', 'Anirudh', 'ani69@gmail.com', '175000'), ('9', 'Hari', 'khari@yahoo.com', '165000'), ('10', 'phani', 'phanindra@gmail.com', '172000') ";

$result = mysqli_query($conn,$sql);

if(!$result){
    echo "Failed to add entries to table. <br>";
}else{
    echo "Entries added to table Successfully.<br>";
}

//Creating transaction table customers
$sql = "CREATE TABLE `nbibank`.`transaction` ( `Transaction ID` INT NOT NULL AUTO_INCREMENT , `From` VARCHAR(11) NOT NULL , `To` VARCHAR(11) NOT NULL , `Amount` DECIMAL NOT NULL , PRIMARY KEY (`Transaction ID`))";

$result = mysqli_query($conn,$sql);

if(!$result){
   echo "Failed to create table.<br>";
}else{
   echo "Transaction Table Created Successfully.<br>";
}
