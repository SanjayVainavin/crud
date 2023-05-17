<?php

// <!-- DELETE -->
include "db_connection.php";

if (isset($_REQUEST['delete_id'])) {
    $id = $_REQUEST['delete_id'];
    $sql = "DELETE FROM `crud` WHERE id =" . $id;

    $result = mysqli_query($connection, $sql);
    if ($result) {
        header("location: index.php");
    } else {
        echo "ERROR ?:- " . mysqli_error($connection);
    }

}

// POST
if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $age = $_POST["age"];

    echo $_POST['id'];
    // PUT
    if (isset($_POST['id'])) {
        $sql = "UPDATE `crud` SET `name`= `$name`,`age`=`$age` WHERE id = $id ";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            header("location: index.php");
        }
    }

    $sql = "INSERT INTO `crud`(`id`,`name`, `age`) VALUES (NULL,'$name','$age')";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        header("location: index.php");
    }

}






?>