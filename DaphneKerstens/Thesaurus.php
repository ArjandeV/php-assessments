<?php

class Thesaurus
{
    public function getSynonyms($word)
    {
        $synonyms = [
            "buy" => ["purchase"],
            "big" => ["great", "large"]
        ];

        $synonymsFound = (array_key_exists($word, $synonyms)) ?  $synonyms[$word] : [];

        return json_encode([
            'word' => $word,
            'synonyms' => $synonymsFound,
        ]);
    }
}

$thesaurus = new Thesaurus();
var_dump($thesaurus->getSynonyms("big"));

