<?php

session_start();

if(isset($_POST['submit'])){
    
    include 'Connection.php';
    
    $username = mysqli_real_escape_string($conn, $_POST['username']); 
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']); 
    
    if(empty($username)||empty($pwd)){
        header("Location: /SGBD/Login_student.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM student WHERE username_student = '$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck < 1){
             header("Location: /SGBD/Login_student.php?login=error");
             exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                $hashedPwdCheck = password_verify($pwd,$row['password_student']);
                if($hashedPwdCheck == false) {
                    header("Location: /SGBD/Login_student.php?login=error");
                    exit();
                } elseif($hashedPwdCheck == true) {
                    $_SESSION['s_id'] = $row['ID_student'];
                    $_SESSION['s_username'] = $row['username_student'];
                    $_SESSION['s_email'] = $row['email_student'];
                    $_SESSION['s_year'] = $row['year_student'];
                    $_SESSION['s_group'] = $row['group_student'];
                    header("Location: /SGBD/Prezente_student.php?login=success");
                    exit();
                }
            }
        }
    }
    
}else {
    header("Location: /SGBD/Login_student.php?login=error");
    exit();
}


