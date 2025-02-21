<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$arr1 = [1,2,3,4,5,6,7,8,9,10];
$arr2 = [1,3,5,7,9];
function arr_func($arr1, $arr2)
{
    $result = [];
    foreach ($arr1 as $arr1_elem) {
        foreach ($arr2 as $arr2_elem) {
            if ($arr1_elem == $arr2_elem) {
                array_push($result, $arr1_elem);
            }
        }
    }
    return $result;
}
?>
<p><?php print_r(arr_func($arr1, $arr2))?></p>
</body>
</html>