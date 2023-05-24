<?php
    $Eid = 3;
    $name = null;
    $salary = null;

    $conn = mysqli_connect("localhost", "root", "", "iwd_lab_manual");
    if(!$conn){
        die("Connection to database failed!");
    }

    $sql = "SELECT * FROM `employee` WHERE `Eid` = '$Eid'";
    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "The query was not executed successfully!";
        echo mysqli_error($conn);
    }
    else{
        $data = mysqli_fetch_array($result);
        $name = $data["Ename"];
        $salary = $data["Esalary"];
    }
?>

<html>
<head>
    <title>PHP Employee Form</title>
</head>
<body>
    Name : <?php echo $name; ?>
    <br>
    Salary : <?php echo $salary; ?>
</body>
</html>

<!-- -----------------Output Maramathi joine lakhjo-----------------
Name : Prakhar
Salary : 100000 -->