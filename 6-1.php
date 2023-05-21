<?php
    function notes($amount){
        $count = 0;
        $a = array(100, 50, 20, 10, 5, 2, 1);
        foreach($a as $note){
            $temp = (int)($amount / $note);
            $count += $temp;
            if($amount <= 0){
                break;
            }
            $amount -= (int)($temp * $note);
        }
        return $count;
    }

    $amount = 37;
    $count = notes($amount);
    echo " No. of notes : $count";
?>

<!-- No. of notes : 4 -->