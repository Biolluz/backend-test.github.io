<?php
declare(strict_types=1);

class Luhn
{
    public function isValid(string $str): bool
    {
        $str = str_replace(' ','',$str);
        if (strlen($str) > 1){
            if ($this->verifNum($str)){
                $nums = $this->double($str);
                $sum = $this->sum($nums);
                if ($sum % 10 == 0){
                    return true;
                }
            }
        }
        return false;
    }

    public function verifNum(string $str): bool
    {
        preg_match("/([^0-9])/",$str,$result);
        if(!empty($result)){
            return false;
        }
        return true;
    }

    public function double($str)
    {
        $nums = $this->strInNumArray($str);
        for ($i = count($nums)-2; $i >= 0; $i = $i-2)
        {
            $nums[$i] = $nums[$i]*2;
            if ($nums[$i]>9){
                $nums[$i] = $nums[$i]-9;
            }
        }
        return $nums;
    }

    public function strInNumArray($str)
    {
        $nums = [];
        for ($i=0; $i<strlen($str); $i++){
            $nums[$i] = intval($str[$i]);
        }
        return $nums;
    }

    public function sum($nums){
        $sum = 0;
        for ($i = 0; $i < count($nums); $i++)
        {
            $sum += $nums[$i];
        }
        return $sum;
    }

}

$str = "4539 1488 0343 6467";

$luhn = new Luhn;

if ($luhn->isValid($str)){
    echo $str." est une clée valide.\n";
} else {
    echo $str." est une clée invalide.\n";
}
