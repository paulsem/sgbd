<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="Grid.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
   
</head>

<body>
    <section>
        <div class="row">

            <div class="box1">
                <div class="box">
                    <?php
                        session_start();
                        echo "<h1>Welcome ".$_SESSION['s_username']."</h1>";
                    ?>

                    <input type="text" name="code" style="background-color:#fff;color:black" placeholder="enter code">
                    <br>
                    <br>
                    <button type="button" name="button">Submit</button>
                    

                    <?php
                        echo "<br><br><a href='Logout_student.php'><input type=button value=Logout></a>"; 
                    ?>
                    <br>
                    <br>
                </div>

                <div class="box">
                    <div class="box3">
                        <h2>Prez</h2>
                        <h2>5/10 </h2>
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
