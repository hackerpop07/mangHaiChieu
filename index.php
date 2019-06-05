<?php
//$array = range(0, 50); tao Mang voi 50 phan tu
$array = [];
$dem = 0;
for ($i = 0; $i < 50; $i++) {
    $arr = [];
    for ($j = 0; $j < 50; $j++) {
        array_push($arr, "56");
    }
    array_push($array, $arr);
}
for ($i = 0; $i < 50; $i++) {
    for ($j = 0; $j < 50; $j++) {
        if ($i == $j) {
            $dem++;
        }
    }
}
echo $dem;