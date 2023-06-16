<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register For Account</h1>
    <form action="" method="post">
        Name : <input type="text" name="name"> <br>
        Email : <input type="email" name="email"> <br>
        Username : <input type="text" name="username"> <br>
        Password : <input type="password" name="password"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $conn = mysqli_connect("localhost", "root", "", "iwd_lab_manual");

        if(mysqli_query($conn, "INSERT INTO `trial` VALUES('$username', '$password', '$name', '$email')")){
            echo "Registered successfully! <a href='12-1.php'>Login</a>";
        }
        else{
            echo "An error occured!";
        }
    }
?>