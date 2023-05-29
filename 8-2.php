<html>
<body>
    <form action="" method="post">
        Name : <input type="text" name="name"> <br>
        Salary : <input type="number" name="salary"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(!preg_match('^[a-zA-Z]+(\s[a-zA-Z]+)?$^', $_POST["name"])){
            echo "Name is valid!";
        }
        else{
            echo "Name is invalid!";
        }
    }
?>

<!-- Name is valid! -->