<?php
$var = 10
?>

<html>
<head>
    <title>Scouting Main Menu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .mainmenu{
            max-width: 330px;
            margin: auto;
        }

        .logout{
            position: relative;
        }

        #lo {
            position: absolute;
            bottom: 0;
            right: 0;
            padding-bottom: 10px;
            padding-right: 10px;
        }
    </style>
</head>
<body>
test <?= $var ?>
<div class="mainmenu">
    <a class="btn btn-lg btn-primary btn-block" href="scoutmatch.php">Scout a Match</a>
    <a class="btn btn-lg btn-secondary btn-block" href="getreportmenu.php">Get a Report</a>
    <a class="btn btn-lg btn-warning btn-block" href="#">Help</a>
</div>
<div class="logout">
    <a class="btn btn-danger" id="lo" href="login.php">Log Out</a>
</div>
</body>
</html>