<?php
namespace pdt256\kata\tests\PrimeFactors;

use pdt256\kata\PrimeFactors\PrimeFactorGeneratorInterface;
use pdt256\kata\PrimeFactors\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    private PrimeFactorGeneratorInterface $primeFactors;

    public function setUp(): void
    {
        set_time_limit(1);
        $this->primeFactors = new PrimeFactors;
    }

    public function testGenerate(): void
    {
        $this->assertSame([], $this->primeFactors->generate(1));
        //$this->assertSame([2], $this->primeFactors->generate(2));
    }

    /**
     * @param int $number
     * @param array $primes
     * @dataProvider primeFactorsData
     */
    public function xtestFinal(int $number, array $primes): void
    {
        $result = $this->primeFactors->generate($number);
        $this->assertEquals(
            $primes,
            $result,
            'Input: ' . $number . ', Expected: ' . json_encode($primes) . ', Received: ' . json_encode($result)
        );
    }

    public function primeFactorsData(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [360, [2, 2, 2, 3, 3, 5]],
            [(2 * 3 * 5 * 7 * 13), [2, 3, 5, 7, 13]],
        ];
    }
}
