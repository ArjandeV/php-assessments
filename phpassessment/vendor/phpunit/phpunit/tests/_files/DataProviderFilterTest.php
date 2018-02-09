<?php
class DataProviderFilterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider truthProvider
     */
    public function testTrue($truth)
    {
        $this->assertTrue($truth);
    }

    public static function truthProvider()
    {
        return [
           [true],
           [true],
           [true],
           [true]
        ];
    }

    /**
     * @dataProvider falseProvider
     */
    public function testFalse($false)
    {
        $this->assertFalse($false);
    }

    public static function falseProvider()
    {
        return [
          'false fileOwnersTest'       => [false],
          'false fileOwnersTest 2'     => [false],
          'other false fileOwnersTest' => [false],
          'other false test2'=> [false]
        ];
    }
}
