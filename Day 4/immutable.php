<?php
/*
Immutable object is an object tat can't be edited after creation
*/
class user
{
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

$tiago = new User(1, 'Tiago');
// the ID and name are immutable because they don't have SETs and are not modified in anoter function
