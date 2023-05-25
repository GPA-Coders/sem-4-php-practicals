<?php
    $conn = mysqli_connect("localhost", "root", "", "iwd_lab_manual");

    if(!$conn){
        die("Connection to database failed!");
    }

    $sql = "SELECT * FROM `employee`";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        echo "Error executing query!";
    }
    
    $data = mysqli_fetch_all($result);
?>

<html>
<head>
    <title>Delete Employees</title>
</head>
<body>
    <table border="1">
        <thead>
            <td>Employee Name</td>
            <td>Delete Button</td>
        </thead>
        <?php
            foreach($data as $row){
                echo "<tr>";
                echo "<td>$row[1]</td>";
                echo "<td><a href='10-5-2.php?id=$row[0]'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>