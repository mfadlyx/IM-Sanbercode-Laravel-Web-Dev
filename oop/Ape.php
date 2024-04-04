<?php

require_once('animal.php');

class ape extends animal
{
    public $legs = 2;
    public $cold_blooded = "no";
    public function yell()
    {
        return "yell : Auooo";
    }
}
?>