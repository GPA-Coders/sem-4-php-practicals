<?php
    $car = "Tigor";
    $company = "";

    if($car == "Safari" || $car == "Nexon" || $car == "Tigor" || $car == "Tiago"){
        $company = "Tata";
    }
    else if($car == "XUV700" || $car == "XUV300" || $car == "Bolero"){
        $company = "Mahindra";
    }
    else if($car == "i20" || $car == "Verna" || $car == "Venue" || $car == "Creta"){
        $company = "Hyundai";
    }
    else if($car == "Swift" || $car == "Alto" || $car == "Baleno" || $car == "Brezza"){
        $company = "Suzuki";
    }
    else{
        die("Car not found in records!");
    }

    echo "Company : $company";
?>

<!-- Company : Tata -->