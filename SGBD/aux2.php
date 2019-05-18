<?php
include 'Connection.php';
$sql = "SELECT * FROM student WHERE group_student = 'e1'";
                        $result = oci_parse($conn,$sql);           oci_execute($result);
                        
                        if($row=oci_fetch_assoc($result))
                        {
                            var_dump($row['PREZENCE_STATUS']);
                            echo $row['PREZENCE_STATUS'];
                        }
                        
                        oci_rollback($conn);

?>