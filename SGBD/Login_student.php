<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="Grid.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

</head>

<body>
    <section class="container">
        <div class="row">
            <br>
            <div class="box">

                <h2>Login page for students</h2>
            </div>
            <br><br>
            <form action="Login.inc_student.php" method="POST" class="box">
                <br>
                <label>Username:</label><br>
                <input type="text" name="username">
                <br>
                <label>Password:</label><br>
                <input type="password" name="pwd">
                <br>
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </section>

</body>

</html>