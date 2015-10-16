<?php
require 'isLoggedIn.php';
checkIfLoggedIn();
require_once('dbConn.php');
$db = getDBConnection();

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label>Click To Confirm Delete</label><input type="checkbox" value ="yes" name="confirm">
    <input type="submit" value="Delete Record">
    <input type="hidden" name="toDelete" value="<?= $_POST['Delete'] ?>">
</form>
</body>

<?php
    if (isset($_POST['confirm']) && ($_POST['confirm'] == "yes"))
    {
$delete = $_POST['toDelete'];
mysqli_query($db, "DELETE FROM employees WHERE emp_no = $delete");
echo 'Successfully deleted ' . mysqli_affected_rows($db) . ' record(s)';
}
?>

<a href="MainPage.php">Back to Index</a>
<a href ="logOut.php">Logout</a>