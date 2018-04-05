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
        // New path given?
        if(strlen($newPath) > 0){
            
            // Check type of path
            if($newPath[0] !== '/'){
        
                // Need items is parts, it's a relative path
                $curDirs = explode('/', $this->currentPath);
                $chgDirs = explode('/', $newPath);
                
                // Loop through the 'change dir' items
                foreach($chgDirs as $chgDir){
                    // Up one directory, so remove item
                    if($chgDir == '..'){
                        // Remove last item from currentPath
                        array_pop($curDirs);
                    }else{
                        // Add item to currentPath
                        array_push($curDirs, $chgDir);
                    }
                }
                
                // Add slashed between dirs, to get new 'current' path
                $this->currentPath = implode('/', $curDirs);
                
            }else{
                
                // New path is an absolute path
                $this->currentPath = $newPath;
                
            }
            
            return $this->currentPath;
            
        }else{
            return $this->currentPath;
        }
        
    }
}

// should display '/a/b/c/x'.
$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;
?>