<?php
class Movie
{
    public $title;
    public $releaseYear;

    public function __construct($title, $releaseYear)
    {
        $this->title = $title;
        $this->releaseYear = $releaseYear;
    }
}
