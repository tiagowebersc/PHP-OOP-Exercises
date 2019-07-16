<?php
class Character
{
    private $type;
    private $name;
    private $health = 100;
    private $attack = 10;
    private $defense = 5;
    private $warCry = "Attaaaaaack!";
    private $equipments;

    public function __construct($type, $name)
    {
        $this->type = $type;
        if (array_search($type, [1 => 'Human', 2 => 'Orc', 3 => 'Elf'])) {
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
    public function addEquipment($equipment)
    {
        if (count($this->equipments) >= 4) {
            echo "You can't add more equipment!<br>";
            return;
        }
        // restrictions
        switch ($equipment->getType()) {
            case 'Sword';
                $total = 0;
                foreach ($this->equipments as $item)
                    if ($item->type === 'Sword') $total++;
                if ($total === 2) {
                    echo "You can't have more than 2 swords!<br>";
                    return;
                }
                break;
            case 'Armor';
                $hasArmor = false;
                foreach ($this->equipments as $item)
                    if ($item->getType() === 'Armor') $hasArmor = true;
                if ($hasArmor) {
                    echo "You can't have more than 1 armor!<br>";
                    return;
                }
                break;
        }

        $this->equipments[] = $equipment;
    }

    public function removeEquipment($equipment)
    {
        if ($idx = array_search($equipment, $this->equipments)) {
            unset($this->equipments[$idx]);
        } else {
            echo "This character don't have this equipmento to be removed!<br>";
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
