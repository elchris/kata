<?php
namespace pdt256\kata\tests\Bowling;

use pdt256\kata\Bowling\Bowling;
use PHPUnit\Framework\TestCase;

class BowlingTest extends TestCase
{
    public function testSetup(): void
    {
        $bowling = new Bowling;

        $this->assertInstanceOf(Bowling::class, $bowling);
    }
}
