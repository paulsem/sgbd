<?php
include 'Connection.php';  

$update = "update student SET prezence_status='1' WHERE group_student='e1'";
$stmt = oci_parse($conn, $update);
$result = oci_execute($stmt, OCI_COMMIT_ON_SUCCESS );
//oci_commit($result);
//var_dump($stmt);
if (!$result) {
  echo oci_error();   
}
?>