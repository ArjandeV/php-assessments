<?php
use PHPUnit\Framework\TestCase;
include('Palindrome.php');

final class PalindromeTest extends TestCase
{
    public function testisPalindrome()
    {
	$palindrome = new Palindrome;
        $this->assertEquals(
            '1',
            $palindrome->isPalindrome('Deleveled')
        );
    }
}

