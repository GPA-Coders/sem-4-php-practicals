<?php
    $conn = mysqli_connect("localhost", "root", "", "iwd_lab_manual");

    if(!$conn){
        die("Connection to database failed!");
    }

    $id = $_REQUEST["id"];
    $sql = "DELETE FROM `employee` WHERE `Eid` = '$id';";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Error executing query!";
    }
    else{
        echo "Record Deleted!<br>";
    }
    echo "<a href='10-5-1.php'>Go Back</a>";
?>