<?php
    if (is_numeric($_GET['getal'])){
        require_once ('wiskunde.php');
        print(faculteit($_GET['getal']));
    } else{
        header("Location: ingave.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerk</title>
</head>
<body>

</body>
</html>
