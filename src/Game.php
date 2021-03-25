<?php
require "Player.php";
require "ReadInput.php";
require "GameInformations.php";

class Game
{
    private $playerA;
    private $playerB;
    private $gameInformations;

    public function __construct()
    {
        $readInput = new ReadInput();
        $this->playerA = new Player($readInput->getPlayerInfo());
        $this->playerB = new Player($readInput->getPlayerInfo());
        $this->gameInformations = new GameInformations();
    }

    public function run()
    {
        while ($this->playerA->isAlive() && $this->playerB->isAlive()) {
            $this->playerB->applyDamage($this->playerA->getAttack(), $this->playerA->getLifePoints());
            $this->playerA->applyDamage($this->playerB->getAttack(), $this->playerB->getLifePoints());
            $this->gameInformations->displayGameInformations($this->playerA->GetLifePoints(), $this->playerB->GetLifePoints());
        }
        $this->checkWinner();
    }

    private function checkWinner()
    {
        if ($this->playerA->isAlive())
        {
            $this->gameInformations->displayGameResult($this->playerA->getName(), $this->playerA->getLifePoints());
        }
        else if ($this->playerB->isAlive())
        {
            $this->gameInformations->displayGameResult($this->playerB->getName(), $this->playerB->getLifePoints());
        }
    }
}
?>