<?php
class Actor
{
    protected $type;
    protected $name;
    protected $health = 100;
    protected $attack = 10;
    protected $equipments;

    public function __construct($type, $name)
    {
        $this->type = $type;
        $this->name = $name;
        $this->equipments = [];
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
                    if ($item->getType() === 'Sword') $total++;
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

    public function hurt($hurt)
    {
        $this->health -= $hurt;
        if ($this->health <= 0) {
            echo "dead!!";
        }
    }
}
