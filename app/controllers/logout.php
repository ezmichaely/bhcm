<?php
    include '../../path.php';
    // Initialize the session
    session_start();

    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session.
    session_destroy();

    // Redirect to login page
    header('location:' . BASE_URL . '/index.php');
    exit;
?>
