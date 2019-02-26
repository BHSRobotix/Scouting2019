<?php
class Mockdata {

    private $mockteam = array("TeamNumber"=>"2876", "City"=>"Burlington", "Website"=>"bhsrobotix.com");

    private $mockoverallteamstats = array("Wins"=>2, "Loses"=>5, "Ties"=>0, "Rank Points"=>7,
        "Cargo Ship Cargo"=>5, "Cargo Ship Hatch"=>6, "Defensive Rank"=>2,
        "First Level Rocket Cargo"=>7, "Second Level Rocket Cargo"=>1, "Third Level Rocket Cargo"=>0,
        "First Level Rocket Hatch"=>4, "Second Level Rocket Hatch"=>2, "Third Level Rocket Hatch"=>0,
        "First Level Climb"=>6, "Second Level Climb"=>1, "Third Level Climb"=>0);

    private $mockmatch1 = array("Red 1"=>2876, "Red 2"=>195, "Red 3"=>319,
        "Blue 1"=>95, "Blue 2"=>4909, "Blue 3"=>2877);

    private $mockmatch2 = array("Red 1"=>238, "Red 2"=>138, "Red 3"=>139,
        "Blue 1"=>1519, "Blue 2"=>2315, "Blue 3"=>2876);

    private $mockmatch3 = array("Red 1"=>4909, "Red 2"=>133, "Red 3"=>95,
        "Blue 1"=>319, "Blue 2"=>2048, "Blue 3"=>195);

    private $mockmatchlist = array(mockmatch1, );

    private $mocksinglematchdata = array();

    private $mocksinglematchteamdata = array();

    public function getteamdata($teamnum){
        return $this->mockteam;
    }

}
?>

