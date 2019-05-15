<?php 

session_start();

if(isset($_SESSION['t_username'])) {
    
    session_destroy();
    
    echo "<script>location.href='Login_teacher.php'</script>"; 
} else {
    
        echo "<script>location.href='Login_teacher.php'</script>";
    
}