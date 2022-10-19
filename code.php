<?php
session_start();
require 'db_con.php';

if(isset($_POST['register']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
  
    $query="INSERT INTO user (name,email,password) VALUES('$name', '$email', '$password')";
    $run_query=mysqli_query($con,$query);
    
    if($run_query)
    {
        $_SESSION['message']="Customer Created Sucessfully ";
        //print_r($run_query);
        header("Location:index.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Customer Not Created Sucessfully ";
        header("Location:signup.php");
        exit(0);
    }
}
if(isset($_POST['message']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['exe']);
    $msg=mysqli_real_escape_string($con,$_POST['msg']);
    $query="INSERT INTO contact (name,email,experience,message) VALUES('$name', '$email', '$password','$msg')";
    $run_query=mysqli_query($con,$query);
    
    if($run_query)
    {
        $_SESSION['message']="Customer Created Sucessfully ";
        //print_r($run_query);
        header("Location:profile.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Customer Not Created Sucessfully ";
        header("Location:signup.php");
        exit(0);
    }
}
if(isset($_POST['login']))
{
    $email=mysqli_real_escape_string($con,$_POST['uname']);
    $password=mysqli_real_escape_string($con,$_POST['psw']);
    $select = " SELECT * FROM user WHERE email = '$email' && password = '$password' ";

    
    $run_query=mysqli_query($con,$select);
    
    if(mysqli_num_rows($run_query) > 0)
    {
        foreach($run_query as $cust){
            $_SESSION['name']=$cust['name'];
        }
        $_SESSION['message']="Customer Login Sucessfully ";
        
        $_SESSION['email']=$email;
        //print_r($run_query);
        header("Location:welcome.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Customer Can Not Login Sucessfully ";
        header("Location:signup.php");
        exit(0);
    }
}
?>