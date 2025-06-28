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

    public function testCanGetQuery(): void
    {
        $this->assertIsString(
            $this->rawObj->getQuery()
        );

        $this->assertEquals(
            $this->rawObj->getQuery(),
            ""
        );
    }

    public function testCanSetQuery(): void
    {
        $this->rawObj->setQuery("TEST");

        $this->assertEquals(
            $this->rawObj->getQuery(),
            "TEST"
        );
    }

    public function testGenerateSelect(): void
    {
        $query = $this->rawObj->select('id', 'name');

        $this->assertEquals(
            $query->getQuery(),
            "select id, name",
        );
    }

    public function testCanAddFromTable() : void
    {
        $query =
            $this->rawObj
            ->select('id', 'name')
            ->from('users');

        $this->assertEquals(
            $query->getQuery(),
            "select id, name from users",
        );
    }

    public function testCanResetSqlQuery()
    {
        $this->rawObj->setQuery("TEST");

        $this->rawObj->resetQuery();

        $this->assertEquals(
            $this->rawObj->getQuery(),
            ""
        );
    }

    public function testRawToString()
    {
        $query = $this->rawObj->getQuery();

        $this->assertEquals($this->rawObj, $query);
    }
}
