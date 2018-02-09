<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 2/8/18
 * Time: 2:10 PM
 */

namespace TDD;

class Path  {

    public $currentPath;
    function __construct($path) {
        $this->currentPath = $path;
    }
    public function cd($newPath) {
        $innerCounter = 0;
        $strOut= '';
        $newPath = explode('/',$newPath);
        $oldPath = explode('/', $this->currentPath);

        foreach($newPath as $str) {
            echo $str.'<P>';
            if($str == '..') $innerCounter++;
        }

        $oldLength = count($oldPath);
        for($i=0;$i<($oldLength - $innerCounter);$i++)
            $strOut .= $oldPath[$i]."/";

        $newLength = count($newPath);
        for($i=0;$i<$newLength;$i++){
            if($newPath[$i] !='..'){
                $strOut = $strOut.$newPath[$i].'';
            }
        }

        $this->currentPath = $strOut;
        return $this;
    }
}
$path = new Path('/a/b/c/d');
echo $path->cd('../x')->currentPath;