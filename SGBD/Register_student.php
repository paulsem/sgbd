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
            <div class="box">
                <h2>Registration page for students</h2>
            </div>
            <br>

            <form action="Register.inc_student.php" method="POST" class="box">
                <br>
                <label>Username:</label><br>
                <input type="text" name="username" placeholder="lastname.firstname">
                <br>
                <label>E-mail address:</label><br>
                <input type="email" name="email">
                <br>
                <label>Password:</label><br>
                <input type="password" name="password" placeholder="use letters from [a-zA-Z] and numbers">
                <br>
                <label>Year:</label><br>
                <input type="number" name="year" min="1" max="4">
                <br>
                <label>Group:</label><br>
                <input type="text" name="group" placeholder="uppercase.letter.groupt_number.group"><br> <br>

                <button type="submit" name="submit">Register</button>
                <br>
            </form>
        </div>
    </section>

</body>

</html>