<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <title>Toon</title>
</head>
<body>
<?php
    print('Welkom '.$_COOKIE['cookieNaam']);
    $kleur = $_COOKIE['cookieKleur'];
    echo "<body style='background-color: $kleur'>";
?>
</body>
</html>