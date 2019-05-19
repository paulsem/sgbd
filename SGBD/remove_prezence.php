<?php
include 'Connection.php';
if(isset($_POST['submit']))
{
    $x=$_POST['hidden'];
    //var_dump($x);
    $update1 ="update prezence SET prezence=prezence-1 WHERE username='$x'";
    $stmt1 = oci_parse($conn, $update1);
    $result1 = oci_execute($stmt1, OCI_COMMIT_ON_SUCCESS );
}
header("Location: /SGBD/Prezente_teacher.php");

?>