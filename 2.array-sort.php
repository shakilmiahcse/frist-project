<?php
$country = array ("Bangladesh"=>"Dhaka","Japan"=>"Tokyo","Nepal"=>"kathmandu","America"=>"New York","India"=>"Delhi");
ksort($country);
foreach ($country as $key => $value) {
    echo "<ul><li>{$key} = {$value}</li></ul>";
}
?>