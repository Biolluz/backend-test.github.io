<?php
require('Names.php');
require('random.php');
require('iRobot.php');
require('Robot.php');
require('RobotFactory.php');


$names = new Names;

$robot1 = RobotFactory::create('fly',$names);
$robot2 = RobotFactory::create('walk',$names);
$robot3 = RobotFactory::create('fly',$names);

$robot1->move();
$robot2->move();
$robot3->move();

$robot2->reset($names);
$robot2->move();
