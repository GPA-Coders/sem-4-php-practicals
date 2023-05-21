<?php
    $s1 = "Physics";
    $s2 = "Computer";
    $s3 = "Maths";
    $s4 = "Electronics";
    $m1 = 100;
    $m2 = 100;
    $m3 = 100;
    $m4 = 100;
    $grade1 = "";
    $grade2 = "";
    $grade3 = "";
    $grade4 = "";

    if($m1 < 35 || $m2 < 35 || $m3 < 35 || $m4 < 35){
        die("Result is fail!");
    }

    for($i = 1; $i <= 4; $i++){
        $grade = "";
        $m = 0;
        switch($i){
            case 1: $m = $m1; break;
            case 2: $m = $m2; break;
            case 3: $m = $m3; break;
            case 4: $m = $m4; break;
        }
        if($m >= 85 && $m <= 100){
            $grade = "AA";
        }
        else if($m >= 75 && $m < 84){
            $grade = "AB";
        }
        else if($m >= 65 && $m < 74){
            $grade = "BB";
        }
        else if($m >= 55 && $m < 64){
            $grade = "BC";
        }
        else if($m >= 45 && $m < 54){
            $grade = "CC";
        }
        else if($m >= 40 && $m < 44){
            $grade = "CD";
        }
        else if($m >= 35 && $m < 39){
            $grade = "DD";
        }
        else{
            $grade = "FF";
        }
        switch($i){
            case 1: $grade1 = $grade; break;
            case 2: $grade2 = $grade; break;
            case 3: $grade3 = $grade; break;
            case 4: $grade4 = $grade; break;
        }
    }
?>

<html>
    <body>
        <table border="1">
            <thead>
                <td>Subject</td>
                <td>Marks</td>
                <td>Grade</td>
            </thead>
            <tr>
                <td><?php echo $s1 ?></td>
                <td><?php echo $m1 ?></td>
                <td><?php echo $grade1 ?></td>
            </tr>
            <tr>
                <td><?php echo $s2 ?></td>
                <td><?php echo $m2 ?></td>
                <td><?php echo $grade2 ?></td>
            </tr>
            <tr>
                <td><?php echo $s3 ?></td>
                <td><?php echo $m3 ?></td>
                <td><?php echo $grade3 ?></td>
            </tr>
            <tr>
                <td><?php echo $s4 ?></td>
                <td><?php echo $m4 ?></td>
                <td><?php echo $grade4 ?></td>
            </tr>
        </table>
    </body>
</html>

<!-- Output maramathi joine lakhjo -->