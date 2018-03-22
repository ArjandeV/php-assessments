<?php

class Path
{
    public $currentPath;
    public $dir;

    function __construct($path)
    {
        $this->currentPath = $path;
        $this->dir = explode("/", $this->currentPath); // Split up directories names and put them in a array
    }
    public function cd($newPath)
    {
        $tempPath = explode("/", $newPath); // split up commands and put them into a array
  
        foreach($tempPath as $directory)
        {
            if($directory == "..")
            {
                array_splice($this->dir, count($this->dir)-1);
            }
            else {
                $this->dir[count($this->dir)] = $directory;
            }
        }
         $this->currentPath = implode("/",$this->dir); //Recreate the path from array with directory names
    }
}

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;