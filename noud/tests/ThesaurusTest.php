<?php
use PHPUnit\Framework\TestCase;
include('Thesaurus.php');

final class ThesaurusTest extends TestCase
{
    public function testHasThesaurus()
    {
	$thesaurus = new Thesaurus(
	    array(
        	"buy" => array("purchase"),
        	"big" => array("great", "large")
            )
	); 
        $this->assertEquals(
            '"{\"word\":\"big\",\"synonyms\":[\"great\",\"large\"]}"',
            json_encode($thesaurus->getSynonyms("big"))
        );
    }

    public function testHasNotThesaurus()
    {
	$thesaurus = new Thesaurus(
	    array(
        	"buy" => array("purchase"),
        	"big" => array("great", "large")
            )
	); 
        $this->assertEquals(
            '"{\"word\":\"agelast\",\"synonyms\":[]}"',
            json_encode($thesaurus->getSynonyms("agelast"))
        );
    }
}

