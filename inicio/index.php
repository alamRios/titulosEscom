<?php
    session_start(); 
    if (!isset($_SESSION["usr_id"])) {
        header("Location: /titulosEscom");
        die();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Bienvenido <?php echo $_SESSION["usr_id"] ?>
    </body>
</html>