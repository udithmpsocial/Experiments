<?php

session_start();
$useName = $_SESSION['Name'];
echo''.$useName;

echo'<br><a href="index18-Sessions(Destroy session).php">Click to destroy session</a>';


?>