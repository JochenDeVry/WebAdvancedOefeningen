<?php
setcookie ('cookieNaam', $_GET['naam'], time() + 24 * 60 * 60 );
setcookie ('cookieKleur', $_GET['kleur'], time() + 24 * 60 * 60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <title>Verwerking</title>
</head>
<body>
    Cookies geplaatst
    <form method="get" action="toon.php">
        <input type="submit" value="Cookie testen"/>
    </form>
</body>
</html>