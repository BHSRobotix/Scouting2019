<?php
?>

<html>
<head>
    <title>Scouting Get a Report</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header{
            padding: 20px;
            text-align: center;
        }

        .allreportmenu {
            max-width: 330px;
            margin: auto;
            padding-top: 50px;
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
<h1 class="header">Get A Report Menu</h1>
<div class="allreportmenu">
    <a class="btn btn-lg btn-primary btn-block" href="teamreportmenu.php">Team Report Menu</a>
    <a class="btn btn-lg btn-secondary btn-block" href="matchreportmenu.php">Match Report Menu</a>
    <a class="btn btn-lg btn-warning btn-block" href="competitionreport.php">Competition Report</a>
</div>
<div class="logout">
    <a class="btn btn-danger" id="lo" href="login.php">Log Out</a>
</div>
</body>
</html>