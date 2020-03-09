<?php
declare(strict_types=1);

class Queen
{
    public $positions;

    public function __construct()
    {
        $this->positions = [random_int(0,7),random_int(0,7)];
    }

    public function getPositions()
    {
        return $this->positions;
    }

    public function setPositions(int $i,int $j)
    {
        $this->positions = [$i,$j];
    }
}

class QueenAttack
{
    /**
     * @throws InvalidArgumentException
     */
    public function placeQueen(int $i, int $j): bool
    {
        if(!is_int($i) or !is_int($j)){
            throw new InvalidArgumentException('PlaceQueen function only accepts integers. Inputs was: '.$i.' & '.$j);
        } else {
            return true;
        }
    }

    /**
     * @param  int[]  $white  Coordinates of the white Queen
     * @param  int[]  $black  Coordinates of the black Queen
     * @throws InvalidArgumentException
     */
    public function canAttack(array $white, array $black): bool
    {
        if ($white[0] == $black[0] or $white[1] == $black[1] or abs($white[0]-$black[0]) == abs($white[1]-$black[1]))
        {
            return true;
        } else {
            return false;
        }
    }
}

$Q1 = new Queen;
$Q2 = new Queen;

$QA = new QueenAttack;

$test1 = $QA->placeQueen($Q1->getPositions()[0],$Q1->getPositions()[1]);
$test2 = $QA->placeQueen($Q2->getPositions()[0],$Q2->getPositions()[1]);

if ($test1 and $test2)
{
    echo "Q1 : ".$Q1->getPositions()[0].'-'.$Q1->getPositions()[1]."\nQ2 : ".$Q2->getPositions()[0].'-'.$Q2->getPositions()[1]."\n";
    if ($QA->canAttack($Q1->getPositions(),$Q2->getPositions())){
        echo "La reine peut attaquer\n";
    } else {
        echo "La reine ne peut pas attaquer\n";
    }
}





