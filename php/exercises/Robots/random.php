<?php

trait random
{
    function getRandom(){
        $intRand = random_int(0,999);
        $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $randomLetter1=$alphabet[rand(0,25)];
        $randomLetter2=$alphabet[rand(0,25)];
        if ($intRand < 10){
            $intRandString = '00'.$intRand;
        } elseif ($intRand < 100) {
            $intRandString = '0'.$intRand;
        } else {
            $intRandString = ''.$intRand;
        }
        return $intRandString.$randomLetter1.$randomLetter2;
    }
}