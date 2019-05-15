<?php

session_start();

echo "Welcome ".$_SESSION['s_username'];

echo "<br><br>Short description...";

echo "<br><br><a href='Logout_student.php'><input type=button value=Logout></a>";