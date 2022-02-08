<?php
require('config.php');
session_start();
if(isset($_POST['login'])){
    $username=stripslashes($_REQUEST['login']);
    $username=mysqli_real_escape_string($conn,$username);
    $password=stripslashes($_REQUEST['pwd']);
    $password=mysqli_real_escape_string($conn,$password);

    $query="SELECT * FROM users WHERE username='$username' and password='$password'";
    $result=mysqli_query($conn,$query) or die(mysqli_error());
    $rows=mysqli_num_rows($result);

    if($rows==1){
        $_SESSION['login']=$username;
        header("location:formulaire.html");
    }else{
        header("location:index.html");
    }



}





?>