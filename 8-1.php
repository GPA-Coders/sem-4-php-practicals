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
        echo "Name : " . $_POST["name"];
        echo "<br>Salary : " . $_POST["salary"];
    }
?>

<!-- Name : Prakhar
Salary : 100000 -->