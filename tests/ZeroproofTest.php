<?php
/**
 * Tests for ZeroProof
 */

use PHPUnit\Framework\TestCase;
use Zeroproof\Zeroproof;

class ZeroproofTest extends TestCase {
    private Zeroproof $instance;

    protected function setUp(): void {
        $this->instance = new Zeroproof(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Zeroproof::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
