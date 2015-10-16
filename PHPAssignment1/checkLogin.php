<?php
    session_start();
    ob_start();
    require_once('dbConn.php');
    $db = getDBConnection();

    $loginUser = $_POST['loginUser'];
    $loginPass= $_POST['loginPass'];

    $loginUser = stripcslashes($loginUser);
    $loginPass = stripcslashes($loginPass);
    $loginUser = mysqli_real_escape_string($db, $loginUser);
    $loginPass = mysqli_real_escape_string($db, $loginPass);

    $sqlStatement ="SELECT * FROM WebUsers WHERE user_name='$loginUser' and user_pass='$loginPass'";

    $result = mysqli_query($db,$sqlStatement);
    $count= mysqli_num_rows($result);

if($count==1)
{
    $_SESSION['loginUser'] = $loginUser;
    $_SESSION['loginPass'] = $loginPass;
    header("location:MainPage.php");

}
else
{
    echo "Wrong Username or Password!";
    echo "<br/>";
    echo '<a href ="mainLogin.html">Try Again</a>';
}

    ob_end_flush();
?>