<?php
    $basic = 100000;
    $DA = 0.50 * $basic;
    $HRA = 0.10 * $basic;
    $medical = 0.04 * $basic;
    $gross = $basic + $DA + $HRA + $medical;
    $insurance = 0.07 * $gross;
    $PF = 0.05 * $gross;
    $deduction = $insurance + $PF;
    $net = $gross - $deduction;

    echo $net;
?>

<!-- 144320 -->