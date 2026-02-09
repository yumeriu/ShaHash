<?php
/**
 * Tests for Sha256Hash
 */

use PHPUnit\Framework\TestCase;
use Sha256hash\Sha256hash;

class Sha256hashTest extends TestCase {
    private Sha256hash $instance;

    protected function setUp(): void {
        $this->instance = new Sha256hash(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Sha256hash::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
