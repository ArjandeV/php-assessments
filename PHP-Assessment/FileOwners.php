<?php

class FileOwners
{
    public function groupByOwners($files)
    {
        $tmpAr = array();
        
        foreach($files as $file=>$name){
           
            $tmpAr[$name][] = $file;
        }
        return $tmpAr;
    }
}

$files = [
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
];
$fileOwners = new FileOwners;
var_dump($fileOwners->groupByOwners($files));
?>