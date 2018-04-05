<?php
class FileOwners
{
    public function groupByOwners($files)
    {
        $owners = [];
        foreach($files as $file => $owner){
            $owners[$owner][] = $file;
        }
        return $owners;
        
//     $owners = array();
//     array_walk($files, function($value, $key) use (&$owners ){
//         if(!isset($owners[$value]) || !is_array($owners[$value])){
//             $owners[$value] = [];
//         }
//         $owners[$value][] = $key;
//     });
//     return $owners;

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