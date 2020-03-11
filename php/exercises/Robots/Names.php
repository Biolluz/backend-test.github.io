<?php

class Names
{
    public $names;

    public function __construct()
    {
        $this->names = [];
    }

    public function addName($name)
    {
        array_push($this->names,$name);
    }

    public function removeName($name)
    {
        unset($this->names[array_search($name,$this->names)]);
    }

    public function contains($name)
    {
        return in_array($name,$this->names);
    }

    public function display()
    {
        var_dump($this->names);
    }
}