<?php

namespace basics;
class Basics implements BasicsInterface
{
    public $validator;
    public $result;
    private $leap_y;
    private $equals;
    public function __construct($validator)
    {
        $this->validator = $validator;
    }


    public function getMinuteQuarter(int $minute): string
    {

    // TODO: Implement getMinuteQuarter() method.

        if (!$this->validator->isMinutesException($minute)) {
            if ($minute <= 15 and $minute > 0) {
                $this->result = 'first';
            } elseif ($minute > 15 and $minute <= 30) {
                $this->result = 'second';
            } elseif ($minute > 30 and $minute <= 45) {
                $this->result = 'third';
            } elseif (($minute > 45 and $minute <= 59) || $minute==0 ) {
                $this->result = 'fourth';
            }
        }

        return $this->result;
    }

    public function isLeapYear(int $year): bool
    {
        if (!$this->validator->isYearException($year)) {
            if(($year % 400 == 0)  || (($year % 4 == 0) && ($year%100!=0))){
                $this->leap_y = true;
            } else{
                $this->leap_y= false;
            }
        }
        // TODO: Implement isLeapYear() method.
        //return boolean
        return $this->leap_y;
    }

    public function isSumEqual(string $input): bool
    {
        if (!$this->validator->isYearException($input)) {
            if (($input[0] + $input[1] + $input[2]) == ($input[3] + $input[4] + $input[5])) {
                $equals = true;
            } else {
                $equals = false;
            }
        }
        // TODO: Implement isSumEqual() method.
        //return boolean
        return $equals;
    }

}
