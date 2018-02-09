<?php
/**
 * Created by PhpStorm.
 * User: williamdelrosario
 * Date: 2/8/18
 * Time: 2:10 PM
 */

namespace TDD;

class Thesaurus
{
    private $thesaurus;

    function Thesaurus($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {
        $ret=array();
        foreach($this->thesaurus as $key=>$value)
        {
            if($key==$word)
            {
                $inJson = array(
                    "word"=>$word,
                    "synonyms"=>$value
                );
                $ret = array_merge($ret,$inJson);
            }

        }
        if(count($ret)>0)
        {
            return json_encode($ret);
        }
        else
        {
            $inJson = array(
                "word"=>$word,
                "synonyms"=>array(),
            );
            return json_encode($inJson);
        }
    }
}

$thesaurus = new Thesaurus(
    array
    (
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ));

echo $thesaurus->getSynonyms("buy");

//Will run on PHP 7.1.9