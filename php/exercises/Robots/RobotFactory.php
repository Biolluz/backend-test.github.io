<?php

require('WalkRobot.php');
require('FlyRobot.php');

class RobotFactory
{
    public static function create($type,$names)
    {
        switch ($type) {
            case 'fly': $robot = new FlyRobot($names); break;
            case 'walk': $robot = new WalkRobot($names); break;
            default: throw new Exception("Unknow robot type", 1);
        }
        return $robot;
    }
}