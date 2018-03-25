<?php
require 'FileOwners.php';
 
class FileOwnersTests extends PHPUnit\Framework\TestCase
{
	private $fileOwners;
	
	protected function setUp()
	{
		$this->fileOwners = new FileOwners();  
	}
	
	protected function tearDown()  
	{
		$this->fileOwners = NULL;	
  }
	
	// Testing if it returns an associative array containing an array of file names for each owner name
  public function testAdd()  
	{
		$input = [ "Input.txt" => "Randy", "Code.py" => "Stan",	"Output.txt" => "Randy"	];
		$output = [ "Randy" => [ "Input.txt", "Output.txt" ], "Stan" => [ "Code.py" ] ];
		
		$result = $this->fileOwners->groupByOwners($input);
		$this->assertEquals($output, $result);  
	}
}
