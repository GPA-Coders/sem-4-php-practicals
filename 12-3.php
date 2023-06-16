<?php
    session_start();

    $username = $_SESSION["username"];
    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
?>

<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome To Your Dashboard</h1>
    <p>Username : <?php echo $username; ?></p>
    <p>Name : <?php echo $name; ?></p>
    <p>Email : <?php echo $email; ?></p>
</body>
</html>