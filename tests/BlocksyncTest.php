<?php
/**
 * Tests for BlockSync
 */

use PHPUnit\Framework\TestCase;
use Blocksync\Blocksync;

class BlocksyncTest extends TestCase {
    private Blocksync $instance;

    protected function setUp(): void {
        $this->instance = new Blocksync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocksync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
