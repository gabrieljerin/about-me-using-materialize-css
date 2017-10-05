<?php
require_once './loader.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="./font-mfizz-2.4.1/font-mfizz.css">
        <!--Import materialize.css-->
        <link href="./style/materialize.min.css" rel="stylesheet">
        <link href="./style/font-awesome.min.css" rel="stylesheet">
        <link href="./style/animations.css" rel="stylesheet">
        <link href="./cssStyle/menu.css" rel="stylesheet">
        <link href="./cssStyle/masterpage.css" rel="stylesheet">
        <link href="./cssStyle/loader.css" rel="stylesheet">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body style="background-color: #ECECEC;">
        <div class="main-wrapper" style="display: none;">
            <?php
            require_once './menu.php';
            ?>
        </div>
        <script src="Script/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="Script/materialize.min.js" type="text/javascript"></script>
        <script src="Script/css3-animate-it.js" type="text/javascript"></script>
        <script src="javascript/index.js" type="text/javascript"></script>
    </body>
</html>
