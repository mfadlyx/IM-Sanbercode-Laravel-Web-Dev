<?php

require_once('animal.php');

class frog extends animal
{
    public $legs = 4;
    public $cold_blooded = "no";
    public function yell()
    {
        return "yell : Hop Hop";
    }
}
?>