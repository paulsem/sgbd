<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="Grid.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
   <?php include 'Connection.php'?>
</head>

<body>
    <section>
        <div class="row">

            <div class="box1">
                <div class="box">
                    <?php
                        session_start();
                        echo "<h1>Welcome ".$_SESSION['s_username']."</h1>";
                        $x=$_SESSION['s_username'];
                    ?>
                    <?php
                    $sql1="SELECT prezence_status FROM student WHERE username_student = '$x'";
                    $result1 = oci_parse($conn,$sql1);            
                    oci_execute($result1);
                    if($row1 = oci_fetch_assoc($result1)){
                        
                            if($row1["PREZENCE_STATUS"]==1){
                                echo '<form  action="" method="post">
                              <input type="submit" name="s1">
                                </form>';
                            }
                            
                        if(isset($_POST['s1']))
                        {
                            $update1 ="update prezence SET prezence=prezence+1 WHERE username='$x'";
                            $stmt1 = oci_parse($conn, $update1);
                            $result1 = oci_execute($stmt1, OCI_COMMIT_ON_SUCCESS );
        
                            $update = "update student SET prezence_status='0' WHERE username_student='$x'";
                            $stmt = oci_parse($conn, $update);
                            $result = oci_execute($stmt, OCI_COMMIT_ON_SUCCESS );
                        }
                    }
                    ?>

                    
                    

                    <?php
                        echo "<br><br><a href='Logout_student.php'><input type=button value=Logout></a>"; 
                    ?>
                    <br>
                    <br>
                </div>

                <div class="box">
                    <div class="box3">
                        <h2>Prez</h2>
                        <?php
                        $sql1="SELECT prezence FROM prezence WHERE username = '$x'";
                        $result1 = oci_parse($conn,$sql1);            
                        oci_execute($result1);
                        
                        if($row=oci_fetch_assoc($result1)){
                            echo '<h2>'. $row['PREZENCE'].'</h2>';
                        }
                        oci_commit($conn);
                        ?>
                        <!--<h2>5/10 </h2>-->
                    </div>
                    <div class="box3">
                        <h2>Points</h2>
                        <h2>20 </h2>
                    </div>
                   

                </div>
            </div>   

        </div>

    </section>
</body>

</html>
