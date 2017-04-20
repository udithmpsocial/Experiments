<?php
session_start();
unset($_SESSION['Name']);//destroy selectd one
//session_destroy();//destroy all at one time

echo'<br><a href="index18-Sessions(Create session).php">Click to create session</a>';




?>