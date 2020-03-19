<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <title>Oefening 1</title>
</head>
<body>
<?php
function maakRij($min, $max, $stap = 1){
    if ($max >= $min){
        for ($i = $min; $i <= $max; $i += $stap){
            $array[] = $i;
        }
    } else{
        for ($i = $min; $i >= $max; $i += $stap) {
            $array[] = $i;
        }
    }
    return $array;
}
?>
<?php
    $a = maakrij(5,1,-2);
    $output = "[";
    foreach ($a as $item){
        $output .= $item.',';
    }
    print(substr($output,0,strlen($output) - 1)."]");
?>
</body>
</html>