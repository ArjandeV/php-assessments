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
        $dir = explode('/', $this->currentPath);
        $cd  = explode('/', $newPath);
        $hitung = 0;
        foreach($cd as $key => $value){
            if($value == '..'){
                $hitung += 1;
                unset($cd[$key]);
            }
        }
        
        $hasil = '';
        for($i=0; $i<= (count($dir)-1-$hitung); $i++){
            $hasil .= $dir[$i].(($i == (count($dir)-1-$hitung)) ? '' : '/'); 
        }
        
        $tmp_cd = implode('/',$cd);
        $this->currentPath = $hasil.(strlen($tmp_cd)>0 ? '/'.$tmp_cd : '');

        return $this;
    }
}

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;
