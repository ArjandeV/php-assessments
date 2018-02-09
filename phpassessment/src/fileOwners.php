<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 2/8/18
 * Time: 9:02 AM
 */

namespace TDD;

class fileOwners
{
    public function groupByOwners($files)
    {
        $result=array();
        foreach($files as $key=>$value)
        {
            $result[$value][]=$key;
        }
        return $result;
    }
}

$files = [
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
];
$fileOwners = new fileOwners;
var_dump($fileOwners->groupByOwners($files));