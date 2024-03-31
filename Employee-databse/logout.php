<?php
session_start();

// destroying all sessions
if(session_destroy()){
//redirecting to registration page
header("Location: registration.php");
}

?>
