<html>
<head>
    <title>PHP Employee Form</title>
</head>
<body>
    <form action="" method="post">
        New Password : <input type="password" name="newPass">
        <br>
        Confirm Password : <input type="password" name="confirmPass">
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        $Eid = 3;
        $newPass = $_POST["newPass"];
        $confirmPass = $_POST["confirmPass"];

        if($newPass != $confirmPass){
            die("Both passwords are not same!");
        }

        $conn = mysqli_connect("localhost", "root", "", "iwd_lab_manual");
        if(!$conn){
            die("Connection to database failed!");
        }

        $sql = "UPDATE `credentials` SET `Epassword` = '$newPass' WHERE `Eid` = $Eid";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "The query was not executed successfully!";
            echo mysqli_error($conn);
        }
        else{
            echo "Password changed successfully!";
        }
    }
?>

<!-- --------------Output maramthi joine lakhjo------------------
New Password : 
Current Password : 
Submit
Password changed successfully!
-->