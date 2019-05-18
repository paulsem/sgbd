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
        $x=0;
        if(empty($username)||empty($email)||empty($password)||empty($year)||empty($group)){
            header("Location: /SGBD/Register_student.php?register=empty");
            exit();
        }else {
           
            $sql = "INSERT INTO student (username_student, email_student, password_student, year_student, group_student, prezence_status) VALUES ('" . $username . "', '" . $email . "','" . $psd . "','" . $year . "','" . $group . "','" . $x . "')";
            
       // mysqli_query($conn, $sql);
        $compiled = oci_parse($conn,$sql);
        $r = oci_execute($compiled);
        oci_rollback($conn);
        
         $sql_prez = "INSERT INTO prezence (username, prezence) VALUES ('" . $username_prezence . "', '" . $prezence . "')";
       // mysqli_query($conn, $sql_prez);
        $compiled = oci_parse($conn,$sql_prez);
        $r = oci_execute($compiled);
        oci_rollback($conn);
    
        header("Location: /SGBD/login_student.php?register=success");
            
        }      
            
    ?>