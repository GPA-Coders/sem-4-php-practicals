<?php
$a = array(2, 3, 1, 5, 4);
$n = count($a);

for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($a[$j] > $a[$j + 1]) {
            $temp = $a[$j];
            $a[$j] = $a[$j + 1];
            $a[$j + 1] = $temp;
        }
    }
}

echo "Sorted array : ";
for ($i = 0; $i < $n; $i++)
    echo $a[$i] . " ";
?>

<!-- Sorted array : 1 2 3 4 5 -->