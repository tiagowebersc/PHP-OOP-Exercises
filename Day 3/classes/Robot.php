<?php

class Robot implements IWork
{
  //an identifier and a color.
  private $_id;
  private $_color;

  public function __construct($id, $color)
  {
    $this->_id = $id;
    $this->_color = $color;
  }

  public function work()
  {
    return $this->_id . ' doing some robot stuff!<br>';
  }
}
