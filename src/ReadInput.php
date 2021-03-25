<?php

class ReadInput
{
    private $newInput;
    private $playerInfo;
    private $numberOfPlayer = 0;

    public function __construct()
    {
    }

    private function getInput()
    {
        if ($this->numberOfPlayer < 2)
        {
            $this->numberOfPlayer += 1;
            print "Please enter player " . $this->numberOfPlayer . " informations\n";
            $this->newInput = readline();
        }
    }

    private function parseInput()
    {
        $this->playerInfo = explode(" ", $this->newInput);
    }

    public function getPlayerInfo()
    {
        $this->getInput();
        $this->parseInput();
        return $this->playerInfo;
    }
}
?>