<?php
    foreach ($_GET['invoer'] as $getal){
        if (is_numeric($getal)){
            $getallen[] = $getal;
        } else{
            $misseWaarden .= $getal.' ';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oefening 3 - Getallen</title>
</head>
<body>
    <?php
        print('Minimum: '.min($getallen).'<br />');
        print('Maximum: '.max($getallen).'<br/>');
        $som = 0;
        foreach ($getallen as $waarde){
            $som += $waarde;
        }
        print('Gemiddelde: '.($som / count($getallen)).'<br/>');
        print('Misse waarden: '.$misseWaarden);
    ?>
</body>
</html>
