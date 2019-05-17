<?php

session_start();

if(isset($_POST['submit'])){
    
    include 'Connection.php';
    
    $username = $_POST['username'];
    $pwd=$_POST['pwd'];
    
    if(empty($username)||empty($pwd)){
        header("Location: /SGBD/Login_teacher.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM teacher WHERE username_teacher = '$username'";
        
        $result = oci_parse($conn,$sql);            
        oci_execute($result);
        
        if(!$result){
             header("Location: /SGBD/Login_teacher.php?login=error");
             exit();
        }else{
            if($row = oci_fetch_assoc($result)){
                $hashedPwdCheck = password_verify($pwd,$row['PASSWORD_TEACHER']);
                if($hashedPwdCheck == false) {
                  //  header("Location: /SGBD/Login_teacher.php?login=error");
                    exit();
                } elseif($hashedPwdCheck == true) {
                    $_SESSION['t_id'] = $row['ID_TEACHER'];
                    $_SESSION['t_username'] = $row['USERNAME_TEACHER'];
                    $_SESSION['t_email'] = $row['EMAIL_TEACHER'];
                    header("Location: /SGBD/Prezente_teacher.php?login=success");
                    exit();
                }
            }
        }
    }
    
}else {
    header("Location: /SGBD/Login_teacher.php?login=error");
    exit();
}


