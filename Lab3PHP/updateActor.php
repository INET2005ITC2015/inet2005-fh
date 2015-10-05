<?php
require_once('dbConn.php');
$db = getDBConnection();

if (isset($_POST['IdUpdate'])) {
    $update = $_POST["IdUpdate"];
    $result=mysqli_query($db, "SELECT * from actor WHERE  actor_id=$update");
}
else {
    echo "Can't see stuff";
}

$record = mysqli_fetch_assoc($result);


?>

<form action="updateActorFinal.php" method="post">
    <input type="hidden" name="IdUpdate" value="<?php echo $update?>">
    First Name <input type="text" name="firstName" value="<?php echo $record['first_name']?>"></br></br>
    Last Name <input type="text" name="lastName" value="<?php echo $record['last_name']?>"></br></br>
    <input type="submit" value="Update">
</form>

