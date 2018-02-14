<?php
use PHPUnit\Framework\TestCase;
include('Path.php');

final class PathTest extends TestCase
{
    public function testPath()
    {
	$path = new Path('/a/b/c/d');
	$path->cd('../x');
        $this->assertEquals(
            '/a/b/c/x',
            $path->currentPath
        );
    }
}

