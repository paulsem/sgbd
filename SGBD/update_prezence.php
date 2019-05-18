<?php
                    
                    if(isset($_POST['submit']))
                    {
                        
                        $sql = "SELECT prezence_status FROM student WHERE group_student = 'e1'";
                        $result = oci_parse($conn,$sql);            
                        oci_execute($result);
                        var_dump($result);
                        if($row = oci_fetch_assoc($result))
                        {
                            var_dump($row['PREZENCE_STATUS']);
                            if($row['PREZENCE_STATUS']==0)
                            {
                                header("www.google.ro");
                                $update = " update student SET prezence_status=1 WHERE group_student='e1'";
                                $stmt = oci_parse($conn, $update);
                                $result = oci_execute($stmt, OCI_DEFAULT);
                            }
                        }
                    }
        
                   
?>