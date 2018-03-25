<?php
require 'Path.php';
 
class PathTests extends PHPUnit\Framework\TestCase
{
	private $path;
 
  protected function setUp()
  {
		$currentPath = '/a/b/c/d'; 
    $this->path = new Path($currentPath);
  }
 
  protected function tearDown()
  {    
		$this->path = NULL;
  }

	// Testing if parent directory is accessible
  public function testAdd1()
  {
  	$result = $this->path->cd('../x');
    $this->assertContains('/a/b/c/x', $result);  
	}

	// Testing an absolute path
	public function testAdd2()
  {
  	$result = $this->path->cd('/e/f/g/h');
		$this->assertContains('/e/f/g/h', $result);  
	}

	// Testing a relative path
  public function testAdd3()
  {
  	$result = $this->path->cd('e/f');
		$this->assertContains('a/b/c/d/e/f', $result);  
	}
}
