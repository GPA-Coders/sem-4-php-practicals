<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Forms</title>
</head>
<body>
    <form action="" method="post">
        Name : <input type="text" name="name"> <br>
        DOB : <input type="date" name="dob"> <br>
        Email : <input type="email" name="email"> <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    echo "Name : " . $_POST["name"] . "<br>";
    echo "DOB : " . $_POST["dob"] . "<br>";
    echo "Email : " . $_POST["email"];
}
?>

<!-- 
-----------Ek vaar maramathi joi lejo output. Pehla na lakhta---------
Name : 
DOB : 
Email : 
Submit button
Name : Prakhar Parikh
DOB : 2005-07-14
Email : pnp14072005@gmail.com
-->