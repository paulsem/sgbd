<!DOCTYPE html>
<html>
<?php
include 'Connection.php';    
?>
<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="Grid.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script>
function myFunction() {
  document.getElementById("demo").innerHTML = Math.random().toString(36).substring(2, 15);
}
</script>
    
   
</head>

<body>
    <section>
        <div class="row">

            <div class="box1">
                <div class="box">
                    <?php
                        session_start();
                        echo "<h1>Welcome ".$_SESSION['t_username']."</h1>";
                    echo "<h1>GRUPA ".$_SESSION['t_grupa']."</h1>";
                    $x=$_SESSION['t_grupa'];
                    ?>
                     <form action="open.php" method="post">
                        
                         <input name="submit" type="submit" value="open">
                    </form>
                    <br>
                    <form action="close.php" method="post">
                        
                         <input name="submit" type="submit" value="close">
                    </form>
                   <br>
                    
                    
                    <?php
                        echo "<br><a href='Logout_teacher.php'><input type=button value=Logout></a>";  
                        
                    ?>
                    
                    <br>
                    <br>
                </div>
              
                <div class="box">
                    <div class="box3">
                        <h2>Max prez</h2>
                        
                        <?php
                        
                        $sql3 = "select MAX( p.prezence )
from prezence p inner join student s on p.username = s.username_student where s.group_student='$x'";
                        
                        $result3 = oci_parse($conn,$sql3);            
                        oci_execute($result3);
                        if($row3=oci_fetch_assoc($result3)){
                        
                        echo '<h2>'.$row3['MAX(P.PREZENCE)'].'</h2>';
                        $aux=$row3['MAX(P.PREZENCE)'];
                        }
                       
                        
                        ?>
                        
                        <!--<h2>5/10 - username</h2>-->
                    </div>
                    <div class="box3">
                        <h2>Min prez</h2>
                        
                        <?php
                        
                        $sql2 = "select MIN( p.prezence )
from prezence p inner join student s on p.username = s.username_student where s.group_student='$x'";
                        
                        $result2 = oci_parse($conn,$sql2);            
                        oci_execute($result2);
                        
                        if($row2=oci_fetch_assoc($result2)){
                        
                        echo '<h2>'.$row2['MIN(P.PREZENCE)'].'</h2>';
                        }
                        oci_commit($conn);
                        ?>
                        <!--<h2>1/10 - username</h2>-->
                    </div>
                    <div class="box3">
                        <h2>Prez la ora</h2>
                        
                        <?php 
                        $sql2 = "select count(*) from prezence where data >= (sysdate-2/24)";
                        
                        $result2 = oci_parse($conn,$sql2);            
                        oci_execute($result2);
                        
                        if($row2=oci_fetch_assoc($result2)){
                        
                        echo '<h2>'.$row2['COUNT(*)'].'</h2>';
                        }
                        oci_commit($conn);
                        ?>                     
                    </div>
                    <div class="box3">
                        <h2>ceva...</h2>
                        <h2>... - username</h2>
                    </div>
                    
                </div>
            </div>

<br>
            <?php
           
            $sql = "SELECT * FROM student WHERE group_student = '$x'";
            $result = oci_parse($conn,$sql);            
            oci_execute($result);
            if(!$result){
             echo 'grupa gresita';
             exit();
            }
                
            ?>
            <div class="box2">

                <div class="row">

                    <br>
                    <br>
                    <table>
                    <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>prezente</th>
                            <th>points</th>
                            <th>add points</th>
                        </tr>
                    <?php
                    while ($row = oci_fetch_assoc($result)) { 
                        echo "<tr>\n"; 
                        echo "<td>". $row["ID_STUDENT"] . "</td>\n"; 
                        echo "<td>". $row["USERNAME_STUDENT"] . "</td>\n"; 
                        $x=$row["USERNAME_STUDENT"];
                        $sql1="SELECT * FROM prezence WHERE username = '$x'";
                        
                        $result1 = oci_parse($conn,$sql1);            
                        oci_execute($result1);
                        if($row1 = oci_fetch_assoc($result1)){
                        
                            echo "<td>". $row1["PREZENCE"] . "</td>\n";
                            echo "<td>". $row1["POINTS"] . "</td>\n";
                        }
                        /*echo "<td>". $row["PREZENCE_STATUS"] . "</td>\n"; */
                        echo "</tr>\n"; ?>
                        <td>
                            <form method="post" action="add_points.php"> 
                                <input type="hidden" name="hidden"  value="<?php echo $row['USERNAME_STUDENT'];?>">
                                
                                <input type="submit" name="submit" value="+">
                            </form>
                        </td>
                <?php
}     
                        oci_commit($conn)
                    ?>


                    </table>
                    <br><br>

                </div>

            </div>
          
            <br>
            <br>

        </div>



    </section>
</body>

</html>
