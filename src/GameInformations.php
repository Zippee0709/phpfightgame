<?php

class GameInformations
{

    public function __construct()
    {
    }

    public function displayGameInformations($playerALifePoints, $playerBLifePoints)
    {
        if ($playerALifePoints > 0 && $playerBLifePoints > 0) {
            print $playerALifePoints . " " . $playerBLifePoints . "\n";
        }
    }

    public function displayGameResult($playerName, $playerLifePoints)
    {
        print $playerName . " " . $playerLifePoints . "\n";
    }
}
?>