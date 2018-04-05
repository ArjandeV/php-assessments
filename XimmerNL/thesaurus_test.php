<?php
require 'thesaurus.php';

final class ThesaurusTest extends PHPUnit\Framework\TestCase
{
    public function testA(): void
    {
        $in = 'big';
        $out = '{"word":"big","synonyms":["great","large"]}';
        $thesaurus = new Thesaurus(array(
                "buy" => array("purchase"),
                "big" => array("great", "large")
            )
        );
        $test = $thesaurus->getSynonyms($in);
        $this->assertEquals($out, $test);
    }
    
    public function testB(): void
    {
        $in = 'agelast';
        $out = '{"word":"agelast","synonyms":[]}';
        $thesaurus = new Thesaurus(array(
                "buy" => array("purchase"),
                "big" => array("great", "large")
            )
        );
        $test = $thesaurus->getSynonyms($in);
        $this->assertEquals($out, $test);
    }
}
?>