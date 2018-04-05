<?php
class Palindrome
{
    public function isPalindrome($word)
    {
        $word = strtolower($word);
        return ($word === strrev($word));
    }
}

$palindrome = new Palindrome;
var_dump($palindrome->isPalindrome('Deleveled'));
?>