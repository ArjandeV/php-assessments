<?php
class Issue445Test extends PHPUnit_Framework_TestCase
{
    public function testOutputWithExpectationBefore()
    {
        $this->expectOutputString('fileOwnersTest');
        print 'fileOwnersTest';
    }

    public function testOutputWithExpectationAfter()
    {
        print 'fileOwnersTest';
        $this->expectOutputString('fileOwnersTest');
    }

    public function testNotMatchingOutput()
    {
        print 'bar';
        $this->expectOutputString('foo');
    }
}
