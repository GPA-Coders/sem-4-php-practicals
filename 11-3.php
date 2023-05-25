<?php
    $assocArray = array(
        "Name" => "Hacking",
        "Skill" => "Hacking"
    );
    $json = json_encode($assocArray);
    echo "Array to JSON : $json<br>";
    $arr = json_decode($json, true);
    echo "JSON to Array : ";
    print_r($arr);
?>

<!-- 
Array to JSON : {"Name":"Hacking","Skill":"Hacking"}
JSON to Array : Array ( [Name] => Hacking [Skill] => Hacking )
-->