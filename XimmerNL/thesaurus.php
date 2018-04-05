<?php
class Thesaurus
{
    public $thesaurus;
    
    function __construct($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }
    
    public function getSynonyms($word)
    {
        // Find word in set
        $synonyms = (array_key_exists($word, $this->thesaurus)) ? $this->thesaurus[$word] : [];
        
        // Return json encoded array with search + result
        return json_encode(
            array(
                "word" => $word,
                "synonyms" => $synonyms
            )
        );
    }
}

$thesaurus = new Thesaurus(array(
        "buy" => array("purchase"),
        "big" => array("great", "large")
    )
);
var_dump($thesaurus->getSynonyms('big'));
var_dump($thesaurus->getSynonyms('agelast'));
?>