<?php include "mockdata.php" ?>

<?php

//if ($method == "GET") {
//    $teamNum = $_GET["tmNum"];
//} else if ($method == "POST") {
//    $teamNum = $_POST["tmNum"];
//}
$mockdata = new Mockdata();
$teamNum = "2876";
$teamData = $mockdata->getteamdata($teamNum);
?>

<html>
<head>
    <title>Scouting Team Report Menu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header{
            padding: 20px;
            text-align: center;
        }

        .logout{
            position: relative;
            padding-bottom: 10px;
            padding-right: 10px;
        }

        #lo {
            position: absolute;
            bottom: 0;
            right: 0;

        }

    </style>
</head>
<body>
<h1 class="header">Team Report Menu</h1>
<div class="all-report-menu">
    <img src="#" alt="Team 2876" style="width:200px;height:200px;">
    <div class="team-number">Team <?= $teamData["TeamNumber"] ?></div>
    <div class="team-location">From <?= $teamData["City"] ?></div>
</div>
<div class="logout">
    <a class="btn btn-danger" id="lo" href="login.php">Log Out</a>
</div>
</body>
</html>