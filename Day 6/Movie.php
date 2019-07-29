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

class MoviePri implements JsonSerializable
{
    private $title;
    private $releaseYear;

    public function __construct($title, $releaseYear)
    {
        $this->title = $title;
        $this->releaseYear = $releaseYear;
    }

    // Overrride the method from JsonSerializable
    public function jsonSerialize()
    {
        return [
            "title" => $this->title,
            "releaseYear" => $this->releaseYear
        ];
    }
}
