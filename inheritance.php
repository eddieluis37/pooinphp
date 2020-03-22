<?php

abstract class Unit
{
    protected $alive = true;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($opponent)
    {
       echo "<p>{$this->name} ataca a $opponent</p>";
    }

    abstract public function attack($opponent);
}

class Soldier extends Unit
{
    public function attack($opponent)
    {
       echo "<p>{$this->name} ataca a $opponent</p>";
    }
}

class Archer extends Unit
{
    public function attack($opponent)
    {
        echo "<p>{$this->name} dispara una flecha a $opponent</p>";
    }
}
$silence = new Soldier('Silence');

$silence->attack('eddie');

echo $silence->attack();