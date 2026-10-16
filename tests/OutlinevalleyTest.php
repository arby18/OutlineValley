<?php
/**
 * Tests for OutlineValley
 */

use PHPUnit\Framework\TestCase;
use Outlinevalley\Outlinevalley;

class OutlinevalleyTest extends TestCase {
    private Outlinevalley $instance;

    protected function setUp(): void {
        $this->instance = new Outlinevalley(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Outlinevalley::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
