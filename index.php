<?php

class Unit
{
    protected $alive = true;
    protected $name;

    public function __construct()
    {
        $this->name = $name;
    }

    public function move($opponent)
    {
        echo "<p>{$this->name} ataca a $opponent</p>";
    }
}

class Soldier extends Unit
{
    public function attack($opponent)
    {

    }
}
$silence = new Soldier('Silence');

$silence->attack('RAmm');