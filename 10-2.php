<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $conn = mysqli_connect("localhost", "root", "", "iwd_lab_manual");
        if(!$conn){
            die("Connection to database failed!");
        }

        $sql = "SELECT `Eusername`, `Epassword` FROM `credentials` WHERE `Eusername` = '$username' AND `Epassword` = '$password'";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "The query was not executed successfully!";
            echo mysqli_error($conn);
        }
        else{
            if(mysqli_num_rows($result) == 1){
                echo "Logged In";
            }
            else{
                echo "Username or password is incorrect!";
            }
        }
    }
?>

<html>
<head>
    <title>PHP Employee Login Form</title>
</head>
<body>
    <form action="" method="post">
        Username : <input type="text" name="username">
        <br>
        Password : <input type="password" name="password">
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>