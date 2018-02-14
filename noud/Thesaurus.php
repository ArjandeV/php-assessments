<?php
class Thesaurus
{
    private $thesaurus;

    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {
	$synonims = (!empty($this->thesaurus[$word]) ? $this->thesaurus[$word] : array());
	return json_encode(array('word'=>$word, 'synonyms'=>$synonims));
    }
}

$thesaurus = new Thesaurus(
    array 
        (
            "buy" => array("purchase"),
            "big" => array("great", "large")
        )); 

echo json_encode($thesaurus->getSynonyms("big"));
echo "\n";
echo json_encode($thesaurus->getSynonyms("agelast"));
