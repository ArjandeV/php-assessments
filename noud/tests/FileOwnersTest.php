<?php
use PHPUnit\Framework\TestCase;
include('FileOwners.php');

final class FileOwnersTest extends TestCase
{
    public function testFileOwners()
    {
	$files = array(
	    "Input.txt" => "Randy",
	    "Code.py" => "Stan",
	    "Output.txt" => "Randy"
	);
	$fileOwners = new FileOwners;
        $this->assertEquals(
            array(
		'Randy' => array(
			'Input.txt',
			'Output.txt'
		),
		'Stan' => array(
			'Code.py'
		)
	    ),
            $fileOwners->groupByOwners($files)
        );
    }
}

