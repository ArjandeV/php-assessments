<?php

class Thesaurus
{
    private $thesaurus;
    
    function Thesaurus()
	{
       $this->thesaurus = array("buy" => array("purchase"), "big" => array("great", "large"));
    }
    
    public function getSynonyms($word)
    {
       $wordArray = array("word"=> $word);
       $synonymArray = array("synonyms"=> (array_key_exists($word, $this->thesaurus)) ? $this->thesaurus[$word] : [] );
       
       return json_encode($wordArray + $synonymArray);
    }

}

$theSaurus = new Thesaurus;
echo $theSaurus->getSynonyms("ss");
?>
