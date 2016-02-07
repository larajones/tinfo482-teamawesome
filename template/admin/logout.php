<?php

#start sesson

session_start();

unset($_SESSION['username']); //delete the username key

header('Location: login.php'); //redirect back to login

?>
