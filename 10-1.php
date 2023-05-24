<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $salary = $_POST["salary"];

        $conn = mysqli_connect("localhost", "root", "", "iwd_lab_manual");
        if(!$conn){
            die("Connection to database failed!");
        }

        $sql = "INSERT INTO `employee`(`Ename`, `Esalary`) VALUES('$name', '$salary')";
        $result = mysqli_query($conn, $sql);

        if(!$result){
            echo "The query was not executed successfully!";
            echo mysqli_error($conn);
        }
        else{
            echo "Employee record inserted successsfully!";
        }
    }
?>

<html>
<head>
    <title>PHP Employee Form</title>
</head>
<body>
    <form action="" method="post">
        Name : <input type="text" name="name">
        <br>
        Salary : <input type="number" name="salary">
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>

<!-- 
    -----------Output mane puchine lakhjo----------------
    Employee record inserted successsfully!
    Name : 
    Salaray : 
 -->