<?php

session_start();

?>
<!DOCTYPE html>
<html>

<body>

    <h2>Login page for teachers</h2>

    <form action="Login.inc_teacher.php" method="POST">
        Username:<br>
        <input type="text" name="username">
        <br>
        Password:<br>
        <input type="password" name="pwd">
        <br>
        <br>
        <button type="submit" name="submit">Login</button>
    </form>


</body>

</html>