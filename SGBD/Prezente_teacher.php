<!DOCTYPE html>
<html>

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
                    ?>

                    <button id="demo" type="button" name="button" onclick="myFunction()">Gen Code</button>

                    <?php
                        echo "<br><br><a href='Logout_teacher.php'><input type=button value=Logout></a>";   
                    ?>
                    <br>
                    <br>
                </div>
              
                <div class="box">
                    <div class="box3">
                        <h2>Max prez</h2>
                        <h2>5/10 - username</h2>
                    </div>
                    <div class="box3">
                        <h2>Min prez</h2>
                        <h2>1/10 - username</h2>
                    </div>
                    <div class="box3">
                        <h2>Prez la ora</h2>
                        <h2>21 - students</h2>
                    </div>
                    <div class="box3">
                        <h2>ceva...</h2>
                        <h2>... - username</h2>
                    </div>
                    
                </div>
            </div>

<br>
            <div class="box2">

                <div class="row">

                    <br>
                    <br>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>prezente</th>
                            <th>procentaj</th>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jill</td>
                            <td>2/10</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jill</td>
                            <td>3/10</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jill</td>
                            <td>3/10</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jill</td>
                            <td>3/10</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jill</td>
                            <td>3/10</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jill</td>
                            <td>3/10</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jill</td>
                            <td>3/10</td>
                            <td>50</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jill</td>
                            <td>3/10</td>
                            <td>50</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Jill</td>
                            <td>3/10</td>
                            <td>50</td>
                        </tr>




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
