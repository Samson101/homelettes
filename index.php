<?php
$host= "localhost";
$user="root";
$pass="";
$db="form";
$con = new mysqli($host, $user,$pass,$db);
if(!$con){
    echo "There are problems connecting the database";
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pswd=$_POST['pswd'];

$qry= "INSERT INTO 'mytable'('name', 'email', 'phone', 'pswd')VALUES ('$name', '$email', '$phone', '$pswd')";
$insert= mysqli_query ($qry,$con);
if(!$insert){
    echo "There are some problems inserting data";
}
else{
    echo "Data Inserted Successfully";
}
?>