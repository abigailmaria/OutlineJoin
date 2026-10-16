<?php
/**
 * Tests for OutlineJoin
 */

use PHPUnit\Framework\TestCase;
use Outlinejoin\Outlinejoin;

class OutlinejoinTest extends TestCase {
    private Outlinejoin $instance;

    protected function setUp(): void {
        $this->instance = new Outlinejoin(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinejoin::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
