<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <title>Oefening 1</title>
</head>
<body>
<?php
$aantalLijnen = 7;
for ($lijn = 1; $lijn <= $aantalLijnen; $lijn++) {
    for ($kolom = 1; $kolom <= $lijn; $kolom++) {
        print('#');
    }
    print('<br />');
}
print('<br />');
?>
<?php
for ($lijn = 1; $lijn <= $aantalLijnen; $lijn++) {
    for ($spatie = 1; $spatie <= $aantalLijnen - $lijn; $spatie++) {
        echo "&nbsp;&nbsp;";
    }
    for ($symbol = 1; $symbol <= $lijn; $symbol++) {
        print("#");
    }
    print('<br />');
}
print('<br />');
?>
<?php
for ($lijn = 1; $lijn <= $aantalLijnen; $lijn++) {
    for ($spatie = 1; $spatie <= $aantalLijnen - $lijn; $spatie++) {
        echo "&nbsp;&nbsp;";
    }
    for ($symbol = 1; $symbol <= $lijn; $symbol++) {
        print("#");
    }
    for ($symbol = 1; $symbol < $lijn; $symbol++) {
        print("#");
    }
    print('<br />');
}
print('<br />');
?>
<?php
$interval = 5;
$ticker = 1;
for ($lijn = 1; $lijn <= $aantalLijnen; $lijn++) {
    for ($spatie = 1; $spatie <= $aantalLijnen - $lijn; $spatie++) {
        echo "&nbsp;&nbsp;";
    }
    for ($symbol = 1; $symbol <= $lijn; $symbol++) {
        print(symbol($ticker));
        $ticker++;
    }
    for ($symbol = 1; $symbol < $lijn; $symbol++) {
        print(symbol($ticker));
        $ticker++;
    }
    print('<br />');
}
print('<br />');
?>
<?php
function symbol($ticker){
    if (($ticker - 1) % 5 == 0){
        return "@";
    } else{
        return "#";
    }
}
?>
</body>
</html>