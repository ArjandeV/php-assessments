<?php
require 'path.php';

final class PathTest extends PHPUnit\Framework\TestCase
{
    public function testA(): void
    {
        $in = '../x';
        $out = '/a/b/c/x';
        $path = new Path('/a/b/c/d');
        $test = $path->cd($in);
        $this->assertEquals($out, $test);
    }
    
    public function testB(): void
    {
        $in = '/x/y/z';
        $out = '/x/y/z';
        $path = new Path('/a/b/c/d');
        $test = $path->cd($in);
        $this->assertEquals($out, $test);
    }
    
    public function testC(): void
    {
        $in = '../../../../x';
        $out = '/x';
        $path = new Path('/a/b/c/d');
        $test = $path->cd($in);
        $this->assertEquals($out, $test);
    }
    
    public function testD(): void
    {
        $in = '';
        $out = '/a/b/c/d';
        $path = new Path('/a/b/c/d');
        $test = $path->cd($in);
        $this->assertEquals($out, $test);
    }
    
}
?>