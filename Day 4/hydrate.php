<?php

/*
Hydrating your objects
Hydrating an object is taking an object that exists in memory (database, file...) and then populating an object with those datas
*/

class user
{
    private $id;
    private $name;
}

// select id, name from user;
// the value from database ir used in the class
