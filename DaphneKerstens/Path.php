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

        $newPathArray = explode('/', $newPath);
        $currentPathArray = explode('/', $this->currentPath);
        $currentPathLength = count($currentPathArray);

        $i = 1;
        foreach ($newPathArray as $key => $folder) {

//            var_dump(count($folder));
            if (count($folder) > 0 && ctype_alpha($folder)) {
                return 'This is not a valid path';
            }

            if ($key === 0 && $folder === '') {
                // absolute path
                return $newPath;
            } else {
                // relative path
                if ($folder === '..') {
                    unset($currentPathArray[$currentPathLength-$i]);
//                var_dump($i);
//                var_dump('current');
//                var_dump($currentPathArray);

                } else {
                    // absolute path
                    // Add to array
                    echo 'blabla';
                }
            }

            $i++;
        }

        return 'het nieuwe path (array to string)';
    }

    private function isValidPath($path)
    {
        // nog testen
        $pathArray = explode('/', $path);

        foreach ($pathArray as $folderName){
            if (count($folderName) > 1 && !ctype_alpha($folderName)) {
                return false;
            }
        }

        return true;
    }
}

$path = new Path('/a/b/c/d');
$path->cd('../../x');
echo $path->currentPath;