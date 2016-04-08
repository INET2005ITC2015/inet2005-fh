<?php
function checkIfLoggedIn()
{
    session_start();
    if(empty($_SESSION['loginUser']) || empty($_SESSION['loginPass']))
    {
        header("location:mainLogin.html");
    }
}
?>