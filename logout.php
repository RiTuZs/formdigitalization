<?php
session_start(); // Start the session to access session variables

if(session_destroy()){
    header("Location: index.php");
}