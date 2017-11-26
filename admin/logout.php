<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("location: index"); // Redirecting To Home Page
}
?>