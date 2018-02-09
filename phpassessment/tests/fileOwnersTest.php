<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 2/8/18
 * Time: 9:35 AM
 */

namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\fileOwners;

class fileOwnersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @tests */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /**
     * Test whether $result has key.
     *
     * @return void
     */
    /** @tests */
    public function testArray()
    {
        $this->assertArrayHasKey('foo', ['bar' => 'baz']);
    }



}