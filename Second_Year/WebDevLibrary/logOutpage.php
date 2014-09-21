<?php
session_start();


session_destroy();
 header('location:LogIn.html');

if (!isset($_SESSION['login_user']))
{
    header('location:LogIn.html');
}
?>