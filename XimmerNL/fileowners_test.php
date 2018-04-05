<?php
require 'fileowners.php';

final class FileOwnersTest extends PHPUnit\Framework\TestCase
{
    public function testA(): void
    {
        $in = [
            "Input.txt" => "Randy",
            "Code.py" => "Stan",
            "Output.txt" => "Randy"
        ];
        $out = [
            "Randy" => [ "Input.txt", "Output.txt" ],
            "Stan" => [ "Code.py" ]
        ];
        $fileOwners = new FileOwners;
        $test = $fileOwners->groupByOwners($in);
        $this->assertEquals($out, $test);
    }
}
?>