<?php
 session_start();// start the session
session_unset();
 session_destroy();
 header("location:number.php"); // redirect to number.php
?>