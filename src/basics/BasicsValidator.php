<?php
namespace basics;


//use http\Exception\InvalidArgumentException;

class BasicsValidator implements BasicsValidatorInterface{


    public function isMinutesException(int $minute): void
    {
        // TODO: Implement isMinutesException() method.
        if ($minute < 0 || $minute > 59) {
            throw new \InvalidArgumentException();
        }



    }

    public function isYearException(int $year): void
    {
        // TODO: Implement isYearException() method.
        if ($year<1900){
            throw new \InvalidArgumentException();
        }
    }

    public function isValidStringException(string $input): void
    {
        // TODO: Implement isValidStringException() method.
        if (strlen($input)!=6){
            throw new \InvalidArgumentException();
        }
    }
}