<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use LDH\Esquel\Raw;

final class RawTest extends TestCase
{
    private $rawObj = NULL;

    protected function setUp() : void
    {
        $this->rawObj = new Raw();
    }

    public function testSelect(): void
    {
        $this->markTestIncomplete();
    }

    public function testCanGetQuery(): void
    {
        $this->markTestIncomplete();
    }

    public function testCanResetSqlQuery()
    {
        $this->markTestSkipped();
    }
}
