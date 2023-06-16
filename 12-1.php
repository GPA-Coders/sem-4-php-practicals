<?php
    session_start();
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login to Your Account</h1>
    <form action="" method="post">
        Username : <input type="text" name="username"> <br>
        Password : <input type="password" name="password"> <br>
        <input type="submit" name="submit">
    </form>
    <a href="12-2.php">Register</a>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $conn = mysqli_connect("localhost", "root", "", "iwd_lab_manual");

        $result = mysqli_query($conn, "SELECT * FROM `trial` WHERE `username` = '$username' AND `password` = '$password'");

        if(mysqli_num_rows($result) == 1){
            $data = mysqli_fetch_array($result);
            $_SESSION["username"] = $data[0];
            $_SESSION["name"] = $data[2];
            $_SESSION["email"] = $data[3];
            header("Location: 12-3.php");
        }
        else{
            echo "Invalid credentials!";
        }
    }
?>