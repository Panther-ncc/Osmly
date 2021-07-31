<?php
$dsn="mysql:host=localhost;dbname=projdatabase";
$usern=$_POST["userNameReg"];
$passn=$_POST["pwdReg"];
$emailn=$_POST["emailReg"];
$compn=$_POST["companyNameReg"];


try{
    $db=new PDO($dsn,"root","");

}
catch(PDOException $e){
    $error_message=$e->getMessage();
    echo $error_message;
    exit();
}

$link1=mysqli_connect("localhost","root","");
mysqli_select_db($link1,"projdatabase");
mysqli_query($link1,"insert into users values('$usern','$passn','$emailn','$compn')" );

header('location:login.html');





?>