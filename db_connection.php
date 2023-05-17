<?php
$servarname = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

//create connection
$connection = mysqli_connect($servarname, $username, $password, $dbname);

//check connection
if (!$connection) {
    die("Connection Error :-" . mysqli_connect_error());

}

    ?>