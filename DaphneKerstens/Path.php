<?php

class Path
{
    public $currentPath;

    function __construct($path)
    {
        $this->currentPath = $path;
    }

    public function cd($newPath)
    {
        if (!$this->isValidPath($newPath)) return 'this is not a valid path';

        $newPathFolders = explode('/', $newPath);
        $currentPathFolders = explode('/', $this->currentPath);
        $currentPathLength = count($currentPathFolders);

        $i = 1;
        foreach ($newPathFolders as $key => $folder) {

            if ($key === 0 && $folder === '') {
                // It is an absolute path
                return $newPath;
            } else {
                // It is a relative path
                if ($folder === '..') {
                    unset($currentPathFolders[$currentPathLength-$i]);
                } else {
                    // absolute path
                    array_push($currentPathFolders, $folder);
                }
            }

            $i++;
        }

        return implode('/', $currentPathFolders);
    }

    /**
     * @param $path
     * @return bool
     */
    private function isValidPath($path)
    {
        $pathArray = explode('/', $path);

        foreach ($pathArray as $folderName){

            if ($folderName !== '..' && $folderName !== '') {
                // Only foldernames of one alphabetic character exist
                if (strlen($folderName) !== 1 || !ctype_alpha($folderName)) {

                    return false;
                }
            }
        }

        return true;
    }
}

$path = new Path('/a/b/c/d');
$path->cd('../../x');
var_dump($path->cd('../../R/x'));