<?php

class DataProviderDependencyTest extends PHPUnit_Framework_TestCase
{
    public function testReference()
    {
        $this->markTestSkipped('This fileOwnersTest should be skipped.');
        $this->assertTrue(true);
    }

    /**
     * @see https://github.com/sebastianbergmann/phpunit/issues/1896
     * @depends testReference
     * @dataProvider provider
     */
    public function testDependency($param)
    {
    }

    public function provider()
    {
        $this->markTestSkipped('Any fileOwnersTest with this data provider should be skipped.');
        return [];
    }
}
