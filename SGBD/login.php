<?php
include_once 'Connection.php';
        
// Always start this first
session_start();

$username=$_POST['username'];
$password=$_POST['password'];
$pwd =  password_hash("$password", PASSWORD_DEFAULT);
$_SESSION['login_user']=$username;
$query = mysqli_query($conn,"SELECT username_student FROM student WHERE username_student='$username' and password_student='$pwd'");
echo '$query';
if (mysqli_num_rows($query) != 0)
    {
     echo "<script language='javascript' type='text/javascript'> location.href='login_form.html' </script>";   
      }
      else
      {
          echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
      }
    
?>
            
    