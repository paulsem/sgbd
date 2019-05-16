<?php 
include 'Connection.php';

$select_stmt = "select username_student from student"; 

$stid = oci_parse($conn, $select_stmt); 
oci_execute($stid); 

echo "<table border='1'>\n"; 

while ($row = oci_fetch_assoc($stid)) { 
    echo "<tr>\n"; 
    echo "<td>". $row['USERNAME_STUDENT'] . "</td>\n"; 
    echo "</tr>\n"; 
    //var_dump($row);
} 



echo "</table>\n"; 

oci_free_statement($stid); 
oci_close($conn); 
?> 
