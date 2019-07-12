<?php
class Equipment
{
    private $type;
    private $name;
    private $attack;
    private $defense;
    private $health;

    public function __construct($type, $name, $attack, $defense, $health)
    {
        $this->type = $type;
        if (array_search($type, [1 => 'Armor', 2 => 'Sword', 3 => 'Other'])) {
            $this->name = $name;
            $this->attack = $attack;
            $this->defense = $defense;
            $this->health = $health;
        } else {
            echo "Equipment destroyed, type " . $this->type . " incorrect!<br>";
            $this->__destruct();
        }
    }
    public function getType()
    {
        return $this->type;
    }
    public function getHealth()
    {
        return $this->health;
    }
    public function getAttack()
    {
        return $this->attack;
    }
    public function getDefense()
    {
        return $this->defense;
    }
    public function __toString()
    {
        return "'" . $this->name . "' type " . $this->type . " (Attack: $this->attack, Defense: $this->defense, Life: $this->health)<br>";
    }
}
