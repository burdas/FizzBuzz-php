<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{

    #[Test]
    public function isFizz()
    {
        $this->assertEquals("Fizz", FizzBuzz::generate(3));
        $this->assertEquals("Fizz", FizzBuzz::generate(6));
        $this->assertEquals("Fizz", FizzBuzz::generate(9));
    }

    #[Test]
    public function isBuzz()
    {
        $this->assertEquals("Buzz", FizzBuzz::generate(5));
        $this->assertEquals("Buzz", FizzBuzz::generate(10));
        $this->assertEquals("Buzz", FizzBuzz::generate(20));
    }

    #[Test]
    public function isFizzBuzz()
    {
        $this->assertEquals("FizzBuzz", FizzBuzz::generate(15));
        $this->assertEquals("FizzBuzz", FizzBuzz::generate(30));
        $this->assertEquals("FizzBuzz", FizzBuzz::generate(45));
    }

    #[Test]
    public function digitInANumber(){
        $this->assertTrue(FizzBuzz::includeInDigits(1234, 1));
        $this->assertTrue(FizzBuzz::includeInDigits(30, 3));
        $this->assertTrue(FizzBuzz::includeInDigits(15, 5));
    }
}
