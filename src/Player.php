<?php

class Player
{
    private $name;
    private $lifePoints;
    private $attack;
    private $defense;

    public function __construct($playerInfo)
    {
        $this->name = $playerInfo[0];
        $this->lifePoints = $playerInfo[1];
        $this->attack = $playerInfo[2];
        $this->defense = $playerInfo[3];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLifePoints()
    {
        return $this->lifePoints;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function applyDamage($enemyAttack, $enemyLifePoints)
    {
        if ($enemyLifePoints > 0) {
            $this->lifePoints = $this->lifePoints - ($enemyAttack - $this->defense);
        }
    }

    public function isAlive()
    {
        if ($this->lifePoints > 0) {
            return true;
        }
        return false;
    }
}
?>