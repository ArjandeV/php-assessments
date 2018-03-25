<?php
class Thesaurus
{
  private $thesaurus;
  
  function Thesaurus( $thesaurus )  
  {
    $this->thesaurus = $thesaurus;  
  }
  
  public function getSynonyms( $word )  
  {
    if ( ! empty( $this->thesaurus[ $word ] ) ) {
      $synonym = $this->thesaurus[ $word ];
    } else {
      $synonym = array();
    } 
    
    $synonyms = array (
      'word' => $word,
      'synonyms' => $synonym
      );
    
    return json_encode( $synonyms );
  }
}

$thesaurus = new Thesaurus(
  array (
    "buy" => array( "purchase" ),
    "big" => array( "great", "large" )
    ) ); 

echo $thesaurus->getSynonyms( "big" );
echo "\n";
echo $thesaurus->getSynonyms( "agelast" );
