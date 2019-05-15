<!DOCTYPE html>
<html>

<body>

    <h2>Registration page for teachers</h2>

    <form action="Register.inc_teacher.php" method="POST">
        Username:<br>
        <input type="text" name="username"> (ex: lastname.firstname)
        <br>
        E-mail address:<br>
        <input type="email" name="email">
        <br>
        Password:<br>
        <input type="password" name="password"> (use letters from [a-zA-Z] and numbers)
        <br>
        <!--Confirm Password:<br>
        <input type="text" name="password">
        <br>-->
        <br>
        <button type="submit" name="submit">Register</button>
    </form>


</body>

</html>