<?php
require 'Palindrome.php';
 
class PalindromeTests extends PHPUnit\Framework\TestCase
{
	private $palindrome;
  
	protected function setUp()
  {
		$this->palindrome = new Palindrome();  
	}
	
	protected function tearDown()
  {
		$this->palindrome = NULL;
  }
	
	// Testing a word that is a palindrome and starts with a uppercase letter
  public function testAdd1()
  {
		$result = $this->palindrome->isPalindrome( 'Deleveled' );
    $this->assertTrue($result);  
	}

	// Testing a word that is a palindrome and starts with a lowercase letter
  public function testAdd2()
  {
		$result = $this->palindrome->isPalindrome( 'madam' );
  	$this->assertTrue($result);
  }

	// Testing a word that is not a palindrome
  public function testAdd3()
  {
		$result = $this->palindrome->isPalindrome( 'testing' );
    $this->assertFalse($result);
  }
}
