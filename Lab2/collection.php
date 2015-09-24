<?php
        $firstname= $_POST["First"];
        $lastname= $_POST["Last"];
        $feet= $_POST["Feet"];
        $inches= $_POST["Inches"];
        $metres = $feet * .3048;
        //this code was provided by M.Crocker in a class presentation
        $fileTmpName = $_FILES['userImage']['tmp_name'];
        $fileOrigNAme = $_FILES['userImage']['name'];
        $filesize = $_FILES['userImage']['size'];
        $fileUploadError = $_FILES['userImage']['error'];
        $results = move_uploaded_file($fileTmpName,"uploads/.$fileOrigName");


    echo "Your first name is: $firstname" . "<br>";
    echo "Your last name is: $lastname" . "<br>";
    echo "Your height in metres is: $metres" . "<br>";




?>