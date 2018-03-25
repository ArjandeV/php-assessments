<?php
require 'Thesaurus.php';
 
class ThesaurusTests extends PHPUnit\Framework\TestCase
{
	private $thesaurus;
 
  protected function setUp()
  {
		$structure = [ "buy" => [ "purchase" ], "big" => [ "great", "large" ] ];
    $this->thesaurus = new Thesaurus($structure);  
	}
	
	protected function tearDown()
  {
		$this->thesaurus = NULL;  
	}

	// Testing a word that has a synonym
  public function testAdd1()
  {
  	$result = $this->thesaurus->getSynonyms('big');
    $this->assertContains('{"word":"big","synonyms":["great","large"]}', $result);  
	}
	
	// Testing a word that has no synonym
  public function testAdd2()
  {
  	$result = $this->thesaurus->getSynonyms('agelast');
    $this->assertContains('{"word":"agelast","synonyms":[]}', $result);  
	}
}
