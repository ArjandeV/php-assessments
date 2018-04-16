<?php

class FileOwners
{

    /**
     * @param $files[]
     * @return mixed
     */
    public function groupByOwners($files)
    {
        if (!is_array($files)) return 'Please insert an array';

        $owners = [];

        foreach ($files as $file => $owner) {
            $owners[$owner][] = $file;
        }

        return $owners;
    }
}

$files = [
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
];

$fileOwners = new FileOwners;
var_dump($fileOwners->groupByOwners($files));

