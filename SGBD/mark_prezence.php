<?php 
include 'Connection.php';

if(isset($_POST['submit']))
{
    $nume=$_POST['nume'];
    echo $nume;
    $update = "update student SET prezence_status='0' WHERE group_student='e1'";
$stmt = oci_parse($conn, $update);
$result = oci_execute($stmt, OCI_COMMIT_ON_SUCCESS );
}
?>