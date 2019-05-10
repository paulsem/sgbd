<!DOCTYPE html>
<html>

<body>

    <h2>Registration page for students</h2>

    <form action="Register.inc_student.php" method="POST">
        Username:<br>
        <input type="text" name="username">
        <br>
        E-mail address:<br>
        <input type="email" name="email">
        <br>
        Password:<br>
        <input type="text" name="password">
        <br>
        Year:<br>
        <input type="number" name="year">
        <br>
        Group:<br>
        <input type="text" name="group">
        <br>
        <!--Confirm Password:<br>
        <input type="text" name="password">
        <br>-->
        <br>
        <button type="submit" name="submit">Register</button>
    </form>


</body>

</html>