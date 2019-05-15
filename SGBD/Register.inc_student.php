<?php
        include_once 'Connection.php';
        
        $username = $_POST['username']; 
        $username_prezence = $_POST['username']; 
        $email = $_POST['email']; 
        $password = $_POST['password']; 
        $psd =  password_hash("$password", PASSWORD_DEFAULT);
        $year = $_POST['year'];
        $group = $_POST['group'];
        $prezence = 0;

        if(empty($username)||empty($email)||empty($password)||empty($year)||empty($group)){
            header("Location: /SGBD/Register_student.php?register=empty");
            exit();
        }else {
            $sql = "INSERT INTO student (username_student, email_student, password_student, year_student, group_student) VALUES ('$username', '$email','$psd','$year','$group')";
        mysqli_query($conn, $sql);
            
            $sql_prez = "INSERT INTO prezence (username, prezence) VALUES ('$username_prezence', '$prezence')";
        mysqli_query($conn, $sql_prez);
    
        header("Location: /SGBD/Register_student.php?register=success");
            
        }      
            
    ?>