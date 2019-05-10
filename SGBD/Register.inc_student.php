<?php
        include_once 'Connection.php';
        
       $username = $_POST['username']; 
       $email = $_POST['email']; 
       $password = $_POST['password']; 
       $psd =  password_hash("$password", PASSWORD_DEFAULT);
        $year = $_POST['year'];
        $group = $_POST['group'];

        $sql = "INSERT INTO student (username_student, email_student, password_student, year_student, group_student) VALUES ('$username', '$email','$psd','$year','$group')";
        mysqli_query($conn, $sql);
    
        header("Location: /SGBD/Register_student.php?register=success")
            
    ?>