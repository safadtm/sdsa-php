=======
<?php
session_start();

// destroying all sessions
if(session_destroy()){
//redirecting to registration page
header("Location: registration.php");
}

?>
>>>>>>> 78bfb7c67f9ec4c143ca999da02402df3983d857
