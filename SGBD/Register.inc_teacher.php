<?php
        include_once 'Connection.php';
        
       $username = $_POST['username']; 
       $email = $_POST['email']; 
       $password = $_POST['password']; 
       $psd =  password_hash("$password", PASSWORD_DEFAULT);

        $sql = "INSERT INTO teacher (username_teacher, email_teacher, password_teacher) VALUES ('" . $username . "', '" . $email . "','" . $psd . "')";

        
        //mysqli_query($conn, $sql);
        $compiled = oci_parse($conn,$sql);

        $r = oci_execute($compiled);
        
        oci_rollback($conn);
        header("Location: /SGBD/Login_teacher.php?register=success");

    ?>


//