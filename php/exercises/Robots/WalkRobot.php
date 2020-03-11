<?php

class WalkRobot extends Robot implements iRobot
{
    use random;

    public function __construct($names)
    {
        $this->reset($names);
    }

    public function move()
    {
        echo $this->getName()." say: I walk\n";
    }

    public function reset($names)
    {
        $oldName = $this->name;
        if ($names->contains($oldName)){
            $names->removeName($oldName);
        }
        $newName = "WK".$this->getRandom();
        if ($names->contains($newName)){
            $this->reset($names);
        } else {
            $this->name = $newName;
            $names->addName($newName);
        }
        if ($oldName !== null){
            echo $oldName." reset and becomes : ".$newName."\n";
        } else {
            echo $newName." is a now walking robot.\n";
        }
    }
}