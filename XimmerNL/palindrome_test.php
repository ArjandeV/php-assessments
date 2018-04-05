<?php
require 'palindrome.php';

final class PalindromeTest extends PHPUnit\Framework\TestCase
{
    public function testA(): void
    {
        $in = "Deleveled";
        $out = true;
        $palindrome = new Palindrome;
        $test = $palindrome->isPalindrome($in);
        $this->assertEquals($out, $test);
    }
}
?>