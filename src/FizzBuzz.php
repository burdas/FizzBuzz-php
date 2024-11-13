<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    /**
     * @param $value
     *
     * @return string
     */
    static function generate($value): string {
        if (self::isFizz($value) && self::isBuzz($value)) return 'FizzBuzz';
        if (self::isFizz($value)) return 'Fizz';
        if (self::isBuzz($value)) return 'Buzz';
        return $value;
    }

    static function isFizz($value): bool {
        return $value % 3 === 0 || self::includeInDigits($value, 3);
    }

    static function isBuzz($value): bool {
        return $value % 5 === 0 || self::includeInDigits($value, 5);
    }

    /**
     * @param $number
     * @param $digit
     * @return bool
     */
    public static function includeInDigits($number, $digit): bool {
        $stringNumber = strval($number);
        $arrayNumber = array_map(fn($e) => (int) $e ,str_split($stringNumber));
        return in_array($digit, $arrayNumber);
    }

    public static function main(): void
    {
        $MAX_NUMBER = 100;
        for ($i = 1; $i <= $MAX_NUMBER; $i++) {
            print FizzBuzz::generate($i) . "\n";
        }
    }
}

FizzBuzz::main();