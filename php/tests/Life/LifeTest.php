<?php
namespace pdt256\kata\tests\Life;

use pdt256\kata\Life\Life;
use PHPUnit\Framework\TestCase;

class LifeTest extends TestCase
{
    public function testSetup(): void
    {
        $life = new Life;

        $this->assertInstanceOf(Life::class, $life);
    }

    // Any live cell with fewer than two live neighbours dies, as if caused by under-population.
    // Any live cell with two or three live neighbours lives on to the next generation.
    // Any live cell with more than three live neighbours dies, as if by over-population.
    // Any dead cell with exactly three live neighbours becomes a live cell, as if by reproduction.
}
