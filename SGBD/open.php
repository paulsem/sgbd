<?php
include 'Connection.php';  
if(isset($_POST['submit'])){
    //var_dump($_POST['hidden']);
    $x=$_POST['hidden'];
    echo $x;
    $update = "update student SET prezence_status='1' WHERE lower(group_student)='$x'";
    $stmt = oci_parse($conn, $update);
    $result = oci_execute($stmt, OCI_COMMIT_ON_SUCCESS );
    //oci_commit($result);
    //var_dump($stmt);
    if (!$result) {
      echo oci_error();   
    }
}
header("Location: /SGBD/Prezente_teacher.php");
?>