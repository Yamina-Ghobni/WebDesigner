<?php
require('config.php');
session_start();
if(isset($_POST['login'])){

    $username=stripslashes($_REQUEST['login']);
    $username=mysqli_real_escape_string($conn,$username);
    $password=stripslashes($_REQUEST['pwd']);
    $password=mysqli_real_escape_string($conn,$password);

    $query="SELECT * FROM users WHERE username='$username' and
    password='$password' and role='1'";
        $sql="SELECT * FROM users WHERE username='$username' and
        password='$password' and role='0'";

$result=mysqli_query($conn,$query) or die(mysql_error());
$result1=mysqli_query($conn,$sql) or die(mysql_error());
$rows=mysqli_num_rows($result);
$rows1=mysqli_num_rows($result1);
if($rows==1){
    $_SESSION['login']=$username;
    header("Location:formulaire.html");

}elseif($rows1==1){
    $_SESSION['login']=$username;
    header("Location:index1.html");

}else{
    header("Location:index.html");
}

}

?>