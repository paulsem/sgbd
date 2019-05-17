<?php

session_start();

if(isset($_POST['submit'])){
    
    include 'Connection.php';

    $username = $_POST['username'];
    $pwd=$_POST['pwd'];

    if(empty($username)||empty($pwd)){
        header("Location: /SGBD/Login_student.php?login=empty");
        exit();
    }
    else{
        $sql = "SELECT * FROM student where username_student= '$username'";

        $result = oci_parse($conn,$sql);            
        oci_execute($result);


        if(!$result){
            header("Location: /SGBD/Login_student.php?login=error");
            exit();
        }else{

            if($row=oci_fetch_assoc($result)){
                
                $hashedPwdCheck = password_verify($pwd,$row['PASSWORD_STUDENT']);


            if($hashedPwdCheck == false) {
                    var_dump($hashedPwdCheck);
                    header("Location: /SGBD/Login_student.php?login=error");
                    exit();


            }elseif($hashedPwdCheck == true) {
                $_SESSION['s_id'] = $row['ID_STUDENT'];
                $_SESSION['s_username'] = $row['USERNAME_STUDENT'];
                $_SESSION['s_email'] = $row['EMAIL_STUDENT'];
                $_SESSION['s_year'] = $row['YEAR_STUDENT'];
                $_SESSION['s_group'] = $row['GROUP_STUDENT'];
                header("Location: /SGBD/Prezente_student.php?login=success");
                exit();

                }
                }

            }
        }
}

else {
    header("Location: /SGBD/Login_student.php?login=error");
    exit();
}



