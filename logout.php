<?php 
// Initialize the session.
session_start();

// Finally, destroy the session.
session_destroy();


header("Location: login.php");
?>