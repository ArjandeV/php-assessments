<?php
class Path
{
  public $currentPath;
  
  function __construct( $path )  
  {
    $this->currentPath = $path;  
  }
  
  public function cd( $newPath )
  {
    $currentItems = explode( '/', $this->currentPath );
    $newItems = explode( '/', $newPath );
    
    if ( $newPath[ 0 ] !== '/' ) {
      foreach ( $newItems as $value ) {
        if ( $value === '..' ) {
          array_pop( $currentItems );  
        } else {
          array_push( $currentItems, $value );  
        }  
      }
      
      $this->currentPath = implode( '/', $currentItems );  
    } else {
      $this->currentPath = $newPath;  
    }
    
    return $this->currentPath;  
  }
}

$path = new Path( '/a/b/c/d' );
$path->cd( '../x' );
echo $path->currentPath;
