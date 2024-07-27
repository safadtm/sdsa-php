<?php
session_start();

// destroying all sessions
if(session_destroy()){
//redirecting to homepage
header("Location: registration.php");
}

?>