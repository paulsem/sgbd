<?php

session_start();

echo "Welcome ".$_SESSION['t_username'];

echo "<br><br>Short description...";

echo "<br><br><a href='Logout_teacher.php'><input type=button value=Logout></a>";