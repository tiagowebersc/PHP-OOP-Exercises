<?php
class HtmlString
{
    private $string;

    public function __construct($newString)
    {
        $this->string = $newString;
    }

    public function setString($string)
    {
        $this->string = $string;
    }

    public function getString()
    {
        return $this->string;
    }

    public function getBoldString()
    {
        return '<b>' . $this->getString() . '</b>';
    }
    public function getItalicString()
    {
        return '<i>' . $this->getString() . '</i>';
    }
    public function getItalicBoldString()
    {
        return '<b>' . $this->getItalicString() . '</b>';
    }
}
