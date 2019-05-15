<?php

session_start();

if(isset($_POST['submit'])){
    
    include 'Connection.php';
    
    $username = mysqli_real_escape_string($conn, $_POST['username']); 
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']); 
    
    if(empty($username)||empty($pwd)){
        header("Location: /SGBD/Login_teacher.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM teacher WHERE username_teacher = '$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck < 1){
             header("Location: /SGBD/Login_teacher.php?login=error");
             exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                $hashedPwdCheck = password_verify($pwd,$row['password_teacher']);
                if($hashedPwdCheck == false) {
                    header("Location: /SGBD/Login_teacher.php?login=error");
                    exit();
                } elseif($hashedPwdCheck == true) {
                    $_SESSION['t_id'] = $row['ID_teacher'];
                    $_SESSION['t_username'] = $row['username_teacher'];
                    $_SESSION['t_email'] = $row['email_teacher'];
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


