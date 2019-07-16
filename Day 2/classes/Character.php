<?php
require_once "Actor.php";
class Character extends Actor
{
    private $defense = 5;
    private $warCry = "Attaaaaaack!";

    public function __construct($type, $name)
    {
        $this->type = $type;
        if (in_array($type, ['Human', 'Orc', 'Elf'])) {
            $this->name = $name;
            $this->equipments = [];
            if ($type === 'Orc') {
                $this->health -= 10;
                $this->attack += 2;
                $this->defense += 2;
                $this->warCry = "wwouogrouroulou mlll !!";
            }
            if ($type === "Elf") {
                $this->defense -= 2;
            }
        } else {
            echo "Character destroyed, type " . $this->type . " incorrect!";
            $this->__destruct();
        }
    }

    public function __toString()
    {
        $string = "";
        $string = "<strong>'$this->name'</strong> <br>Type <strong>$this->type</strong> <br>War cry:<strong>$this->warCry</strong><br><br>";
        $health = $this->health;
        $attack = $this->attack;
        $defense = $this->defense;
        foreach ($this->equipments as $item) {
            $health += $item->getHealth();
            $attack += $item->getAttack();
            $defense += $item->getDefense();
            // human has a bonus for each weapon
            if ($this->type === "Human" && $item->getType() === "Sword") $attack++;
        }
        $string .= "Health: $health<br>";
        $string .= "Attack: $attack<br>";
        $string .= "Defense: $defense<br><br>";
        if (count($this->equipments)) {
            $string .= "Equipments:<br>";
            foreach ($this->equipments as $item) {
                $string .= " - " . $item;
            }
        }
        $string .= "-----------------------------------------------------------------<br>";
        return $string;
    }
}
