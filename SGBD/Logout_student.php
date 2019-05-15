<?php 

session_start();

if(isset($_SESSION['s_username'])) {
    
    session_destroy();
    
    echo "<script>location.href='Login_student.php'</script>"; 
} else {
    
        echo "<script>location.href='Login_student.php'</script>";
    
}