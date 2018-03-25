<?php
class FileOwners
{
  public function groupByOwners( $files )
  {
    $result = array_flip( $files );
    foreach( $result as $key => $value ) {
      $result[ $key ] = array_keys( $files, $key );  
    }
    
    return $result; 
  }
}

$files = [
  "Input.txt" => "Randy",
  "Code.py" => "Stan",
  "Output.txt" => "Randy"
  ];

$fileOwners = new FileOwners;
var_dump( $fileOwners->groupByOwners( $files ) );
