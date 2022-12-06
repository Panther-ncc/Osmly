<?php
$dsn="mysql:host=localhost;dbname=projdatabase";
$user=$_POST["Username"];
$pass=$_POST["Password"];


try{
    $db=new PDO($dsn,"root","");

}
catch(PDOException $e){
    $error_message=$e->getMessage();
    echo $error_message;
    exit();
}

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"projdatabase");
$result=mysqli_query($link,"select * from users where Username='$user' and Password='$pass' " ) ;
if (!$result) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
$row=mysqli_fetch_array($result);

if($row['username']==$user && $row['Password']==$pass) {
    echo "Login Successful   Welcome " .$row['Username'];
    header('location:search.html');
}
        else {
            echo "Failed to login";

}
?>
