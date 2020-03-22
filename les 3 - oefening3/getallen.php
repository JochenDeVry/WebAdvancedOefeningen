<?php
if (ctype_digit($_GET['aantalGetallen']) && $_GET['aantalGetallen'] > 0){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Oefening 3 - Getallen</title>
    </head>
    <body>
        <form action="statistiek.php" method="get">
            <?php
            for ($i = 1; $i <= $_GET['aantalGetallen']; $i++){
                ?><input type="text" name="invoer[]"/>
                <br/><?php
            }?>
            <input type="submit" value="Verzenden"/>
        </form>
    </body>
    </html>
<?php
} else{
    header("Location: ingave.html");
}
?>
